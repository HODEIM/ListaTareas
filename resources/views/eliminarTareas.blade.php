@extends('layouts.index')
@section('eliminar')
<div class="m-auto">
    <h1 class="bg-dark m-auto text-center">Eliminador de Tareas:</h1>
    <table class="m-auto table table-striped table-dark">
    @each('partials.botonEliminar', $tarea, 'tarea')
    </table>
</div>
@endsection