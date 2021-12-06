<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .tamaino {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            background-color: black;
            color: white;

            background-image: url("https://www.inconfundiblemente.com/wp-content/uploads/2019/10/glenn-carstens-peters-RLw-UC03Gwc-unsplash-1024x682.jpg");

            height: 100vh;
            background-position: center;
            background-repeat: no-repeat, repeat;
            background-size: cover;
        }

        .fondoTabla {
            background-color: #e6e6e6;
        }


        .subTamaino {
            padding: 3vh;
        }

    </style>
    <title>
        Lista de Tareas Hodei
    </title>

</head>

<body>

    <div class="tamaino">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid text-center">
                <div class="navbar-brand m-auto" href="#">
                    <h1>Lista de Tareas</h1>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-end">
                        <a class="nav-link active" aria-current="page" href="/vertareas">Ver Tareas</a>
                        <a class="nav-link active" href="/veranadir">Añadir Tarea</a>
                        <a class="nav-link active" href="/vereliminar">Eliminar Tareas</a>
                        <a class="nav-link active" href="/verbuscar">Busqueda avanzada</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('ver')
        @yield('anadir')
        @yield('eliminar')
        @yield('buscar')
    </div>

</body>


</html>