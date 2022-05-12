<?php get_header(); ?>

	<section class="container">

		
		<h1> <?php the_title(); ?> </h1>

		<h5><i></a><?php the_field('resumen'); ?>
		</i></h5>

		<?php the_post_thumbnail("large"); ?>

		<?php the_content(); ?>
		<h4>Fuente:
			<?php the_field('fuente'); ?>
				
		</h4>

	</section>

<?php get_footer(); ?>

</body>
</html>