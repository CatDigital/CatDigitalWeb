<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('users.index', compact('usuarios'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_user' => 'required|string|max:255',
            'email' => 'required|email|unique:usuario,email',
            'password' => 'required|string|min:6|confirmed',
            'Rol' => 'required|in:admin,user',
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
        ]);

        User::create([
            'nombre_user' => $request->nombre_user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'Rol' => $request->Rol,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'activo' => 1,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nombre_user' => 'required|string|max:255',
            'email' => 'required|email|unique:usuario,email,' . $user->id_user . ',id_user',
            'Rol' => 'required|in:admin,user',
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
        ]);

        $user->update([
            'nombre_user' => $request->nombre_user,
            'email' => $request->email,
            'Rol' => $request->Rol,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
