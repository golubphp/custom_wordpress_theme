<?php
/* Template Name: Category Page Template */
get_header(); 
?>

<br>
	<h1 class="text-center ">Category <span class="badge badge-primary"> Page</span></h1>
<br>

<section id="category_page">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<br>
			<?php get_template_part('loop'); ?> 
			<?php get_template_part('pagination'); ?>
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

