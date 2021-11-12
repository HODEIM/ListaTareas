<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class tareaControlador extends Controller
{
    function vista()
    {
        $consultaTareas= Tarea::get();
        return view('tareas', ['tarea' => $consultaTareas]);
    }
    function add(Request $request)
    {
        Tarea::create([
            "nombre"=> $request->get("nombre")
        ]);
        return redirect("/");
    }function delete($id)
    {
        Tarea::destroy($id);
        return redirect("/");
    }
}
