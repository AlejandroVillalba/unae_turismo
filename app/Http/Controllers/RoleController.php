<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPermiso especificamos a cual metodo queremos que se aplique
        $this->middleware('can:roles.index')->only('index'); 
        $this->middleware('can:roles.create')->only('create');
        $this->middleware('can:roles.show')->only('show');
        $this->middleware('can:roles.edit')->only('edit', 'update');
    }
    public function index()
    {
        $roles = Role::all();

        return view('role.index', compact('roles'))
            ->with('i');
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

        return view('role.show', compact('role', 'permissions'));
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
