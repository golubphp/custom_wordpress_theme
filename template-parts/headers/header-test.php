<!DOCTYPE html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
    


    <meta name="viewport" content="width=device-width">
	
	<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

		<!-- Google Fonts -->

	
<?php wp_head(); ?>	
</head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
?>

<?php get_template_part( 'menu', get_post_format() ); ?>

<!--  GET INFORMATION FROM DATABASE FOR HEADER -->
<?php 
$take_rngs_opts = get_option( 'ringispil_opts' ); 
?>
	
	<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo $take_rngs_opts['first_slide_img']; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $take_rngs_opts[ 'first_slide_lbl' ] ?></h5>
          <p><?php echo $take_rngs_opts[ 'first_slide_txt' ] ?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $take_rngs_opts['second_slide_img']; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $take_rngs_opts[ 'second_slide_lbl' ] ?></h5>
          <p><?php echo $take_rngs_opts[ 'second_slide_txt' ] ?></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $take_rngs_opts['third_slide_img']; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $take_rngs_opts[ 'third_slide_lbl' ] ?></h5>
          <p><?php echo $take_rngs_opts[ 'third_slide_txt' ] ?></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="breadcrumb"><?php if (function_exists('get_breadcrumb')) { get_breadcrumb(); } ?></div>	  




        
        

        
     	
       
