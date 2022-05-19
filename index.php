<?php get_header(); ?>

	<section>

	<?php $articulos=new WP_Query([
		             'showpost'=>3,
		             'post_type' => 'empleos'

	                 ]);
	while ($articulos->have_posts()) {
		$articulos->the_post(); ?>


		
		<div class="row caja">
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

<?php get_footer(); ?>

</body>
</html>