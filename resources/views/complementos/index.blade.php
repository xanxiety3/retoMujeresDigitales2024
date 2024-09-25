<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="container">
        <!-- Menú lateral azul -->
        <img class="barra-lateral" src="../img/barra-lateral.png" alt="Barra de menu">
        <img class="logo-blanco" src="../img/logo-blanco.png" alt="Logo">
        <div class="menu">
            <div class="opciones">
                <div class="opcion1">
                    <a href="#"><img class="iconos" src="../img/icono-home.png" alt="Icono-home"></a>
                    <a href="#"><h5>Home</h5></a>
                </div>
                <div class="opcion2">
                    <a href="/resultados"><img class="iconos" src="../img/icono-perfil-usuario.png" alt="Icono de perfil de usuario"></a>
                    <a href="/persona/{{$persona->id}}"><h5>Perfil de usuario</h5></a>
                </div>
            </div>
        </div>
        
        <!-- Contenido principal -->
        
           <h1 class="nom">{{$personaNombre}} {{$personaApellido}}</h1>
        
        
        <div class="contenido">
            <img class="imagen-superior-lab" src="../img/imagen-superior-lab.png" alt="imagen superior del laboratorio">
        </div>
        <div class="recuadros-azules-con-iconos">
            <img class="recuadros" src="../img/recuadro-1.png" alt="Primer recuadro">
            <img class="recuadros" src="../img/recuadro-2.png" alt="Segundo recuadro">
            <img class="recuadros" src="../img/recuadro-3.png" alt="Tercer recuadro">
        </div>
    
        <button class="boton-LongOut">Cerrar sesión</button>
       
       <div class="container mt-5" id="tabla-contenido">
            <h2 class="text-center">Resultados de Pruebas de Laboratorio</h2>   

           
            <form method="GET" class="mb-4">
                 <!-- Formulario de búsqueda -->
            <div class="seccion-buscador">
                
                        <input type="text" name="search" id="buscador" placeholder="  Buscar por número de orden" value="{{ request('search') }}">
                
                        <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                 
                        <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                   
                
            </div class="botones">
                <button type="submit" class="boton">Buscar</button>
                <div class="boton-resetear"><a href="{{ route('complementos.index') }}" class="boton-resetear">Resetear</a></div>
            </form>

        
            <!-- Ordenamiento -->
            <div class="mb-3">
                <form method="GET" >
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
        {{-- paginacion  --}}
            {{$resultados->links()}}
        </div>
        
        
</body>
</html>
       