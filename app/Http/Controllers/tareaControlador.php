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
    function verAdd() {
        return view('anadirTarea');
    }

    function add(Request $request)
    {
        Tarea::create([
            "nombre" => $request->get("nombre")
        ]);
        return redirect("/veranadir");
    }
    function delete($id)
    {
        Tarea::destroy($id);
        return redirect("/vertareas");
    }
}
