@extends('index')
@section('eliminar')
<div class="m-auto">
    <h1 class="bg-dark m-auto text-center">Eliminador de Tareas:</h1>
    @foreach ( $tarea as $resultado)
    <table class="m-auto table table-striped table-dark">
        <form method="POST" action="/eliminar/{{$resultado->id}}">
            {{csrf_field()}}
            @method('delete')
            <tr>
                <td>
                    <h5 style="vertical-align: middle;">{{ $resultado->nombre }}</h5>
                </td>
                <td style="text-align: end;"><input type="submit" value="Eliminar" class="btn btn-danger"></td>
            </tr>
        </form>
        @endforeach
    </table>
</div>
@endsection