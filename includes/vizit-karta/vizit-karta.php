<?php


function director_create_menu() {

add_submenu_page ( 
	'themes.php',
	'Vizit Karta Podaci',
	'Vizit Karta', 
	'administrator', 
	'vk_opts', 
	'vk_admin_frontend'
);

}

add_action('admin_menu', 'director_create_menu');

function director_register_settings() {
	
 register_setting( 'vizit_karta_settings', 'vk_slika' );
 register_setting( 'vizit_karta_settings', 'vk_ime' );
 register_setting( 'vizit_karta_settings', 'vk_zanimanje' );
 register_setting( 'vizit_karta_settings', 'vk_adresa' );
 register_setting( 'vizit_karta_settings', 'vk_grad' );
 register_setting( 'vizit_karta_settings', 'vk_telefon' );
 register_setting( 'vizit_karta_settings', 'vk_email' );
 register_setting( 'vizit_karta_settings', 'vk_rss' );

}

add_action( 'admin_init', 'director_register_settings' );


function vk_admin_frontend() {
?>
<div class="wrap">
<h2>Vizit Karta Unos Podataka</h2>
<form id="landingOptions" method="post" action="options.php">
 <?php settings_fields( 'vizit_karta_settings' ); ?>
 <table class="form-table">
 
 <tr valign="top">
 <th scope="row">Slika:</th>
 <td>
<input type="text" name="vk_slika" value="<?php print get_option('vk_slika'); ?>" />
 <br/>
 *Upload using the Media Uploader and paste the URL
 here.
 </td>
 </tr>
 <tr valign="top">
 <th scope="row">Ime:</th>
 <td>
 <input type="text" name="vk_ime"
 value="<?php print get_option('vk_ime');
 ?>" />
 </td>
 </tr>
 <tr valign="top">
 <th scope="row">Zanimanje:</th>
 <td>
<input type="text" name="vk_zanimanje" value="<?php print get_option('vk_zanimanje'); ?>" />
 </td>
 </tr>
 <tr valign="top">
 <th scope="row">Adresa:</th>
 <td>
<input type="text" name="vk_adresa" value="<?php print get_option('vk_adresa'); ?>" />
 </td>
 </tr>
  <tr valign="top">
 <th scope="row">Grad:</th>
 <td>
<input type="text" name="vk_grad" value="<?php print get_option('vk_grad'); ?>" />
 </td>
 </tr>
   <tr valign="top">
 <th scope="row">Telefon:</th>
 <td>
<input type="text" name="vk_telefon" value="<?php print get_option('vk_telefon'); ?>" />
 </td>
 </tr>
    <tr valign="top">
 <th scope="row">Email:</th>
 <td>
<input type="text" name="vk_email" value="<?php print get_option('vk_email'); ?>" />
 </td>
 </tr>
 <tr>
 <th scope="row">Display RSS Icon:</th>
 <td>
 <input type="checkbox" name="vk_rss" 
 <?php
 if(get_option('vk_rss') == true){ print
 "checked"; } ?> />
 </td>
 </tr>

 </table>
 <p class="submit">
 <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
 </p>
</form>
</div>
<?php 
} 
?>