<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $titulo = " Login de usuario";
        return view("layout.login", compact("titulo"));
    }



    public function welcome()
    {
        // dd(Auth::check(), Auth::user());
        //dd(Auth::user());
        $titulo = " Login de usuario";
        return view("module.welcome", compact("titulo"));
    }

    public function nosotros()
    {
        // dd(Auth::check(), Auth::user());
        //dd(Auth::user());
        $titulo = "nosotros";
        return view("module.nosotros", compact("titulo"));
    }

    public function pruebas()
    {

        return view("module.pruebas");
    }



    public function logear(Request $request)
    {
        // Validar datos de las credenciales
        $credenciales = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar el email
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Credencial incorrecta'])->withInput();
        }

        if (!$user->activo) {
            return back()->withErrors(['email' => 'Tu cuenta está inactiva'])->withInput();
        }

        // Crear sesión de usuario
        Auth::login($user);
        $request->session()->regenerate();

        // 🔥 AQUI VIENE LO IMPORTANTE 🔥
        return redirect()->route('welcome');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }



    public function crearAdmin()
    {
        //crear directamente un admin
        User::create([
            'nombre_user' => 'Facultad Autodidacta',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'telefono' => 123456789,
            'direccion' => 'Calle Ficticia 123',
            'activo' => true,
            'Rol' => 'admin'
        ]);

        return "Admin creado con exito!!";
    }
    public function crearUser()
    {
        //crear directamente un admin
        User::create([
            'nombre_user' => 'autista2',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'telefono' => 123456329,
            'direccion' => 'Calle falsa 123',
            'activo' => true,
            'Rol' => 'user'
        ]);

        return "Admin creado con exito!!";
    }
}
