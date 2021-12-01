@extends('layouts.index')
@section('ver')
<div class="bg-secondary d-flex justify-content-center">
    <form method="POST" action="/anadir" class="p-5">
        {{csrf_field()}}
        <h1>Nueva Tarea</h1>
        <div>
            <label for="formGroupExampleInput">Nombre:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre" id="anadir" name="nombre"><br>
            <input type="submit" value="Añadir" class="p-2 btn btn-info">
        </div>
    </form>
</div>
@endsection