<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados de la Orden</title>
    <link rel="shortcut icon" href="../img/logo-solo.png" />
    <link rel="stylesheet" href="../css/resultados.css">
</head>
<body>
    <div class="container">
        <!-- Menú lateral azul -->
        <img class="barra-lateral" src="../img/barra-lateral.png" alt="Barra de menu">
        <img class="logo-blanco" src="../img/logo-blanco.png" alt="Logo">
        <div class="menu">
            <div class="opciones">
                <div class="opcion1">
                    <a href="/resultados"><img class="iconos" src="../img/icono-home.png" alt="Icono-home"></a>
                    <a href="/resultados"><h5>Home</h5></a>
                </div>
                <div class="opcion2">
                    <a href="/persona/{{$persona->id}}"><img class="iconos" src="../img/icono-perfil-usuario.png" alt="Icono de perfil de usuario"></a>
                    <a href="/persona/{{$persona->id}}"><h5>Perfil de usuario</h5></a>
                </div>
            </div>
        </div>

        <div class="contenido">
            <img class="imagen-con-texto-resultados" src="../img/imagen-con-texto-resultados.png" alt="Imagen con texto">
            <p>Recuerda, los resultados no definen quién eres. Eres valioso tal como eres</p>


            <div class="container mt-5">    
                @if ($resultadosAgrupados->isEmpty())
                <div class="alert alert-info text-center">
                    Aún no hay resultados para esta orden.
                </div>
            @else
                <h2 class="text-center">Estos fueron los resultados de la orden: {{ $orden->orden }}</h2>
                <div class="resultado">
                    @foreach ($resultadosAgrupados as $procedimientoId => $resultados)
                        <div class="grupo">
                            <h3 id="procedimiento">{{ $resultados->first()->procedimiento->metodo }}</h3>
                            <h5>Pruebas</h5>
                            @foreach ($resultados as $resultado)
                                <div class="prueba-cuadro">
                                    <strong>Prueba:</strong> {{ $resultado->prueba->nombre_prueba }} <br>
                                    <strong>Resultado:</strong> 
                                    @if ($resultado->res_numerico)
                                        {{ $resultado->res_numerico }}
                                    @elseif ($resultado->res_opcion)
                                        {{ $resultado->res_opcion }}
                                    @else
                                        {{ $resultado->res_texto ?? 'Sin resultado' }}
                                    @endif  
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endif
            

                
                
                
                
            </div>
        </div>

    

</body>
</html>
