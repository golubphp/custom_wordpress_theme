<?php
/*
Template Name: Test Page Template
*/

get_template_part( 'template-parts/headers/header', 'test' );
?>

<?php echo do_shortcode("[colombo_modal]"); ?>


<br>
<h1 class="text-center" data-toggle="tooltip" title="Some tooltip text!">Vizit <span class="badge badge-primary"> Karta</span></h1>
<br>

<?php $vkslika		= get_option('vk_slika'); ?>
<?php $vkime		= get_option('vk_ime'); ?>
<?php $vkzanimanje	= get_option('vk_zanimanje'); ?>
<?php $vkadresa		= get_option('vk_adresa'); ?>
<?php $vkgrad		= get_option('vk_grad'); ?>
<?php $vktelefon	= get_option('vk_telefon'); ?>
<?php $vkemail		= get_option('vk_email'); ?>

<div class="card mb-3 mx-auto" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php print $vkslika; ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php print $vkime; ?></h5>
			<address>
				<strong><?php print $vkzanimanje; ?></strong><br>
				<?php print $vkadresa; ?><br>
				<?php print $vkgrad; ?><br>
				<?php print $vktelefon; ?><br>
				<a href="mailto:first.last@example.com"><?php print $vkemail; ?></a>
			</address>
      </div>
    </div>
  </div>
</div>

<br>




		<!-- Main -->
<section id="main" class="wrapper">
<div id="strana_container" class="custom_main" >

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>

<?php comments_template( '', true ); ?>

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



<?php 
$rngs_opts = get_option( 'ringispil_opts' ); 
?>
 
 
<?php get_footer(); ?>