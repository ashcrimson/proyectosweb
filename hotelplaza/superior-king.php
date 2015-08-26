<!DOCTYPE html>
	<html lang="es">
		<?php include('header.php');?>
		<!-- Trigger the modal with a button -->
  		<div class="row">
		
			<div class="col-sm-12 col-md-8" >
						<h1 >Información de la habitación</h1>
            
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/king-superior-1.jpg.711x355_default.jpg" alt="Chania" width="1240" height="481">
        
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h2>Junior Suite</h2>
<h3>Servicios</h3>
<hr>
<div class="row">
  <div class="col-sm-12 col-md-6" >
    <ul class="a">
      <li>Conexión a Internet</li>
      <li>Televisión por cable</li>
      <li>Discado directo internacional</li>
      <li>Servicio de mensajería</li>
      <li>Amenidades de baño</li>
      <li>Lavandería</li>
      <li>Cafetera</li>
      <li>Alarma incendio</li>
      <li>Acceso a business center</li>
    </ul>
  </div>
   <div class="col-sm-12 col-md-6" >
    <ul class="a">
      <li>Equipos de climatización automático e individual</li>
      <li>Caja de seguridad en la habitación</li>
      <li>Aislamiento de sonido</li>
      <li>Room Service</li>
      <li>Fitness & SPA</li>
      <li>Mini Bar</li>
      <li>Radio Reloj</li>
      <li>Secador de pelo</li>
      
    </ul>
  </div>

</div> <!--- fin del sub-row -->
<div class="col-sm-12 col-md-6" style="text-align:center;">
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Reserva Ahora</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1>Reserva</h1>
        </div>
        <div class="modal-body">
          <iframe width="560" height="315" src="http://leitmotif.cl/calendario/" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
    </div><!-- /.navbar-collapse -->
  </div>
					</div>
					

		<div class="col-sm-12 col-md-4" style="text-align:center;">
			<aside>
			<?php include('aside.php');?>
		</aside>	
		</div>
	
		</div>
		
		<?php include('footer.php');?>
	