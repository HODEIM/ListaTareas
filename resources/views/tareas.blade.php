<!DOCTYPE html>
<html>

<head>
    <title>
        Lista de Tareas
    </title>
</head>

<body>
    <table>

        <form method="POST" action="/tarea">
            {{csrf_field()}}
            <h2>New Task</h2>
            <input id="anadir" type="text" name="nombre">
            <input type="submit" value="new task">
        </form>



        <h2>Tareas:</h2>
        @foreach ( $tarea as $resultado)

        <form method="POST" action="/tarea/{{$resultado->id}}">
            {{csrf_field()}}
            @method('delete')
            <tr>
                <td>
                    <p>{{ $resultado->nombre }}</p>
                </td>
                <td><input type="submit" value="eliminar"></td>
            </tr>
        </form>
        @endforeach



    </table>
</body>

</html>