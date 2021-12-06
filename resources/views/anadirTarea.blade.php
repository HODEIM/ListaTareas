@extends('layouts.index')
@section('ver')
<div class="subTamaino">
    <table class="table fondoTabla">
        <thead>
            <tr>
                <th scope="col"><h2>Nueva Tarea</h2></th>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="/anadir" class="pt-5 px-5">
                {{csrf_field()}}
                <tr>
                    <td><h4>Tarea:</h4></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" placeholder="Nombre" id="anadir" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td><h4>Usuario:</h4></td>
                </tr>
                <tr>
                    <td>
                        <select class="form-select" name="usuario">
                            @foreach ($usuarios as $usuario)
                            <option value={{$usuario->id}}>{{$usuario->nombre}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Añadir Tarea" class="pt-2 px-2 btn btn-outline-dark">
                    </td>
                </tr>
            </form>
            
        </tbody>

    </table>

    <table class="table fondoTabla">
        <thead>
            <tr>
                <th scope="col"><h2>Crear Usuario:</h2></th>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="/crearUsuario" class="pt-5 px-5">
                {{csrf_field()}}
                <tr>
                    <td><h4>Nombre:</h4></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" placeholder="Nombre" name="nombreUsuario">
                    </td>
                </tr>
                <tr>
                    <td><h4>Apellido:</h4></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" placeholder="Apellidos" name="apellidosUsuario">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Crear Usuario" class="pt-2 px-2 btn btn-outline-dark">
                    </td>
                </tr>
            </form>
            <tr>
                <td>
                    @error('nombreUsuario')
                    <div class="alert alert-danger " role="alert">
                        Rellene los datos del Usuario
                    </div>
                    @enderror
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection