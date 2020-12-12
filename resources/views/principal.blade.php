<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="{{ asset('css/css.css') }}">
     <link rel="shortcut icon" type="image/x-icon"  href="{{asset('img/iconos/icono.ico')}}"/>

    <title>Electrinete - Pagina principal</title>
</head>

<body >

   <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">Electrinete</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/precios">Precios</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tipos de vehiculos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/bici">Bicicleta normal</a>
              <a class="dropdown-item" href="/bicielectrica">Bicicleta electrica</a>
            
              <a class="dropdown-item" href="/patinete">Patinete Electrico</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tours
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://www.civitatis.com/es/sevilla/tour-patinete-electrico-sevilla/">Tour privado en patinete electrico</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://www.getyourguide.es/activity/sevilla-l48/introduccin-a-sevilla-tour-en-bicicleta-elctrica-t29009?utm_force=0">Tour privado en Bicicleta electrica</a>
              <div class="dropdown-divider"></div>
              
            </div>
          </li>
          
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item mr-5">
            <button class="btn btn-outline-danger my-2 my-sm-0"  onclick="location.href='/register'">Registrarse</button>
          </li>
          <li class="nav-item">
            <button class="btn btn-outline-success my-2 my-sm-0"onclick="location.href='/login'">Iniciar sesion</button>
          </li>
        </ul>
        
      </div>
    </nav>
     
   </div>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


@yield('index')

@yield('precios')
@yield('registro')
@yield('notaLegal')
@yield('politica')
@yield('manual')
@yield('bici')
@yield('bicielectrica')
@yield('patinete')


{{-- @yield('prueba') --}}



	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Pagina</h5>
					<ul class="list-unstyled quick-links">
              
            <li><a href="/"><i class="fa fa-angle-double-right"></i>Inicio</a></li>
						<li><a href="https://patineteelectrico.shop/blog/clasificacion-tipos-patinetes-electricos/"><i class="fa fa-angle-double-right"></i>Tipos de vehiculos</a></li>
						<li><a href="https://www.mundopatineteelectrico.com/faq-preguntas-frecuentes-sobre-patinetes-electricos/"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.google.es/maps/place/Sevilla/@37.3754865,-6.0250985,12z/data=!3m1!4b1!4m5!3m4!1s0xd126c1114be6291:0x34f018621cfe5648!8m2!3d37.3890924!4d-5.9844589"><i class="fa fa-angle-double-right"></i>Localizacion</a></li>
						
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>¿Quién somos?</h5>
					<ul class="list-unstyled quick-links">
						
						<li><a href="https://www.tesla.com/es_es"><i class="fa fa-angle-double-right"></i>Patrocinador</a></li>
            <li><a href="/manual"><i class="fa fa-angle-double-right"></i>Manual de usuario</a></li>
          
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					
					<ul class="list-unstyled quick-links">
						
						<li><a href="/notaLegal"><i class="fa fa-angle-double-right"></i>Aviso legal </a></li>
						<li><a href="/politica"><i class="fa fa-angle-double-right"></i>Coookies</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>Borrar tus datos</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.google.es/"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="https://www.gmail.com/mail/help/intl/es/about.html?iframe" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
        </div>
        
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/"></a></u> </p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Electrinete</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	            
</body>
</html>