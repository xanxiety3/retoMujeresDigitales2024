<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
        <link rel="shortcut icon" href="../img/logo-solo.png" />
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
                    <a href="/resultados" id="opciones"><img class="iconos" src="../img/icono-home.png" alt="Icono-home"></a>
                    <a href="/resultados" id="opciones"><h5>Home</h5></a>
                </div>
                <div class="opcion2">
                    <a href="/persona/{{$persona->id}}" id="opciones"><img class="iconos" src="../img/icono-perfil-usuario.png" alt="Icono de perfil de usuario"></a>
                    <a href="/persona/{{$persona->id}}" id="opciones"><h5>Perfil de usuario</h5></a>
                </div>
            </div>
        </div>


        <!-- Contenido principal -->
        <div class="contenido">
            <div class="imagenes-principales">
            <img class="imagen-superior-lab" src="../img/imagen-superior-lab.png" alt="imagen superior del laboratorio">
            <h1 class="nom">Bienvenido(a), {{$personaNombre}} {{$personaApellido}}</h1>
            <div class="recuadros-azules-con-iconos">
                <img class="recuadros" src="../img/recuadro-1.png" alt="Primer recuadro">
                <img class="recuadros" src="../img/recuadro-2.png" alt="Segundo recuadro">
                <img class="recuadros" src="../img/recuadro-3.png" alt="Tercer recuadro">
            </div>
            </div>
            <div class="tabla">
            <form action="/logout" method="POST" class="boton-LogOut">
                @csrf
                @method('DELETE')
                <input type="submit" value="Cerrar Sesion">
                
                </form>
        
            <div class="resultados-laboratorio" id="tabla-contenido">
                <h2 class="titulo">Resultados de Pruebas de Laboratorio</h2>   

                <form method="GET" class="buscador-form">
                    <div class="buscador">
                 
                        <input type="text" name="search" id="buscador" placeholder="  Buscar por número de orden" value="{{ request('search') }}">
                        
                        <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                 
                        <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">

                    </div>

                    <div class="botones-buscador">
                        <button type="submit" class="btn-buscar">Buscar</button>
                        <a href="{{ route('complementos.index') }}" class="btn-resetear">Resetear</a>

                    </form>


                        <div class="ordenamiento">
                            <form method="GET">
                            <input type="hidden" name="search" value="{{ request('search') }}">
                            <input type="hidden" name="start_date" value="{{ request('start_date') }}">
                            <input type="hidden" name="end_date" value="{{ request('end_date') }}">
                            <button type="submit" name="order" value="{{ request('order') === 'asc' ? 'desc' : 'asc' }}" class="btn-ordenar">
                                Ordenar por Fecha {{ request('order') === 'asc' ? 'Descendente' : 'Ascendente' }}
                            </button>
                        </form>
                        </div>
                    </div>
               
                
                
        
            
                <table class="tabla-resultados">
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
                                        <a href="{{ route('complementos.showResult', $resultado->id) }}" class="btn-ver-detalles">Ver Detalles</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                {{-- paginacion --}}
                {{$resultados->links()}}
            </div>
        </div>
    </div>
</div>
</body>
</html>
       