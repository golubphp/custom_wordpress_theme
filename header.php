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


<div id="header_container">
	<section id="glavni_header" class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="background-size: cover; background-position: center center; background-image: url(<?php header_image(); ?>); height: 600px; ">
		<div class="container-fluid">
			<div class="row  justify-content-center align-items-center d-flex text-center h-100">
				<div class="col-12 col-md-8  h-50 ">
					<h1 class="display-2  text-light mb-2 mt-5" id="header_h1"><strong><?php echo get_theme_mod('naslov_header', 'Type some text'); ?></strong> </h1>
						<p class="lead  text-light mb-5" id="head_sub"><?php echo get_theme_mod('header_podnaslov', 'Type some text'); ?></p>
						<p>
						<?php if( get_theme_mod( 'header_button', 'show' ) == 'show' ) : ?>
						<a href="#" class="btn bg-primary btn-round text-light btn-lg btn-rised"><span id="header_button_title_id"><?php echo get_theme_mod('header_button_title'); ?> </span></a>
						<?php endif ?>
						</p>
					<div class="btn-container-wrapper p-relative d-block  zindex-1">
						<a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light" href="#"></a>   
					</div>   
				</div>
			</div>
		</div>
	</section>
</div>
	
<div class="breadcrumb"><?php if (function_exists('get_breadcrumb')) { get_breadcrumb(); } ?></div>	   





        
        

        
     	
       
