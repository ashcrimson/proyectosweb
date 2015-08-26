<head>
	<meta charset="utf-8" />
	<title>Hotel Plaza</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<link rel="stylesheet" href="estilo.css">
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-8">
			<img src="img/logo.png" class="img-responsive" style="margin-top:20px;">
		</div>
		<div class="col-sm-12 col-md-4">
			<br>
			<p>
			Av. Libertador Bernardo O´Higgins 816<br>
			Santiago, Chile<br>
			reservas@plazasanfrancisco.cl<br>
			<span><b>+56226393832 | +18553712979</b></span><br>
			</p>
		</div>
	</div>

		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<a class="navbar-brand" href="index.php">
        <img alt="Brand" src="img/home.jpg">
      </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="habitaciones.php">Habitaciones<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Eventos</a></li>
       	<li><a href="#">Restaurant & Bar</a></li>
       	<li><a href="#">Fitness Club</a></li>
       	<li><a href="#">Sustentabilidad</a></li>
       	<li><a href="#">Fotos</a></li>
       	<li><a href="#">Promociones</a></li>
       	<li><a href="#">Reserva</a></li>
       	<li><a href="#">Ubicación</a></li>
      </ul>
     <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Reserva</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
     		<h1>Haga su Reservación</h1>
        </div>
        <div class="modal-body">
          <iframe width="560" height="315" src="http://leitmotif.cl/calendario/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    </div><!-- Modal -->
  </div><!-- /.container-fluid -->
</nav>
