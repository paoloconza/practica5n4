<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Usuario::all();
         $usuarios = Usuario::all();
        return view('usuario',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo_electronico = $request->correo_electronico;
        $usuario->contrasena = $request->contrasena;
        $usuario->save();
        return "nuevo usuario creado satisfactoriamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return $usuario;
        // $usuario->response();
        // if ($usuario) {
        //     return response()->json($usuario);
        // } else {
        //     return response()->json(['error' => 'Usuario no encontrado'], 404);
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo_electronico = $request->correo_electronico;
        $usuario->contrasena = $request->contrasena;
        $usuario->save();
        return "se actualizo el usuario";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "se elimino un usuario";
    }
}
