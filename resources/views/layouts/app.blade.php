
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Electrinete</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> <!-- Necesario para maquetar con bootstrap  -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Jquery  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- CSS -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Electrinete
                </a>
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Lado izquierda de la barra de loguin -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/index">Inicio <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/precios">Precios</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Tipos de vehiculos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Bicicleta normal</a>
                              <a class="dropdown-item" href="#">Bicicleta electrica</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Patinete Electrico</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tours
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Tour privado en patinete electrico</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Tour privado en Bicicleta electrica</a>
                              <div class="dropdown-divider"></div>
                              
                            </div>
                          </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item mr-5">
                               
                               <button class="btn btn-outline-success my-2 my-sm-0"onclick="location.href='/login'">Iniciar sesion</button>
                        
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <button class="btn btn-outline-danger my-2 my-sm-0"  onclick="location.href='/register'">Registrarse</button>
                                    
                                   
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                           

                                <div class="" aria-labelledby="navbarDropdown">
                                  
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <input type="submit" class="btn btn-danger" value="Cerrar Sesion"> </button>
                                        </form>
                                    
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        

        <main class="py-4">
            @yield('login')
            @yield('home')
            @yield('usuario')
            @yield('crear')

        </main>

	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Pagina</h5>
					<ul class="list-unstyled quick-links">
               
            <li><a href="/index"><i class="fa fa-angle-double-right"></i>Inicio</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>Tipos de vehiculos</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>Localizacion</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>¿Quién somos?</h5>
					<ul class="list-unstyled quick-links">
						<li><a href=""><i class="fa fa-angle-double-right"></i>¿Donde nos situamos?</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>Patrocinadores</a></li>
            <li><a href=""><i class="fa fa-angle-double-right"></i>Cómo funciona el servicio</a></li>
          
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					
					<ul class="list-unstyled quick-links">
						
						<li><a href=""><i class="fa fa-angle-double-right"></i>Aviso legal </a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>Coookies</a></li>
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
    </div>
</body>
</html>