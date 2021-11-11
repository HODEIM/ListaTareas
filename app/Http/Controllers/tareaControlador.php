<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class tareaControlador extends Controller
{
    function vista()
    {
        $consultaTareas= Tarea::get();
        return view('tareas', ['queryprueba', 'PRUEBA']);
    }
    function add(Request $request)
    {
        Tarea::create([
            "nombre"=> $request->get("nombre")
        ]);
        return redirect("/");
    }function delete()
    {
        
    }
}
