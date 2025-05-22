<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    // Procesar el login
    public function login(Request $request){
        // Validar los datos del formulario
        $request->validate([
            'usuario' => 'required|string',
            'correo' => 'required|email',
            'contrasena' => 'required|string',
        ]);

        // Verificar las credenciales
        $usuario = Usuario::where('nombre', $request->usuario)
                          ->where('correo', $request->correo)
                          ->first();

        if ($usuario && password_verify($request->contrasena, $usuario->contra)) {
            // Autenticar al usuario
            Auth::login($usuario);
            if ($usuario->tipo === 'Administrador') {
                return redirect()->route('admin.inicio');
            } else {
                // Redirigir al usuario
                return redirect()->route('inicio'); 
            }
        }

        // Si las credenciales son incorrectas
        return back()->with('errorlogin', 'No existe esa cuenta.');
    }

    // Cerrar sesión
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
