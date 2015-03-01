<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Talleres Integra</title>
	{{ HTML::style('css/main.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/animate.css') }}
	{{ HTML::style('css/grid.css') }}
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:100,300,400,700">
	<link rel="icon" type="image/png" href="{{ asset('img/icon.png') }}">
</head>
<body id="body">
	@if(Auth::check())
	@else
	<div class="login animated fadeInDown">
		<h1>Iniciar Sesión</h1>
		<form action="#" id="UserLogin" method="POST" autocomplete="off">
			<input type="text" name="nick" placeholder="Nombre de Usuario" autofocus>
			<input type="password" name="password" placeholder="Contraseña">
			<button type="submit"><span id="LoginName">Iniciar Sesión</span><span class="hide" id="LoaderLogin"> <i class="fa fa-spinner glyphicon-refresh-animate"></i></span></button>
			<div class="error_login hide">Este usuario no tiene permisos o los datos introducidos son incorrectos</div>
		</form>
	</div>
	<div class="black-screen"></div>
	@endif
	@if(Auth::check())
	<header>
	@else
	<header class="hide">
	@endif
		<nav id="UserLoginTrue" class="animated fadeInDown delay-5">
			<ul>
				<li class="animated fadeIn delay">Talleres Integra</li>
				@if(Auth::check())
				<li class="display-right" class="animated fadeIn delay-6"><a href="{{ URL::to('ajax/logout') }}">&times;</a></li>
				<li class="display-right" class="animated fadeIn delay-6">|</li>
				<li class="display-right" class="animated fadeIn delay-6">{{ Auth::user()->name }} {{ Auth::user()->lastname_1 }}</li>
				@else
				<li class="display-right" class="animated fadeIn delay-6">No ha iniciado sesión</li>
				@endif
			</ul>
		</nav>
	</header>
	@if(Auth::check())
	<section id="MainContainerInfo">
	@else
	<section class="hide" id="MainContainer">
	@endif
		<nav>
			<a href="#proyectos" id="proyects">
				<span class="icon-1 proyectos animated fadeIn delay"></span>
			</a>
			<a href="#estimaciones" id="estimates">
				<span class="icon-2 estimaciones animated fadeIn delay-2"></span>
			</a>
			<a href="#cotizaciones" id="quotes">
				<span class="icon-3 cotizaciones animated fadeIn delay-3"></span>
			</a>
			<a href="#ordenes-de-compra" id="purchase">
				<span class="icon-4 ordenes-de-compra animated fadeIn delay-4"></span>
			</a>
			<a href="#ordenes-de-trabajo" id="work">
				<span class="icon-5 ordenes-de-trabajo animated fadeIn delay-5"></span>
			</a>
			<a href="#facturacion" id="billing">
				<span class="icon-6 facturacion animated fadeIn delay-6"></span>
			</a>
			<a href="#almacen" id="stock">
				<span class="icon-7 almacen animated fadeIn delay"></span>
			</a>
			<a href="#solicitudes-de-herramienta" id="tool">
				<span class="icon-8 solicitudes animated fadeIn delay-2"></span>
			</a>
			<a href="#produccion" id="production">
				<span class="icon-9 produccion animated fadeIn delay-3"></span>
			</a>
			<a href="#clientes" id="customers">
				<span class="icon-10 clientes animated fadeIn delay-4"></span>
			</a>
			<a href="#proveedores" id="providers">
				<span class="icon-11 proveedores animated fadeIn delay-5"></span>
			</a>
			<a href="#juntas-de-trabajo" id="together">
				<span class="icon-12 juntas animated fadeIn delay-6"></span>
			</a>
			<a href="#catalogo" class="catalog">
				<span class="icon-13 catalogo animated fadeIn delay"></span>
			</a>
			<a href="#administracion" id="administration">
				<span class="icon-14 administracion animated fadeIn delay-2"></span>
			</a>
		</nav>
	</section>
<!-- Modales -->
	<!-- Usuarios -->
	@include('modals.usuarios.users')
	@include('modals.usuarios.detail')
	<!-- JavaScript -->
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/main.js') }}
	{{ HTML::script('js/jquery.modal.min.js') }}
	{{ HTML::script('js/jquery.easytabs.min.js') }}
	{{ HTML::script('js/jquery.bpopup.min.js') }}
	{{ HTML::script('js/jquery.easyModal.js') }}
	{{ HTML::script('js/simpletip.js') }}
</body>
</html>