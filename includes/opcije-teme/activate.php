<?php 
	
function oglasi_activate () {
if(version_compare(get_bloginfo('version'),'4.2', '<') ) {
//echo 'Wordpress Version same or above 3.5';
wp_die(__('Morate Imati Minimalnu 4.2 Verziju WordPress-a.') );
}

	$theme_opts			=	get_option('oglasi_opts');
	
	if(!$theme_opts){
		$opts					=	array(
			'ime'				=>	'',
			'prezime'			=>	'',
			'grad'				=>	'',
			'facebook'			=>	'',
			'twitter'			=>	'',
			'youtube'			=>	'',
			'logo_type'			=>	 1,
			'logo_img'			=>	'',
			'footer'			=>	''
		);
		 
		add_option ('oglasi_opts', $opts );
	}
	
}


