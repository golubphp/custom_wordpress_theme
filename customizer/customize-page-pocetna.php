<?php
add_theme_support( 'customize-selective-refresh-widgets' );

function change_profile_images_fun($wp_customize) {

$wp_customize->add_section( 'pocetna_strana_section' , array(
    'title'      => __( 'Pocetna Strana', 'colombo' ),
    'priority'   => 30,
	'panel' =>'',
));

/* IMAGE 1 */
if(!get_theme_mod('profile_img_01')){
	set_theme_mod( 'profile_img_01', 'Insert Image' );
}
//remove_theme_mod('profile_img_01');
$wp_customize->add_setting('profile_img_01');

$wp_customize->add_control( 
    new WP_Customize_Image_Control( 
        $wp_customize, 
        'profile_img_01',
        array(
            'label' => __('Profile Image 01 ', 'colombo'),
            'description' => __( 'Recommended Size: 400 x 400', 'colombo'),
            'section' => 'pocetna_strana_section',
            'settings' => 'profile_img_01',
)));

$wp_customize->selective_refresh->add_partial( 'profile_img_01', array(
    'selector' => '#img_01'
));

/* PROFILE 1 NAME */
if(!get_theme_mod('profile_1_name')){
	set_theme_mod( 'profile_1_name', 'Insert Name' );
}
$wp_customize->add_setting('profile_1_name', array(
	'default' => 'Insert Name',
	'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'profile_1_name', array(
	'label' => __('Profile 1 Name', 'colombo'),
	'section' => 'pocetna_strana_section',
	'settings' => 'profile_1_name',
)));
$wp_customize->selective_refresh->add_partial('profile_1_name', array(
	'selector' => '#profile_1_name_id', 
	'render_callback' => 'profile_1_name_fun',
));

/* PROFILE 1 TEXTAREA */
if(!get_theme_mod('profile_1_text')){
	set_theme_mod( 'profile_1_text', 'Insert Name' );
}
$wp_customize->add_setting('profile_1_text', array(
	'default' => 'Insert Some Text',
	'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'profile_1_text', array(
	'label' => __('Profile 1 Text Box', 'colombo'),
	'section' => 'pocetna_strana_section',
	'settings' => 'profile_1_text',
	'type'	=> 'textarea'
)));
$wp_customize->selective_refresh->add_partial('profile_1_text', array(
	'selector' => '#profile_1_text_id', 
	'render_callback' => 'profile_1_text_fun',
));


/* IMAGE 2 */
if(!get_theme_mod('profile_img_02')){
	set_theme_mod( 'profile_img_02', 'Insert Image' );
}

$wp_customize->add_setting('profile_img_02');

$wp_customize->add_control( 
    new WP_Customize_Image_Control( 
        $wp_customize, 
        'profile_img_02',
        array(
            'label' => __('Profile Image 02 ', 'colombo'),
            'description' => __( 'Recommended Size: 400 x 400', 'colombo'),
            'section' => 'pocetna_strana_section',
            'settings' => 'profile_img_02',
)));

$wp_customize->selective_refresh->add_partial( 'profile_img_02', array(
    'selector' => '#img_02'
));

/* PROFILE 2 NAME */
if(!get_theme_mod('profile_2_name')){
	set_theme_mod( 'profile_2_name', 'Insert Name' );
}
$wp_customize->add_setting('profile_2_name', array(
	'default' => 'Insert Name',
	'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'profile_2_name', array(
	'label' => __('Profile 2 Name', 'colombo'),
	'section' => 'pocetna_strana_section',
	'settings' => 'profile_2_name',
)));
$wp_customize->selective_refresh->add_partial('profile_2_name', array(
	'selector' => '#profile_2_name_id', 
	'render_callback' => 'profile_2_name_fun',
));

/* PROFILE 2 TEXTAREA */
if(!get_theme_mod('profile_2_text')){
	set_theme_mod( 'profile_2_text', 'Insert Name' );
}
$wp_customize->add_setting('profile_2_text', array(
	'default' => 'Insert Some Text',
	'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'profile_2_text', array(
	'label' => __('Profile 2 Text Box', 'colombo'),
	'section' => 'pocetna_strana_section',
	'settings' => 'profile_2_text',
	'type'	=> 'textarea'
)));
$wp_customize->selective_refresh->add_partial('profile_2_text', array(
	'selector' => '#profile_2_text_id', 
	'render_callback' => 'profile_2_text_fun',
));

/* IMAGE 3 */
if(!get_theme_mod('profile_img_03')){
	set_theme_mod( 'profile_img_03', 'Insert Image' );
}

$wp_customize->add_setting('profile_img_03');

$wp_customize->add_control( 
    new WP_Customize_Image_Control( 
        $wp_customize, 
        'profile_img_03',
        array(
            'label' => __('Profile Image 03 ', 'colombo'),
            'description' => __( 'Recommended Size: 400 x 400', 'colombo'),
            'section' => 'pocetna_strana_section',
            'settings' => 'profile_img_03',
)));

$wp_customize->selective_refresh->add_partial( 'profile_img_03', array(
    'selector' => '#img_03'
));

/* PROFILE 3 NAME */
if(!get_theme_mod('profile_3_name')){
	set_theme_mod( 'profile_3_name', 'Insert Name' );
}
$wp_customize->add_setting('profile_3_name', array(
	'default' => 'Insert Name',
	'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'profile_3_name', array(
	'label' => __('Profile 3 Name', 'colombo'),
	'section' => 'pocetna_strana_section',
	'settings' => 'profile_3_name',
)));
$wp_customize->selective_refresh->add_partial('profile_3_name', array(
	'selector' => '#profile_3_name_id', 
	'render_callback' => 'profile_3_name_fun',
));

/* PROFILE 3 TEXTAREA */
if(!get_theme_mod('profile_3_text')){
	set_theme_mod( 'profile_3_text', 'Insert Name' );
}
$wp_customize->add_setting('profile_3_text', array(
	'default' => 'Insert Some Text',
	'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'profile_3_text', array(
	'label' => __('Profile 3 Text Box', 'colombo'),
	'section' => 'pocetna_strana_section',
	'settings' => 'profile_3_text',
	'type'	=> 'textarea'
)));
$wp_customize->selective_refresh->add_partial('profile_3_text', array(
	'selector' => '#profile_3_text_id', 
	'render_callback' => 'profile_3_text_fun',
));


}

// Customizer action
add_action('customize_register', 'change_profile_images_fun');

function profile_1_name_fun(){
   echo get_theme_mod('profile_1_name');
}
 
function profile_2_name_fun(){
   echo get_theme_mod('profile_2_name');
}
 
function profile_3_name_fun(){
   echo get_theme_mod('profile_3_name');
}

function profile_1_text_fun(){
   echo get_theme_mod('profile_1_text');
}

function profile_2_text_fun(){
   echo get_theme_mod('profile_2_text');
}

function profile_3_text_fun(){
   echo get_theme_mod('profile_3_text');
}

?>