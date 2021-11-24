<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        // protecion de url can:nombreDelPersimo especificamos a cual metodo queremos que se aplique
        $this->middleware('can:users.index')->only('index'); 
        $this->middleware('can:users.edit')->only('edit', 'update');
    }
    public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }


    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

   
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $user = User::create($request->all());
        
        return redirect()->route('users.index')
            ->with('success', 'Usuario creado con éxito.');
    }

   
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

   
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);

        return view('user.edit', compact('user', 'roles'));
    }

   
    public function update(Request $request, User $user)
    {
        request()->validate(User::$rules);
        $user->roles()->sync($request->roles); //asignamos el rol
        $user->update($request->all());
        // ver editar contraseña
        return redirect()->route('users.index')
            ->with(
            'success', 'User updated successfully', 
            'roles', 'Se asigno los roles correctamente'
        );
    }


    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
