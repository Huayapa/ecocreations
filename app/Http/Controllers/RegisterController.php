<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Direccion;
use App\Models\Pais;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show() {
        $paises = Pais::all();
        if($paises) {
            return view("register", compact("paises"));
        }
        return view("register");
    }

    public function register(Request $request){
        // Validación
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255|unique:usuario',
            'contrasena' => 'required|string|min:4',
            'telefono' => 'required|string|max:20|min:9',
            'dni' => 'required|string|max:15|unique:cliente',
            'calle' => 'required|string|max:255',
            'codigopostal' => 'required|string|max:10',
            'ciudad' => 'required|string|max:100',
            'pais' => 'required|int'
        ]);
        try {
            DB::transaction(function () use ($request) {
                // Crear usuario
                $user = Usuario::create([
                    'nombre' => $request->nombre,
                    'correo' => $request->correo,
                    'contra' => Hash::make($request->contrasena),
                    'tipo' => 'Cliente',
                ]);
                //Crear la direccion
                $direccion = Direccion::create([
                'calle' => $request->calle,
                'ciudad' => $request->ciudad,
                'codigoPostal' => $request->codigopostal,
                'idPais' => $request->pais
                ]);
                // Crear cliente vinculado al usuario
                Cliente::create([
                    'telefono' => $request->telefono,
                    'dni' => $request->dni,
                    'idUsuario' => $user->idUsuario,
                    'idDireccion' => $direccion->idDireccion, // o el valor real si lo tienes
                ]);
            });
            return redirect()->route('register.form')->with('successcreate', 'Usuario registrado con éxito.');
        } catch (Exception $e) {
            return redirect()->route('register.form')->with('errorcreate', 'Ocurrió un error al registrar. Intenta nuevamente.');
        }
    }
}
