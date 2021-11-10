<?php
/*
Template Name: Galerija Strana Template
*/
get_header();
?>

<!-- Main -->
<section id="gallery_section" class="wrapper">
	<div id="galerija_container" class="custom_main" >
	<br/>

<h1 class="text-center"> <span class="badge badge-primary">Our Gallery</span></h1>
<br/>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_content(); ?>


</article>
<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

<!-- article -->
<article>

	<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

</div>
</section>
		
<br>

<div id="footer_strana" class="custom_footer">
<?php get_footer(); ?>
</div>

