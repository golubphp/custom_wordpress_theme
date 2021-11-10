<?php
function ringispil_slanje() {
        if( !current_user_can( 'edit_theme_options' ) ){
            wp_die(__('You are not allowed to be on this page.') );
        }

        check_admin_referer( 'ringispil_nonce_field' );

        $opts						=   get_option( 'ringispil_opts' );
        $opts['first_slide_lbl']	=   sanitize_text_field($_POST[ 'first_slide_label']);
		$opts['first_slide_txt']	=   sanitize_text_field($_POST[ 'first_slide_text']);
		$opts['first_slide_img']	=   esc_url_raw($_POST[ 'first_slide_input_img']);

		$opts['second_slide_lbl']	=   sanitize_text_field($_POST[ 'second_slide_label']);
		$opts['second_slide_txt']	=   sanitize_text_field($_POST[ 'second_slide_text']);
		$opts['second_slide_img']	=   esc_url_raw($_POST[ 'second_slide_input_img']);
		
		$opts['third_slide_lbl']	=   sanitize_text_field($_POST[ 'third_slide_label']);
		$opts['third_slide_txt']	=   sanitize_text_field($_POST[ 'third_slide_text']);
		$opts['third_slide_img']	=   esc_url_raw($_POST[ 'third_slide_input_img']);
		
        update_option( 'ringispil_opts', $opts );
        wp_redirect( admin_url('admin.php?page=rngs_opts&status=1') ); 
    }