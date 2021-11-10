<?php
/* Template Name: Default Page Template */
get_header(); 
?>

<br>
	<h1 class="text-center ">Default Page <span class="badge badge-primary"> Template</span></h1>
<br>

<section id="page_default">
	<div class="container">
		<div class="row">
		
			<div class="col-md-8">
			<br>
			<?php get_template_part('templates/blog', 'loop'); ?>
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