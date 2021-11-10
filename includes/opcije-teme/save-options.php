<?php
function spremanje_podataka() {
        if( !current_user_can( 'edit_theme_options' ) ){
            wp_die(__('You are not allowed to be on this page.') );
        }

        check_admin_referer( 'nonce_field_verifikacija' );

        $opts				=   get_option( 'oglasi_opts' );
        $opts['ime']		=   sanitize_text_field($_POST[ 'NameInput']);
        $opts['prezime']	=   sanitize_text_field($_POST[ 'LastNameInput']);
        $opts['grad']		=   sanitize_text_field($_POST[ 'CityInput']);
		$opts['facebook']	=   sanitize_text_field($_POST[ 'cu_inputFacebook']);
		$opts['twitter']	=   sanitize_text_field($_POST[ 'cu_inputTwitter']);
		$opts['youtube']	=   sanitize_text_field($_POST[ 'cu_inputYoutube']);
		
		$opts['logo_type']	=   absint($_POST[ 'cu_inputLogoType']);
		$opts['footer']		=   $_POST[ 'cu_inputFooter'];
		$opts['logo_img']	=   esc_url_raw($_POST[ 'cu_inputLogoImg']);

        update_option( 'oglasi_opts', $opts );
        wp_redirect( admin_url('admin.php?page=opcije_teme&status=1') ); 
    }