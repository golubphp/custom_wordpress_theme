<?php

function colombo_header_customize( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   
$wp_customize->add_section( 'colombo_header_section' , array(
    'title'      => __( 'Manage Header', 'Oglasi' ),
    'priority'   => 30,
	'panel' =>''
));

/* HEADER TEXT COLOR */
$wp_customize->add_setting( 'header_textcolor' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
	'label'      => __( 'Header Text Color', 'Oglasi' ),
	'section'    => 'colombo_header_section',
	'settings'   => 'header_textcolor',
)));

/* NASLOV HEADER */
$wp_customize->add_setting('naslov_header', array(
'default' => 'Tekst Naslova',
'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'naslov_header', array(
'label' => __('Header Main Title', 'colombo'),
'section' => 'colombo_header_section',
'settings' => 'naslov_header',
'type'     => 'text',
)));
$wp_customize->selective_refresh->add_partial('naslov_header', array(
'selector' => '#header_h1', // You can also select a css class
'render_callback' => 'change_header_text',
));

//set_theme_mod( 'header_podnaslov', 'neka xyz' );
/* HEADER PODNASLOV */
$wp_customize->add_setting('header_podnaslov', array(
'default' => 'Tekst Pod Naslova',
'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'header_podnaslov', array(
'label' => __('Header Sub Title', 'colombo'),
'section' => 'colombo_header_section',
'settings' => 'header_podnaslov',
'type'     => 'text',
)));
$wp_customize->selective_refresh->add_partial('header_podnaslov', array(
'selector' => '#head_sub', // You can also select a css class
'render_callback' => 'change_sub_header_text',
));

/* HEADER BUUTON */
if(!get_theme_mod('header_button')){
	set_theme_mod( 'header_button', 'value' );
}
$wp_customize->add_setting( 'header_button' , array(
      'default'     => true,
      'transport'   => 'refresh',
));

  $wp_customize->add_control( 'header_button', array(
  'label' => 'Button Display',
  'section' => 'colombo_header_section',
  'settings' => 'header_button',
  'type' => 'radio',
  'choices' => array(
    'show' => 'Show Button',
    'hide' => 'Hide Button',
  ),
));

/* BUTTON TEXT VALUE */
if(!get_theme_mod('header_button_title')){
	set_theme_mod( 'header_button_title', 'Insert Name' );
}
$wp_customize->add_setting('header_button_title', array(
	'default' => 'Insert Name',
	'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_button_title', array(
	'label' => __('Button Text Value', 'colombo'),
	'section' => 'colombo_header_section',
	'settings' => 'header_button_title',
)));
$wp_customize->selective_refresh->add_partial('header_button_title', array(
	'selector' => '#header_button_title_id', 
	'render_callback' => 'header_button_title_fun',
));

}
add_action( 'customize_register', 'colombo_header_customize' );

function colombo_header_customize_css() { ?>
         <style type="text/css">

			 #header_h1, #head_sub { color: #<?php echo get_theme_mod('header_textcolor', '#a825ea'); ?> !important; }

         </style>
<?php }

add_action( 'wp_head', 'colombo_header_customize_css' );

function change_header_text(){
   echo get_theme_mod('naslov_header');
 }
?>
<?php
function change_sub_header_text(){
   echo get_theme_mod('header_podnaslov');
 }
?>
<?php
function header_button_title_fun(){
   echo get_theme_mod('header_button_title');
}
?>