<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <link rel="stylesheet" href="../css/perfil-usuario.css">
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
                    <a href="#"><h5>Perfil de usuario</h5></a>
                </div>
            </div>
        </div>
        <!-- Contenido principal -->
        <div class="contenido">
            <h4>Aquí encontrarás tu información personal</h4>

                <img class="imagen-de-bienvenida-morada" src="../img/imagen de bienvenida.png" alt="Banner de bienvendida">
                <div class="saludo">
                    <h1 id="nombre-usuario-imagen">Hola {{$persona->nombre1}},</h1>
                </div>
            <div class="slider-frame">
                <ul>
                    <li><img src="../img/slide1.png" alt="slide1"></li>
                    <li><img src="../img/slide2.png" alt="slide2"></li>
                    <li><img src="../img/slide3.png" alt="slide3"></li>
                </ul>
            </div>

            <div class="informacion-de-paciente">
                <img class="fondo-perfil-azul" src="../img/fondo-de perfil.png" alt="Imagen fondo de perfil azul">
                <img class="icono-logo-perfil" src="../img/icono-perfil.png" alt="Icono con el logo">

                <div class="containerr">
                    {{-- <pre>{{ print_r($persona->toArray(), true) }}</pre> --}}
                    <div class="containerr">
                        <div class="nombre-completo">
                        <h1 > {{ $persona->nombre1 }} {{ $persona->nombre2 }} {{ $persona->apellido1 }} {{ $persona->apellido2 }} </h1>
                        </div>
                        <div class="informacion">
                            <div class="info">
                                <h3>Tipo De Documento:</h3> <p>{{ $tipoId ? $tipoId->tipo : 'No disponible' }}</p>
                            </div>
                            <div class="info"> <h3>Numero De Documento:</h3><p> {{ $persona->numeroid }}</p></div>
        
                            <div class="info"><h3>Fecha De Nacimiento:</h3><p> {{ $persona->fechanac }}</p></div>
                            <div class="info"><h3>Sexo Biologico:</h3><p> {{ $sexoBiologico ? $sexoBiologico->sexobiologico : 'No disponible' }}</p></div>
                            <div class="info"> <h3>Direccion:</h3><p> {{ $persona->direccion }}</p></div>
                            <div class="info"><h3>Número De Celular:</h3><p> {{ $persona->tel_movil }}</p></div>
                            <div class="info"><h3>Email:</h3><p> {{ $persona->email }}</p></div>
                        </div>
                    </div>
            </div>
        </div>

</body>
</html>