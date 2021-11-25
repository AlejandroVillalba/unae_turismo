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

        $roles = Role::create($request->only('name'));

        $roles->permissions()->sync($request->permissions);
        
        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully.');
    }

  
    public function show($id)
    {
        $role = Role::find($id);

        return view('role.show', compact('role'));
    }


    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();

        return view('role.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
         $request->validate([
            'name' => 'required'
        ]);

        $role->update($request->all());

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }


    public function destroy($id)
    {
        $role = Role::find($id)->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
