<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje de pago</title>
</head>
<body>
    <h1>Hola le contactamos para dejarle el presupuesto</h1>
    <p>Usuario  {{$usuario['nombre'] }}</p>
    <p>Apellidos {{$usuario['apellidos']}}</p>
    <p>Id usuario: {{$usuario['id']}}</p>

    <h3>Datos del vehiculo alquilado</h3>
    <p>Id del vehiculo: {{$vehiculo['id']}}</p>
    <p>Tipo del vehiculo: {{$vehiculo['tipo']}}</p>
    <p>Descripcion del vehiculo alquilado: {{$vehiculo['descripcion']}}</p>
    <ul>
        <li><p>Id del vehiculo: {{$vehiculo['id']}}</p></li>
        <li><p>Tipo del vehiculo: {{$vehiculo['tipo']}}</p></li>
        <li><p>Descripcion del vehiculo alquilado: {{$vehiculo['descripcion']}}</p></li>
    </ul>
</body>
</html>