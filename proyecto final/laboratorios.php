<?php
session_set_cookie_params(60*60*24*15); // 15 dias
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratorios UIA</title>
	<!--icono-->
	<link rel="shortcut icon" href="img/m.png">
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
	<!--fontawesome-->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-5.10.2/css/all.css">
	<!--css-->
	<link rel="stylesheet" type="text/css" href="css/laboratorios.css">
	<!--select2-->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
	<!--JQuery-->
	<script src="js/jquery/jquery-3.4.1.min.js"></script>
	<!--select2-->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
	<!--Javascript-->
	<script type="text/javascript" src="js/laboratorios.js"></script>
</head>
<body>
	<!--boton menu-->
	<div class="menu">	
  		<h3>
  			<i class="fas fa-bars text-danger" id="ham"></i>
  			<i class="fas fa-caret-square-down text-danger" id="down"></i>
  		</h3>
  	</div>
	<!--Navbar de elementos-->	
	<nav class="nav nav-pills flex-column flex-sm-row" id="navelem">

	  		<!--logo-->
	  		<div class="flex-sm-fill text-center nav-link ">
		  		<span id="logo">
		  			<img src="img/letraIbero.png" id="letraIbero">
		  		</span>
			</div>
			<!--carrera-->
			<div class="flex-sm-fill text-center carrera">
				<span class="nav-link">
					<i class="fas fa-satellite-dish"></i> :
					<?php
					echo $_SESSION['carrera'];
					?>
				</span>
			</div>
			<!--alumno y foto-->
			<div class="flex-sm-fill text-center" >
				<span class="nav-link">
					<?php
					echo strtoupper(utf8_decode($_SESSION['ap_paterno']." ".$_SESSION['ap_materno']." ".$_SESSION['nombres']));?> :
					<img src="<?php echo $_SESSION['foto']; ?>.png" class="foto">
				</span>
			</div>

	</nav>
	<hr>	
	<div class="container">
		<div class="row">
			<div class="col-9">
				<h4 id="titulo">
					<i class="fas fa-flask text-primary"></i>
					<b>Laboratiorios de Ingenierías
						<span class="text-danger">Ibero.</span>
					</b>
				</h4>
				<h5>
					<p id="subtitulo" class="text-secondary">Reserva y préstamo de material.</p>
				</h5>
			</div>
			<div class="col-3">
				<div id="atras_materiales">
					Atr&aacute;s
					<i class="fas fa-long-arrow-alt-left text-white"></i>
				</div>
				<div id="solicitud">
					Solicitar
					<i class="fas fa-clipboard-list text-white"></i>
				</div>
				<div id="guardar">
					Guardar
					<i class="fas fa-save text-white"></i>
				</div>
				<div id="agregar">
					Agregar
					<i class="fas fa-plus-square text-white"></i>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<!-- Menu hamburguesa -->
	<div id="secmenu">
		<ul class="herramienta">
			<li class="item" data-num="0">
				Inicio <br>
				<i class="sombra fas fa-home text-danger"></i>
			</li>
			<li class="item" data-num="1">
				Materiales <br>
				<i class="sombra fas fa-tasks text-danger"></i>
			</li>
			<li class="item" data-num="2">
				Casillero <br>
				<i class="sombra fas fa-door-closed text-danger"></i>
			</li>
			<li class="item" data-num="3">
				Solicita <br>
				<i class="sombra fas fa-desktop text-danger"></i>
			</li>
			<li class="item" data-num="4">
				Renueva <br>
				<i class="sombra fas fa-retweet text-danger"></i>
			</li>
			<li class="item" data-num="5">
				Salir <br>
				<i class="sombra fas fa-external-link-square-alt text-danger"></i>
			</li>
		</ul>
	</div>
	<!-- Contenido de laboratorios -->
	<div id="inicio"> <!--AQUI CARGA EL CONTENIDO-->
		<br>
		<div class="container-fluid">
			<div class="row" align="center">
				<div class="col-12 col-sm-6 col-lg-3 cont">
					<div class="apartado" data-num="1">
						<h5 id="materiales" class="text-secondary">
							Solicita tus materiales
						</h5>
						<h3>
							<br><br>
							<i class="sombra fas fa-tasks text-danger"></i>
						</h3>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 cont">
					<div class="apartado" data-num="2">
						<h5 id="casillero" class="text-secondary">
							Reserva un casillero
						</h5>
						<h3>
							<br><br>
							<i class="sombra fas fa-door-closed text-danger"></i>
						</h3>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 cont">
					<div class="apartado" data-num="3">
						<h5 id="solicita" class="text-secondary">
							Solicita equipo de Electrónica
						</h5>
						<h3>
							<br><br>
							<i class="sombra fas fa-desktop text-danger"></i>
						</h3>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 cont">
					<div class="apartado" data-num="4">
						<h5 id="renueva" class="text-secondary">
							Renueva equipo de Electrónica
						</h5>
						<h3>
							<br><br>
							<i class="sombra fas fa-retweet text-danger"></i>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<br><br>
	<!--Footer Ibero-->
	<footer class="text-center text-lg-end" id="pPag">
	  <div class="text-center p-3">
	    © 2020-2021 Universidad Iberoamericana Ciudad de México:
	    <br>
	    <a href="#">Privacidad.</a>
	    <a href="#">Términos.</a>
	    <a href="#">Soporte.</a>
	  </div>
	</footer>
</body>
</html>
