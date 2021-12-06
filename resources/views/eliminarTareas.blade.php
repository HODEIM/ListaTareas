@extends('layouts.index')
@section('eliminar')
<div class="m-auto subTamaino">
    <table class="table table-hover table-striped m-auto fondoTabla">
        <thead>
            <tr>
                <th colspan="2"><h2>Eliminar Tarea</h2></th>
            </tr>
        </thead>
        <tbody>
        @each('partials.botonEliminar', $tarea, 'tarea')
        </tbody>
    </table>
</div>
@endsection