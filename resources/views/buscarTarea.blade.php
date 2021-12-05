@extends('layouts.index')
@section('eliminar')

<div class="bg-secondary d-flex justify-content-center">
    <div class="col-6">
        <form method="POST" action="/buscarfecha" class="p-5">
            {{csrf_field()}}
            <label>Busqueda por fecha:</label>
            <input type="date" id="start" name="fecha"><br><br>
            <input type="submit" value="Buscar" class="p-2 btn btn-info">
        </form>
    </div>
    <div class="col-6">
        <form method="POST" action="/buscarid" class="p-5">
            {{csrf_field()}}
            <label>Busqueda por usuarios:</label>
            <select class="form-select" name="usuario">
                @foreach ($usuarios as $usuario)
                <option value={{$usuario->id}}>{{$usuario->nombre}}</option>
                @endforeach
            </select><br>
            <input type="submit" value="Buscar" class="p-2 btn btn-info">
        </form>
    </div>
</div>
@yield('verbusqueda')
@endsection