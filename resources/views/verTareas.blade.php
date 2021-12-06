@extends('layouts.index')
@section('ver')
<div class="m-auto subTamaino">
    <table class="table table-hover table-striped m-auto fondoTabla">
        <thead>
            <tr>
                <th style="border-right: solid white;">
                    <h2>Tarea:</h2>
                </th>
                <th><h2>Usuario:</h2></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $tarea as $resultado)
            <form method=" POST" action="/tarea/{{$resultado->id}}">
                    {{csrf_field()}}
                    @method('delete')
            <tr>
                <td scope="row" style="border-right: solid white;">
                    <h5>{{ $resultado->nombre }}</h5>
                </td>
                <td>
                    <h5>{{ $usuarios[$resultado->id_usuario-1]->nombre }}</h5>
                </td>
            </tr>
            </form>
            @endforeach
            </tbody>
    </table>
</div>

@endsection