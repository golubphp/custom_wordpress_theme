<?php 
// kreiranje reda ringispil_opts, u bazi pod wp_options
function ringispil_activate_fn () {
if(version_compare(get_bloginfo('version'),'4.2', '<') ) {
//echo 'Wordpress Version same or above 3.5';
wp_die(__('Morate Imati Minimalnu 4.2 Verziju WordPress-a.') );
}

	$rngs_opts			=	get_option('ringispil_opts');
	
	if(!$rngs_opts){
		$opts					=	array(
			'first_slide_lbl'		=>	'',
			'first_slide_txt'		=>	'',
			'first_slide_img'		=>	'',
			
			'second_slide_lbl'		=>	'',
			'second_slide_txt'		=>	'',
			'second_slide_img'		=>	'',
			
			'third_slide_lbl'		=>	'',
			'third_slide_txt'		=>	'',
			'third_slide_img'		=>	'',

		);
		 
		add_option ('ringispil_opts', $opts );
	}
	
}