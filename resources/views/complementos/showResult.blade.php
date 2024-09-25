<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados de la Orden</title>
</head>
<body>

 
    <div class="container mt-5">
        <h2 class="text-center">Resultados de la Orden: {{ $orden->orden }}</h2>
    

        @foreach ($resultadosAgrupados as $procedimientoId => $resultados)
            <div class="grupo">
                <h3>Procedimiento: {{ $resultados->first()->procedimiento->metodo }}</h3>
                <ul>
                    @foreach ($resultados as $resultado)
                        <li>
                            <strong>Prueba:</strong> {{ $resultado->prueba->nombre_prueba }} <br>
                            <strong>Resultado:</strong> 
                            @if ($resultado->res_numerico)
                                {{ $resultado->res_numerico }}
                            @elseif ($resultado->res_opcion)
                                {{ $resultado->res_opcion }}
                            @else
                                {{ $resultado->res_texto ?? 'Sin resultado' }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>


    {{-- <div class="container">
        <h1>Hola señor(@)</h1>
        <p>Resultados de la orden: {{ $orden ? $orden->orden : 'No hay resultados' }}</p>
        <p>Grupo: {{ $procedimiento ? $procedimiento->metodo : 'No hay resultados' }}</p>
        <p>Prueba: {{ $prueba ? $prueba->nombre_prueba }}</p>
        <p>Resultados: {{ $resultado ? $resultado->res_opcion: 'No presenta'}}
            <p>Resultados: {{ $resultado ? $resultado->res_numerico: 'No presenta'}}

                <p>Resultados: {{ $resultado ? $resultado->res_texto: 'No presenta'}}
                    <p>Resultados: {{ $resultado ? $resultado->res_nemo: 'No presenta'}}


        </p>
        <p>Sexo Biologico: {{ $sexoBiologico ? $sexoBiologico->sexobiologico : 'No disponible' }}</p>
        <p>Direccion: {{ $persona->direccion }}</p>
        <p>Número De Celular: {{ $persona->tel_movil }}</p>
        <p>Email: {{ $persona->email }}</p>
    </div> --}}
    {{-- <div class="container mt-5">
        <h2 class="text-center">Resultados de la Orden: {{ $orden->orden }}</h2>

        @foreach ($resultadosAgrupados as $grupoId => $resultados)
            <div class="grupo">
                <h3>Grupo: {{ $resultados->first()->procedimiento->grupo->nombre }}</h3>
                <ul>
                    @foreach ($resultados as $resultado)
                        <li>
                            <strong>Prueba:</strong> {{ $resultado->id_prueba->nombre_prueba }} <br>
                            <strong>Resultado:</strong> 
                            @if ($resultado->res_numerico)
                                {{ $resultado->res_numerico }}
                            @elseif ($resultado->res_opcion)
                                {{ $resultado->res_opcion }}
                            @else
                                {{ $resultado->res_texto ?? 'Sin resultado' }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div> --}}
</body>
</html>
