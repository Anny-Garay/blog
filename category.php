<?php get_header(); ?>
<style type="text/css">
	.box {
		border:  1px solid #742323;
		margin:  10px;
		background: #c72d2d;
		padding: 10px;
		text-align: center;
		color:  #fff;
	}
	.box h3 {
		font-size: 20px;
		margin-top: 5px;
	}
	.box h3 {
		text-align: center;
	}
	.box h3 a {
		color:  #fff;
		text-decoration: none;
	}
	.box p {
		text-align: right;
		margin-bottom: 3px;
		font-size: 12px;
	}
</style>
<section class="container">
	<h1 class="text-center"><?php echo single_cat_title(); ?></h1>
	<div class="row">
		<?php while (have_posts()) { the_post(); ?>
			
	
		<div class="col-sm-3">
			<div class="box">
				<?php the_post_thumbnail('medium',['class'=>'img-fluid']);?>
				
				<p> <?php the_time("d/m/Y"); ?></p>
				<h3>
					<a href="#"><?php the_title(); ?></a>
				</h3>
			</div>
		</div>
		<?php } ?>
		
	</div>
</section>
<?php get_footer(); ?>