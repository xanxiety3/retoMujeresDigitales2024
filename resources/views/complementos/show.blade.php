<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        {{-- <pre>{{ print_r($persona->toArray(), true) }}</pre> --}}
        <div class="container">
            <h1>Hola señor(@)</h1>
            <p>Tipo De Documento: {{ $tipoId ? $tipoId->tipo : 'No disponible' }}</p>
            <p>Numero De Documento: {{ $persona->numeroid }}</p>
            <p>Nombre Completo: {{ $persona->apellido1 }} {{ $persona->apellido2 }} {{ $persona->nombre1 }} {{ $persona->nombre2 }}</p>
            <p>Fecha De Nacimiento: {{ $persona->fechanac }}</p>
            <p>Sexo Biologico: {{ $sexoBiologico ? $sexoBiologico->sexobiologico : 'No disponible' }}</p>
            <p>Direccion: {{ $persona->direccion }}</p>
            <p>Número De Celular: {{ $persona->tel_movil }}</p>
            <p>Email: {{ $persona->email }}</p>
        </div>
        
        
</body>    
</html>