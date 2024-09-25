{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #f0f8ff; /* Fondo claro */
            font-family: 'Roboto', sans-serif; /* Fuente elegante */
        }
        .table {
            margin-top: 20px;
            border: 2px solid #007bff; /* Borde azul */
            border-radius: 5px; /* Bordes redondeados */
            overflow: hidden; /* Para que los bordes redondeados se vean bien */
        }
        .table thead th {
            background-color: #007bff; /* Encabezados azules */
            color: white;
            text-align: center;
        }
        .table tbody tr:hover {
            background-color: #e7f1ff; /* Color al pasar el mouse */
        }
        .table tbody td {
            vertical-align: middle; /* Centrar verticalmente el texto */
            border: 1px solid #007bff; /* Bordes en las celdas */
        }
    </style>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>fecha</th>
                <th>documento</th>
                <th>orden</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($resultados as $resultado)
        <tr>
            
            <a href="/resultados/{{$resultado->id}}"></a>
            <th>{{ $resultado->fecha}}</th>
            <th>{{ $resultado->id_documento }}</th>
            <th>{{ $resultado->orden }}</th>
        
        </tr>
        @endforeach
        </tbody>
    </table>
    
    
      
    

    
</table>


    <form action="/logout" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cerrar sesion">
    </form>
</body>
</html> --}}

<!-- resources/views/resultados/index.blade.php -->
{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Pruebas de Laboratorio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Fondo claro */
            font-family: 'Roboto', sans-serif; /* Fuente elegante */
        }
        .table {
            margin-top: 20px;
            border: 2px solid #007bff; /* Borde azul */
            border-radius: 5px; /* Bordes redondeados */
            overflow: hidden; /* Para que los bordes redondeados se vean bien */
        }
        .table thead th {
            background-color: #007bff; /* Encabezados azules */
            color: white;
            text-align: center;
        }
        .table tbody tr:hover {
            background-color: #e7f1ff; /* Color al pasar el mouse */
        }
        .table tbody td {
            text-align: center; /* Alinear texto al centro */
            vertical-align: middle; /* Centrar verticalmente el texto */
            border: 1px solid #007bff; /* Bordes en las celdas */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Resultados de Pruebas de Laboratorio</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Documento</th>
                    <th>Orden</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resultados as $resultado)
                    <tr>
                        <td>
                            <a href="/resultados/{{ $resultado->id }}" style="text-decoration: none; color: inherit;">
                                {{ $resultado->fecha }}
                            </a>
                        </td>
                        <td>
                            <a href="/resultados/{{ $resultado->id }}" style="text-decoration: none; color: inherit;">
                                {{ $resultado->id_documento }}
                            </a>
                        </td>
                        <td>
                            <a href="/resultados/{{ $resultado->id }}" style="text-decoration: none; color: inherit;">
                                {{ $resultado->orden }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html> --}}
<!-- resources/views/resultados/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Pruebas de Laboratorio</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
 
</head>
<body>
    
    <header>
        
        <div class="menu-lateral">
            <img class="logo" src="../img/logo.png" alt="Logo">
            <hr>
            <div class="opciones">
                <div class="opcion1">
                    <a href="#"><img class="iconos" src="../img/icono-home.png" alt="Icono-home"></a>
                    <a href="#"><h5>Home</h5></a>
                </div>
            </div>
            <div class="opciones">
                <div class="opcion2">
                    <a href="#"><img class="iconos" src="../img/icono-perfil-usuario.png" alt="Icono de perfil de usuario"></a>
                    @foreach ($persona as $perso)
                    <a href="persona/{{ $perso->id }}"><h5>Perfil de usuario</h5></a>
                @endforeach
                
                </div>
            </div>
        </div>
        {{-- <img class="imagen-laboratorio" src="../img/imagen-superior-laboratorio-clinico.png" alt="Imagen laboratorio clinico"> --}}
        <button class="boton-LongOut">Cerrar sesión</button>
        <div class="recuadros-azules-con-iconos">
            <img class="recuadros" src="../img/recuadro-1.png" alt="Primer recuadro">
            <img class="recuadros" src="../img/recuadro-2.png" alt="Segundo recuadro">
            <img class="recuadros" src="../img/recuadro-3.png" alt="Tercer recuadro">
        </div>
        <div class="container mt-5" id="tabla-contenido">
            <h2 class="text-center">Resultados de Pruebas de Laboratorio</h2>
        
            <!-- Formulario de búsqueda -->
            <form method="GET" class="mb-4">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control" placeholder="Buscar por número de orden" value="{{ request('search') }}">
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Buscar</button>
                <a href="{{ route('complementos.index') }}" class="btn btn-secondary mt-3">Resetear</a>
            </form>
        
            <!-- Ordenamiento -->
            <div class="mb-3">
                <form method="GET" class="d-inline">
                    <input type="hidden" name="search" value="{{ request('search') }}">
                    <input type="hidden" name="start_date" value="{{ request('start_date') }}">
                    <input type="hidden" name="end_date" value="{{ request('end_date') }}">
                    <button type="submit" name="order" value="{{ request('order') === 'asc' ? 'desc' : 'asc' }}" class="btn btn-info">
                        Ordenar por Fecha {{ request('order') === 'asc' ? 'Descendente' : 'Ascendente' }}
                    </button>
                </form>
            </div>
        
            <!-- Tabla de Resultados -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Documento</th>
                        <th>Orden</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if($resultados->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center">No se encontraron resultados.</td>
                        </tr>
                    @else
                        @foreach ($resultados as $resultado)
                            <tr>
                                <td>{{ $resultado->fecha }}</td>
                                <td>{{ $resultado->id_documento }}</td>
                                <td>{{ $resultado->orden }}</td>
                                <td>
                                    <a href="{{ route('complementos.showResult', $resultado->id) }}" class="btn btn-info">Ver Detalles</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        
            <!-- Paginación -->
            <div class="d-flex justify-content-center">
                {{ $resultados->links() }}
            </div>
        </div>
        