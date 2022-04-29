<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SBS</title>

	<link rel="stylesheet" 
	 href="<?php bloginfo('template_url'); ?>/estilo.css">

</head>
<body>


	<body background="<?php bloginfo('template_url'); ?>/h1.jpg">

	<header>
		<center>
		<br>
		<br>

		

		<img src="<?php bloginfo('template_url'); ?>/logo1.png" width="150">
		<h1><?php bloginfo('description'); ?></h1>
		<br>
		<ul>
			<br>
			<li>Inicio</li>
			<li>Noticias</li>
			<li>Deportes</li>
			<li>En Vivo</li>
		</ul>
	    </center>
	</header>

	<section>
		<center>

	<?php $articulos=new WP_Query([
		             'showpost'=>1
	                 ]);
	while ($articulos->have_posts()) {
		$articulos->the_post(); ?>





		
		
			<?php the_post_thumbnail("medium"); ?>
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
			
			





	    <?php } ?>

		
	</center>
	</section>

	<footer>
		<center>
		<ul>
			<br>
			<br>
			<li>Facebook</li>
			<li>Whatsapp</li>
			<li>Pinterest</li>
			<li>Youtube</li>
		</ul>
	</center>
	</footer>
</body>
</html>