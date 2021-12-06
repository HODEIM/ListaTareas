@extends('buscarTarea')
@section('verbusqueda')
<div>
    <table class="table table-hover table-striped m-auto fondoTabla">
        <thead>
            <tr>
                <th><h2>Tarea:</h2></th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $tarea as $resultado)
                    {{csrf_field()}}
            <tr>
                <td>
                    <h5>{{ $resultado->nombre }}</h5>
                    </td>
            </tr>
            @endforeach
            </tbody>
    </table>
</div>
@endsection