@extends('index')
@section('eliminar')
<div class="m-auto">
    <h1 class="bg-dark m-auto text-center">Eliminador de Tareas:</h1>
    <table class="m-auto table table-striped table-dark">
    @each('botonEliminar', $tarea, 'tarea')
    </table>
</div>
@endsection