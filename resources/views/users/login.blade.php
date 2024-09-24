
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../css/LogIn.css">

</head>
<body>
    <div class="fondo-formulario-blanco">
        <img class="logo" src="../img/logo.png" alt="Logo">
        <h1>¡BIENVENIDO DE NUEVO!</h1>
        <h6>Tu bienestar es importante. Accede a tus resultados iniciando sesión</h6>
    {{-- formulario de el login  --}}

        <form action="/login" method="POST">
            @csrf
            <label for="tipo_documento">
                Tipo de documento*
            </label>
            <select name="id_tipoid" id="id_tipoid" required>
                <option>    Seleccione su tipo de documento</option>
                @foreach($tiposDocumentos as $tipoDocumento)
                    <option value="{{ $tipoDocumento->id }}">{{ $tipoDocumento->tipo }}</option>
                @endforeach
            </select>
            <label for="num_identificacion">*Número de identificación</label>
            <input type="num" id="numeroid" name="numeroid">
            <label for="fecha_nacimiento">*Fecha de nacimiento</label>
            <input type="date" id="fechanac" name="fechanac">
            <button>Iniciar sesión</button>
        </form>
        @if($errors->any())
 
            <strong style="color: red">Tus datos no son correctos</strong>
           
   
        @endif
    
    </div>
</body>
</html>