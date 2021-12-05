<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Usuario;

class tareaControlador extends Controller
{
    function index()
    {
        // $consultaTareas = Tarea::get();
        // return view('tareas', ['tarea' => $consultaTareas]);
        return view('layouts.index');
    }

    function ver()
    {
        $tareas = Tarea::get();
        $usuarios = Usuario::get();
        return view('verTareas', ['tarea' => $tareas, 'usuarios' => $usuarios]);
    }
    function verAdd()
    {
        $usuarios = Usuario::all();
        return view('anadirTarea', ['usuarios' => $usuarios]);
    }

    function add(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
       Tarea::create([
            "nombre" => $request->get("nombre"),
            "id_usuario" => $request->get("usuario")
        ]);
           return redirect("/veranadir");
        //return $request->get("usuario");
    }

    function vereliminar()
    {
        $consultaTareas2 = Tarea::get();
        return view('eliminarTareas', ['tarea' => $consultaTareas2]);
    }

    function delete($id)
    {
        Tarea::destroy($id);
        return redirect("/vertareas");
    }
    function verbuscar()
    {
        $usuarios = Usuario::get();
        return view('buscarTarea', ['usuarios' => $usuarios]);
    }
    function buscarfecha(Request $request)
    {
        $usuario = Usuario::get();
        $resul = Tarea::where('created_at', 'like', '%'. $request->fecha. '%' )->get();
        return view('verbusquedatarea', ['tarea' => $resul, 'usuarios' => $usuario]);
    }
    function buscarPorId(Request $request)
    {
        $usuario = Usuario::get();
        $resul = Tarea::where('id_usuario', '=',  $request->usuario)->get();
        return view('verbusquedatarea', ['tarea' => $resul, 'usuarios' => $usuario]);
    }

    function addUser(Request $request)
    {
        $request->validate([
            'nombreUsuario' => 'required',
            'apellidosUsuario' => 'required',
        ]);
        Usuario::create([
            "nombre" => $request->get("nombreUsuario"),
            "apellidos" => $request->get("apellidosUsuario")
        ]);
        return redirect("/veranadir");
    }
}
