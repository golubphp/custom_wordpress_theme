<?php

function theme_footer_customizer($wp_customize){
 
$wp_customize->add_section('footer_settings_section', array(
  'title'          => 'Manage Footer'
 ));
 

//adding setting for footer background
$wp_customize->add_setting('background_color', array(
'default'        => '#263238',
'transport' => 'refresh',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
'label'   => 'Footer Background Color',
'section' => 'footer_settings_section',
'settings'   => 'background_color',
)));



}

add_action('customize_register', 'theme_footer_customizer');

function footer_bg_color() { ?>

	<style type="text/css">
		footer  { background-color: #<?php echo get_theme_mod('background_color', '#263238'); ?> ; }
	</style>
	
	<script type="text/javascript">
	</script>
<?php }

add_action( 'wp_footer', 'footer_bg_color' );

?>
