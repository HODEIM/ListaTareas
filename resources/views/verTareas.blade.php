@extends('index')
@section('ver')
<div class="m-auto">
    <h2>Tareas:</h2>
    @foreach ( $tarea as $resultado)
    <table class="m-auto">
        <form method="POST" action="/tarea/{{$resultado->id}}">
            {{csrf_field()}}
            @method('delete')
            <tr>
                <td class="px-5">
                    <label>{{ $resultado->nombre }}</label>
                </td>
                <td><input type="submit" value="eliminar"></td>
            </tr>
        </form>
        @endforeach
    </table>
</div>
@endsection