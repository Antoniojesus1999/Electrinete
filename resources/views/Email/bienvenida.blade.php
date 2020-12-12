<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje de bienvenida</title>
</head>
<body>
    <div class="content">
    <h1>Bienvenido le mandamos este mensaje de confirmación para saber con que datos se ha registrado</h1>
    <td><img src="{{ $message->embed('img/iconos/icono.ico') }}" style="padding:0px; margin:0px" /></td>

    <table cellspacing="10" cellpadding="10" border="0" width="80%"  background="{{asset('img/iconos/icono.ico')}}"  class="table table-dark text-center">
        <tr>
            <td class="text-center"><h1>Nombre</h1> </td><td> {{$user['nombre']}}</td>
        </tr>
        
        <tr>
            <td class="text-center">Apellidos</td><td>{{$user['apellidos']}}</td>
        </tr>
        <tr>
            <td>Email</td><td><p>{{$user['email']}}</p></td>
        </tr>
        <tr><td class="text-center">Metodo de pago</td><td>{{$user['metodo']}}</td></tr>
       
    </table>
    
    
</div>
</body>
</html>