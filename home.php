<?php 
/*
Template Name: Home Page Template (Display Blog Posts)
*/

get_header(); 

?>

<br>

<h1 id="copy-write" class="text-center">Blog <span class="badge badge-primary"> Posts</span></h1>

<br>

<span id="yourID">
<?php /* Partner logo */

    $headPartner = get_theme_mod( 'your_theme_second_logo' ); 

    if ( !empty($headPartner) ) {

        echo '<img src="' . $headPartner . '" alt="Your Partner">';

    }

?>
</span>

<section id="Blog_Page">
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

