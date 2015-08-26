

      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/don_playa.png" alt="Flower" >
        <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.6);">
        	<strong>
          <h3>Diciembre 1996 – Marzo 2002</h3>
          <p>Jefe de Promoción y Ventas Laguna Marina Club + Club Alto Mantagua de Inmobiliaria Napoleón</p>
          </strong>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
    <div class="col-sm-4" style="padding-bottom:10px; text-align:center;">
      <?php
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
    ?>
	
		<h1>FORMULARIO DE CONTACTO</h1>
		<form action="index.php" method="post">
			Nombre: <br><input type="text" name="name"><br />
			e-mail: <br><input type="text" name="email"><br />
			Teléfono: <br><input type="text" name="phone"><br />
			Mensaje:<br> <textarea name="request"></textarea><br />
			<input type="submit" name="submit">
		</form>
	
	</div>
  
	</div>
	
	<?php get_footer(); ?>