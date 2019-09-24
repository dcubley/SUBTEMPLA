<?php get_header();?>


<img src="<?php bloginfo('template_directory');?>/images/BACKGROUND1.jpg" class="bg">

	<div id="hero">
		<div class="container d-flex align-items-center justify-content-center h-100 ">
			
			<h1>Welcome to SUB TEMPLA</h1>

		</div>

	</div>

	<div class="content">
		
		<div class="container">
			
			<?php get_template_part('includes/section','content');?>

		</div>

	</div>
	<section class="page-wrap">
	<div class="container">

	    <h1><?php the_title();?></h1>

	    

	</div>
	</section>

</div>

<?php get_footer();?>