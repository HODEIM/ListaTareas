@extends('layouts.index')
@section('ver')
<div class="m-auto">
    <h1 class="bg-dark m-auto text-center">Tareas:</h1>
    <table class="m-auto table table-striped table-dark">
        <th>Tarea:</th>
        <th style="text-align: end;">Usuario:</th>
        @foreach ( $tarea as $resultado)
        
        <form method="POST" action="/tarea/{{$resultado->id}}">
            {{csrf_field()}}
            @method('delete')
            <tr>
                <td>
                    <h5>{{ $resultado->nombre }}</h5>
                </td>
                <td>
                    <h5 style="text-align: end;">{{ $usuarios[$resultado->id_usuario-1]->nombre }}</h5>
                </td>
            </tr>
        </form>
        @endforeach
    </table>
</div>
@endsection