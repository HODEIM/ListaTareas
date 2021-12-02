@extends('layouts.index')
@section('ver')
<div class="bg-secondary d-flex justify-content-center">
    <form method="POST" action="/anadir" class="p-5">
        {{csrf_field()}}
        <h1>Nueva Tarea</h1>
        <div>
            <label for="formGroupExampleInput">Nombre:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre" id="anadir" name="nombre"><br>
            <select class="form-select" aria-label="Default select example">
                @foreach ($usuarios as $usuario)
                <option value={{  '$usuario->nombre' }}>{{$usuario->nombre}}</option>
                @endforeach
            </select><br>
            <input type="submit" value="Añadir" class="p-2 btn btn-info">
        </div>
        @error('nombre')
        <br>
        <div class="alert alert-danger" role="alert">
            Tienes que poner un nombre!!
        </div>
        @enderror
    </form>
</div>
@endsection