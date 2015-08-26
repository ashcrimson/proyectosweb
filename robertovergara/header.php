<head>
	<meta charset="utf-8" />
	<title>Currículum Roberto Vergara</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="estilo.css">

</head>

<body>
<div class="container-fluid" >
		<div class="row">
		<header>
			<strong>
			<p id="encabezado">ROBERTO VERGARA SAN MARTIN<br>
				Ingeniero Comercial, MBA PUCV
			</p>
			<p id="encabezado">robertovergarasanmartin@gmail.com<br>
				Celular: 68-360-391</p>
			</strong>
		</header>
		</div>
	<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">Roberto Vergara</a>
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="text-center">
			<li class="text-center"><a href="index.php">Inicio</a></li>
			<li><a href="experiencia.php">Experiencia</a></li>
			<li><a href="educacion.php">Educación</a></li>
			<li><a href="cursos.php">Cursos</a></li>
			<li><a href="aptitudes.php">Aptitudes</a></li>
			<li><a href="viajes.php">Viajes</a></li>
			<li><a href="#">Anexos</a></li>
			<li><a href="#">Recomendaciones</a></li>
			<li><?php
		if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$request = $_POST['request'];
		$to = "alteizen@gmail.com";
		$subject = "Formulario Contacto";
		$body = "Este mensaje llegó por formulario de contacto en tu sitio. \n Nombre: $name \n e-mail: $email:\n Teléfono: $phone \n  Mensaje: $request ";	
		mail($to, $subject, $body);
		echo "<span>Gracias, $name, pronto me pondré en contacto contigo.</span>";
		}
		?></li>
		</ul>
		</div>
		
	</nav>
</div>
<div class="clearfix"></div>
	<div class="container">
<div class="row">
<div class="col-sm-12" id="banner">
	<strong>
		<p>Ingeniero Comercial  MBA PUCV + Diplomado en GESTIÓN de la Universidad de Chile + Cursos de Marketing en la UAI <br/>

19 años de experiencia comprobable, en Empresas Inmobiliarias, Turísticas, Centros Comerciales y Retail, tanto en <br/>posiciones de jefatura y gerencia.
		</p>
		<ul>
			<li>Perfil con marcado énfasis para áreas comerciales y de ventas con foco tanto en resultados como en personas.</li>
			<li>Con experiencia en dirigir y capacitar equipos de venta, liderando dotación superior a 90 personas.</li>
			<li>Habilidades altamente desarrolladas en Negociación, Liderazgo ,Planificación y dirección  Estratégica.</li>
			<li>Además, entrenado para tolerar climas laborales exigentes y competitivos.</li>
			<li>Gran capacidad para transmitir ideas y desarrollar proyectos.</li>
		</ul>
</strong>
</div>
</div>