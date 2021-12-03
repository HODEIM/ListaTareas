<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'nombre',
        'id_usuario'
     ]; 
     public function usuario() {
         return $this->belongsTo("App\Models\Usuario");
     }
}
