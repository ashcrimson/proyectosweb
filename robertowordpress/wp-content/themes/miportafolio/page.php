<!DOCTYPE html>
<html lang="en">
<head>
	
<?php get_header(); ?>
	<div class="clearfix">
	<div class="container" >
		<?php if( have_posts() ):

		while ( have_posts() ): the_post(); ?>
			

			<p><?php the_content();?></p>

			<hr>

		<?php endwhile;

	endif;

	?>
	</div>
	
	<br>
	<?php get_footer(); ?>