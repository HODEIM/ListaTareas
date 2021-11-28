@extends('index')
@section('ver')
<div class="m-auto">
    <h2 class="bg-dark m-auto text-center">Tareas:</h2>
    @foreach ( $tarea as $resultado)
    <table class="m-auto table table-striped table-dark">
        <form method="POST" action="/tarea/{{$resultado->id}}">
            {{csrf_field()}}
            @method('delete')
            <tr>
                <td class="px-5">
                    <label style="vertical-align: middle;">{{ $resultado->nombre }}</label>
                </td>
                <td style="text-align: end;"><input type="submit" value="Eliminar" class="btn btn-danger"></td>
            </tr>
        </form>
        @endforeach
    </table>
</div>
@endsection