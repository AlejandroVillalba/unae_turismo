<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;


class PermissionController extends Controller
{
    protected $perPage = 20;
    
    public function index()
    {
        $permissions = Permission::paginate();

        return view('permission.index', compact('permissions'))
            ->with('i', (request()->input('page', 1) - 1) * $permissions->perPage());
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


    public function edit($id)
    {
        $permission = Permission::find($id);

        return view('permission.edit', compact('permission'));
    }

    
    public function update(Request $request, Permission $permission)
    {
        

        $permission->update($request->all());

        return redirect()->route('permissions.index')
            ->with('success', 'Permission updated successfully');
    }


    public function destroy($id)
    {
        $permission = Permission::find($id)->delete();

        return redirect()->route('permissions.index')
            ->with('success', 'Permission deleted successfully');
    }
}
