<?php 
/*
Template Name: Author Page Template (Display Author Posts)
*/

get_header(); 

?>
<br>
<h1 class="text-center"><?php the_author_posts_link(); ?> <span class="badge badge-primary"> Posts</span></h1>
<br>

<center>
<?php
$user = wp_get_current_user();
 
if ( $user ) :
    ?>
    <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
<?php endif; ?>
</center>
<br>
<section id="Blog_Page">
	<div class="container">
	  <div class="row">
		<div class="col-8">

<?php get_template_part('template-parts/loops/author', 'loop'); ?> 
	</div>
		<div class="col-4">

		<?php get_template_part( 'template-parts/sidebars/sidebar','drugi');?>
		</div>
	  </div>
	</div>
</section>





<?php get_footer(); ?>

