<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    protected $perPage = 20;
    public function index()
    {
        $roles = Role::paginate();

        return view('role.index', compact('roles'))
            ->with('i', (request()->input('page', 1) - 1) * $roles->perPage());
    }

   
    public function create()
    {
        $role = new Role();
        $permissions = Permission::all();
        
        return view('role.create', compact('role', 'permissions'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create($request->only('name'));

        $role->permissions()->sync($request->permissions);
        
        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully.');
    }

  
    public function show(Role $role)
    {
        $permissions = Permission::all();

        return view('role.show', compact('role'));
    }


    public function edit(Role $role)
    {
        
        $permissions = Permission::all();

        return view('role.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
         $request->validate([
            'name' => 'required'
        ]);

        $role->permissions()->sync($request->permissions);
        $role->update($request->all());
        
    
        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }


    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
