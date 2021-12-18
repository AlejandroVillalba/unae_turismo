<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;


class PermissionController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPermiso especificamos a cual metodo queremos que se aplique
        $this->middleware('can:permissions.index')->only('index'); 
        $this->middleware('can:permissions.create')->only('create');
        $this->middleware('can:permissions.edit')->only('edit', 'update');
    }
    public function index()
    {
        $permissions = Permission::all();

        return view('permission.index', compact('permissions'))
            ->with('i');
    }


    public function create()
    {
        $permission = new Permission();
        return view('permission.create', compact('permission'));
    }

    public function store(Request $request)
    {
       

        $permission = Permission::create($request->all());

        return redirect()->route('permissions.index')
            ->with('success', 'Permission created successfully.');
    }


    public function edit(Permission $permission)
    {
        
        return view('permission.edit', compact('permission'));
    }

    
    public function update(Request $request, Permission $permission)
    {
        

        $permission->update($request->all());

        return redirect()->route('permissions.index')
            ->with('success', 'Permission updated successfully');
    }


    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permissions.index')
            ->with('success', 'Permission deleted successfully');
    }
}
