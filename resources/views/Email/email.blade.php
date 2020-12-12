<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje de pago</title>
</head>
<body background="{{asset('img/iconos/icono.ico')}}">
    <div class="content">
    <h1>Buenas le contactamos para dejarle la factura</h1>
  
  <td><img src="{{ $message->embed('img/iconos/icono.ico') }}" style="padding:0px; margin:0px" /></td>
    <table cellspacing="10" cellpadding="5"  width="80%"   class="table table-dark text-center">
        <tr>
            <td class="text-center"><h1>Factura:</h1> </td>
        </tr>
        
        <tr>
            <td class="text-center">Id usuario: {{$usuario['id']}}</td>
        </tr>
        <tr>
            <td><p>Usuario  {{$usuario['nombre'] }}</p></td><td><p>Apellidos {{$usuario['apellidos']}}</p></td>
        </tr>
        <tr><td colspan='2'class="text-center"><h3>Datos del vehiculo alquilado</h3></td></tr>
        <tr><td>Id del vehiculo  </td><td>  {{$vehiculo['id']}}</td></tr>
        <tr><td>Tipo de vehiculo  </td><td>  {{$vehiculo['tipo']}}</td></tr>
        <tr><td>Descripcion del vehiculo</td><td>{{$vehiculo['descripcion']}}</td></tr>
        <tr><td>Fecha inicio {{ $alquiler['fecha'] }}</td><td>Fecha fin {{$now}}</td></tr>
        <tr><td colspan='2' class="text-center"> TOTAL: {{$precio}} €</td></tr>
        <tr><td colspan='2' class="text-center"> La transferencia la tendras que hacer a cuenta ES2100 9234 9874 4262 9341</td></tr>


    </table>
    
    
</div>
</body>
</html>