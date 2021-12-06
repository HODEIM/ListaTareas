@extends('layouts.index')
@section('eliminar')
<div class="m-auto subTamaino">

    <table class="table table-bordered fondoTabla">
        <thead>
            <tr>
                <th scope="col">
                    <h2>Búsqueda avanzada</h2>
                </th>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="/buscarfecha" class="p-5">
                {{csrf_field()}}
                <tr>
                    <td>
                        <h4>Búsqueda por Fecha:</h4>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">
                        <input type="date" id="start" name="fecha" class="form-control">
                    </td>
                    <td>
                        <input type="submit" value="Buscar" class="p-2 btn btn-outline-dark">
                    </td>
                </tr>
            </form>
            <form method="POST" action="/buscarid" class="p-5">
                {{csrf_field()}}
                <tr>
                    <td>
                        <h4>Búsqueda por Usuario:</h4>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <select class="form-select" name="usuario">
                            @foreach ($usuarios as $usuario)
                            <option value={{$usuario->id}}>{{$usuario->nombre}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="submit" value="Buscar" class="p-2 btn btn-outline-dark">
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
    @yield('verbusqueda')
</div>


@endsection