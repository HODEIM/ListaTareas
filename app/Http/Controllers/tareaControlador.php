<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class tareaControlador extends Controller
{
    function vista()
    {
        return view('tareas');
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
