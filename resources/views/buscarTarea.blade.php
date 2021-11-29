@extends('index')
@section('eliminar')

<div class="bg-secondary d-flex justify-content-center">
    <form method="POST" action="/buscar" class="p-5">
        {{csrf_field()}}
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Buscar por nombre" id="buscar" name="buscar"><br>
        <input type="submit" value="Buscar" class="p-2 btn btn-info">
    </form>
   
</div>
@yield('verbusqueda')
@endsection