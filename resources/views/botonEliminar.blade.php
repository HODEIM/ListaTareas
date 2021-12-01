<form method="POST" action="/eliminar/{{$tarea->id}}">
    {{csrf_field()}}
    @method('delete')
    <tr>
        <td>
            <h5 style="vertical-align: middle;">{{ $tarea->nombre }}</h5>
        </td>

        <td style="text-align: end;"><input type="submit" value="Eliminar" class="btn btn-danger"></td>
    </tr>
</form>