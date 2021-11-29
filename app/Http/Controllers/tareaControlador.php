<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class tareaControlador extends Controller
{
    function index()
    {
        // $consultaTareas = Tarea::get();
        // return view('tareas', ['tarea' => $consultaTareas]);
        return view('index');
    }

    function ver()
    {
        $consultaTareas = Tarea::get();
        return view('verTareas', ['tarea' => $consultaTareas]);
    }
    function verAdd()
    {
        return view('anadirTarea');
    }

    function add(Request $request)
    {
        Tarea::create([
            "nombre" => $request->get("nombre")
        ]);
        return redirect("/veranadir");
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
    function verbuscar(Request $request)
    {
        return view('buscarTarea');
    }
    function buscar(Request $request)
    {
        $resul = Tarea::where('nombre', 'like', '%'. $request->buscar. '%')->get();
        return view('verbusquedatarea', ['tarea' => $resul]);
    }
}
