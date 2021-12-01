@extends('buscarTarea')
@section('verbusqueda')
<h1 class="bg-dark m-auto text-center">Resultado de tu búsqueda:</h1>
@foreach ( $tarea as $resultado)
<table class="m-auto table table-striped table-dark">
    <form method="POST" action="/tarea/{{$resultado->id}}">
        {{csrf_field()}}
        @method('delete')
        <tr>
            <td>
                <h5 style="text-align: center;">{{ $resultado->nombre }}</h5>
            </td>
        </tr>
    </form>
    @endforeach
</table>
@endsection