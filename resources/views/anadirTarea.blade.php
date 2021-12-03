@extends('layouts.index')
@section('ver')
<div class="bg-secondary d-flex justify-content-center">
    <form method="POST" action="/anadir" class="p-5">
        {{csrf_field()}}
        <h1>Nueva Tarea</h1>
        <div>
            <label for="formGroupExampleInput">Nombre:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre" id="anadir" name="nombre">
            <label for="formGroupExampleInput">Seleccione un Usuario:</label>
            <select class="form-select" name="usuario">
                @foreach ($usuarios as $usuario)
                <option value={{$usuario->id}}>{{$usuario->nombre}}</option>
                @endforeach
            </select><br>
            <input type="submit" value="Añadir Tarea" class="p-2 btn btn-info">
        </div>
    </form>
    <form method="POST" action="/crearUsuario" class="p-5">
        {{csrf_field()}}
        <h1>Añadir Usuario</h1>
        <div>
            <label for="formGroupExampleInput">Nombre:</label>
            <input type="text" class="form-control" placeholder="Nombre" name="nombreUsuario">
            <label for="formGroupExampleInput">Nombre:</label>
            <input type="text" class="form-control" placeholder="Apellidos" name="apellidosUsuario"><br>
            <input type="submit" value="Crear Usuario" class="p-2 btn btn-info">
        </div>
    </form>
    @error('nombre')
    <br>
    <div class="alert alert-danger" role="alert">
        Tienes que poner un nombre!!
    </div>
    @enderror
</div>
@endsection