<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($resultados as $resultado)
        <li>
            <a href="/resultados/{{$resultado->id}}"></a>
            <p>{{ $resultado->fecha}}</p>
            <p>{{ $resultado->id_documento }}</p>
            <p>{{ $resultado->orden }}</p>
        </li>
        @endforeach
    </ul>




    <form action="/logout" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cerrar sesion">
    </form>
</body>
</html>