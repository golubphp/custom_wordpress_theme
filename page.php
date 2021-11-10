<?php get_header(); ?>

<!-- Main -->
<section id="main" class="wrapper">
	<div id="strana_container" class="custom_main" >

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_content(); ?>

	<?php comments_template( '', true ); // Remove if you don't want comments ?>

	<br class="clear">

	<?php edit_post_link(); ?>

</article>
<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

<!-- article -->
<article>

	<h2><?php _e( 'Sorry, nothing to display.', 'colombo' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

</div>
</section>
		


<div id="sidebar_strana" class="custom_sidebar">
<?php get_sidebar(); ?>
</div>

<div id="footer_strana" class="custom_footer">
<?php get_footer(); ?>
</div>

