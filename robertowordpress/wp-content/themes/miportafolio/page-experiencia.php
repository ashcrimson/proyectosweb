
	<?php get_header(); ?>
	
	
<br>
<div class="clearfix"></div>

	<div class="row" >
    <?php query_posts( 'category_name=experiencia' ); ?>
    <?php if( have_posts() ):
 
    while ( have_posts() ): the_post(); ?>
		<div class="col-sm-3" id="experiencia" >
		
  <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?>
       <p style="font-size: 14px; font-weight:bold;"><?php the_title();?></p>
  </div>

<p><?php the_content();?></p>
	
	</div>
  <?php endwhile;

  endif;

  ?>
</div>

<div class="row">
	
<div class="col-sm-8" style="padding-top: 50px;" >
 <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
         <img src="<?php echo get_template_directory_uri(); ?>/imagenes/arkon.png">
        <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.6);">
        	<strong>
          
          <p>Gerente Comercial Red de Apart Hoteles & Hostales de Inmobiliaria Arkon</p>
          </strong>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/don_ripley.jpg">
        <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.6);">
        	<strong>
          
          <p>Subgerente de Operaciones Ripley</p>
          </strong>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo get_template_directory_uri(); ?>/imagenes/don_mall.png" alt="Flower" >
        <div class="carousel-caption" style="background-color: rgba(0, 0, 0, 0.6);">
        	<strong>
          
          <p>Center Manager Mall Plaza Reñaca de Inmobiliaria Arkon</p>
      		</strong>
        </div>
      </div>

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