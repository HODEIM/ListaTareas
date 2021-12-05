@extends('layouts.index')
@section('ver')
<div class="bg-secondary">
    <div class="d-flex justify-content-center mb-2">
        <div class="col-6">
            <form method="POST" action="/anadir" class="pt-5 px-5">
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
                    <input type="submit" value="Añadir Tarea" class="pt-2 px-2 btn btn-info">
                </div>
            </form>
            <br>
        </div>
        <div class="col-6">
            <form method="POST" action="/crearUsuario" class="pt-5 px-5">
                {{csrf_field()}}
                <h1>Añadir Usuario</h1>
                <div>
                    <label for="formGroupExampleInput">Nombre:</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombreUsuario">
                    <label for="formGroupExampleInput">Nombre:</label>
                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidosUsuario"><br>
                    <input type="submit" value="Crear Usuario" class="pt-2 px-2 btn btn-info">
                </div>
            </form>
        </div>
    </div>
    @error('nombre')

    <div class="alert alert-danger m-2" role="alert">
        Tienes que poner un nombre!!
    </div><br>
    @enderror
</div>
@endsection