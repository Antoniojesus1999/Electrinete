@extends('principal')
@section('manual')
    <div class="container content-center">
        <div class="col-12">
            <h1>Manual de usuario</h1>
            <ol>
                <li><a href="#registrarte">Como registrarte</a></li>
                <li><a href="#iniciar">Iniciar sesion</a></li>
                <li><a href="#mirar">Mirar vehiculos</a></li>
                <li><a href="#alquilar">Como alquilar</a></li>
                <li><a href="#devolver">Como devolver</a></li>
                
                <br>
       
            </ol>
            <br>
            <a name="registrarte">
            <h2>Como registrarte</h2>
            <p>Para registrarnos solamente tenemos que localizar el botón registrarse que se
                 encuentra en la página principal arriba a la derecha como se muestra en la siguiente imagen.</p>
                <img class="my-5" src="img/Manual/registro.png" width="100%" alt="registrarse">
               <br>
                <br>
            <p>Una vez que le demos a registrarnos nos mostrar la siguiente pantalla donde lo tendremos 
                que rellenar con lo que nos pida en este caso nuestros datos nombre apellido email método de 
                pago etc.</p>
              
                <img class="my-5"  src="img/Manual/registro2.png" width="100%" alt="registro2">
   
                
                <p class="my-5">
                    Una vez que lo tienes todo relleno pulsaremos el botón registro, después de esta acción ya tendremos una cuenta con tu perfil y podrás acceder a la web para ver los vehículos que puedes alquilar etc
                </p>
                <a name="iniciar">
                <h2> Iniciar sesion</h2>
                <p>Para iniciar sesión solamente tenemos que visualizar el botón iniciar sesión que esta en la pagina principal arriba a la derecha seria este:</p>
                <img class="my-5" width="100%" src="img/Manual/iniciarsesion.png" alt="iniciarsesion">
                <p>Cuando le damos al botón nos pide que nos autentiquemos con nuestro correo electrónico y contraseña de la siguiente manera</p>
                <img width="100%" class="my-5" src="img/Manual/iniciosesion2.png" alt="">
                <p>Cuando le demos a acceder ya podremos ver la web de la siguiente manera.</p>
                <img width="100%"  src="/img/Manual/dentro.png" alt="adentro">
                <a name="mirar">
                <h2 class="my-5"> Mirar vehiculos</h2>
                <p>Nuestros desarrolladores han conseguido que mirar los vehículos que se pueden alquilar sea los mas fácil simplemente al iniciar sesión se mostrara en la primera pantalla de esta forma.</p>
                    <img width="100%" src="img/Manual/dentro.png" alt="">
                    <p>Ahi en la primera ventana tenemos todos los vehículos que podemos alquilar y mas abajo tenemos los que tenemos pero estan alquilados en otro momento estaran disponible para usted</p>
                    <a name="alquilar">
                    <h2 class="my-5"> Como alquilar</h2>
                    <p>Para alquilar un vehículo en la primera pantalla vista justamente arriba mostramos todos los vehículos que tenemos que se pueden alquilar, después de elegir el que mas te guste le tendrás que dar al botón que muestro a continuación.</p>
                    <img width="100%" class="my-5"src="img/Manual/alquilar.png" alt="">
                    <p>Tras darle a ese botón  se mostrará la siguiente pantalla</p>
                    <img width="100%" class="my-5"src="img/Manual/alquilar2.png" alt="">
                    <p>En esta página podremos ver la descripción del vehículo y si realmente nos convence si lo hiciera solo hay quedarle al boton alquilar y se mostrara la confiramción de la siguiente forma:</p>
                    <img width="100%" class="my-5"src="img/Manual/alquilar3.png" alt="">
                    <p>Para salirnos solamente le tenemos que clicar a volver el vehiculo estara alquilado desde ese momento </p>


                    <a name="devolver">
                    <h2 class="my-5"> ¿Como devolver el vehiculo?</h2>
                    <p>Para devolver el vehículo una vez que hemos terminado estan simple como volver a meternos en la web y en la primera página al iniciar sesión nos aparece alquileres los vehiculos alquilado de esta forma </p>
                    <img width="100%"  class="my-5"src="img/Manual/devolver.png" alt="">
                    <p>Una vez que sepamos cual queremos devolver de todos le pulsamos el botón devovler que nos llevara a la siguiente página.  </p>
                    <img width="100%"  class="my-5"src="img/Manual/devolver2.png" alt="">
                    <p>Automaticamente se le abra enviador al correo una factura con el precio y al numero de cuenta que quiere hacer la transferencia</p>
     
     
     
                </div>
    </div>
@endsection