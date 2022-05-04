<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SBS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" 
	 href="<?php bloginfo('template_url'); ?>/estilo.css">

</head>
<body>


	<body background="<?php bloginfo('template_url'); ?>/h1.jpg">

	<header>
		<center>

		<div class="logo">
			<img src="<?php bloginfo('template_url'); ?>/logo1.png" width="150">
			<h2 class="nombre-empresa">SBS News</h2>
		</div>
		<nav>
			<a href="" class"nav-link">Inicio</a>
			<a href="" class"nav-link">Noticias</a>
			<a href="" class"nav-link">Deportes</a>
			<a href="" class"nav-link">En Vivo</a>
		</nav>
	

		<h1><?php bloginfo('description'); ?></h1>
		<br>
		</center>
		
	</header>

	<section>

	<?php $articulos=new WP_Query([
		             'showpost'=>1
	                 ]);
	while ($articulos->have_posts()) {
		$articulos->the_post(); ?>





		
		<div class="row">
			<div class="col-sm-3">
			<?php the_post_thumbnail("thumbnail"); ?>
		    </div>
		    <div class="col-sm-9">
			<h3><a href="<?php the_permalink(); ?>"> 
			<?php the_title(); ?></a></h3>
			<p>Publicado por <?php the_author(); ?> el <?php the_time("d/m/Y"); ?></p>
			<?php the_excerpt(); ?>
		    </div>
		</div>	

	    <?php } ?>

		
	
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