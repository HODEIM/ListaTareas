<!DOCTYPE html>
<html>
    <head>
        <title>
        Lista de Tareas
        </title>
    </head>
    <body>
        <form method="POST" action="/tarea">
            {{csrf_field()}}
            <h2>New Task</h2>
            <input id="anadir" type="text" name="nombre">
            <input type="submit" value="new task">

            @foreach ( $query  as $resultado)
                <h1>{{ $resultado->nombre }}</h1>
            @endforeach        

        </form>
    </body>
</html>