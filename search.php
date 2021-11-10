<?php
/*
Template Name: Search Posts Page Template
*/
get_header(); 
?>
<br>
	<h1 class="text-center ">Search <span class="badge badge-primary"> Results</span></h1>
<br>


<section id="page_default">
	<div class="container">
		<div class="row">
		
			<div class="col-md-8">
			<br>
			<?php get_template_part('template-parts/loops/blog', 'loop'); ?>
			</div>

			<div class="col-md-4">
				<section id="custom_sidebar_one">
				<?php get_sidebar('Prvi_Sidebar'); ?>
				</section>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>