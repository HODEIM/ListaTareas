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
        $consultaTareas = Tarea::get();
        return view('verTareas', ['tarea' => $consultaTareas]);
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
        return view('buscarTarea');
    }
    function buscar(Request $request)
    {
        $resul = Tarea::where('nombre', 'like', '%' . $request->buscar . '%')->get();
        return view('verbusquedatarea', ['tarea' => $resul]);
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
