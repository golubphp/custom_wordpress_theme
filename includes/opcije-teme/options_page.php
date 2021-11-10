<?php
function opcije_teme_front_end(){
	$theme_opts = get_option( 'oglasi_opts' );
?>
    <div class="wrap">
        <h1>Hello!</h1>
    </div>
	
<section id="korisnik_forma">
	<div class="container">
	  <div class="row">
		<div class="col-8">
<?php
    if(isset($_GET['status']) && $_GET['status'] == 1) {
        ?>
        <div class="alert alert-success">Vaši Podaci Su Uspešno Poslati!</div>
        <?php
    }
?>		

<form method="post" action="admin-post.php">
<input type="hidden" name="action" value="spremanje_podataka">
<?php wp_nonce_field('nonce_field_verifikacija'); ?>

    <div class="form-row">
    <div class="form-group col-md-12">
      <label for="InputNameId">First Name</label>
	  <input type="text" class="form-control" id="InputNameId" name="NameInput" value="<?php echo $theme_opts[ 'ime' ] ?>">
    </div>
    <div class="form-group col-md-12">
      <label for="InputLastNameId">Last Name</label>
    <input type="text" class="form-control" id="InputLastNameId" name="LastNameInput" value="<?php echo $theme_opts[ 'prezime' ] ?>">
    </div>
	<div class="form-group col-md-12">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="CityInput" value="<?php echo $theme_opts[ 'grad' ] ?>">
    </div>
  </div>

<h4><?php _e('Social Icons', 'udemy'); ?></h4>

<div class="form-group">
	<label><?php _e('Facebook', 'udemy'); ?></label>
	<input type="text" class="form-control" name="cu_inputFacebook" value="<?php echo $theme_opts['facebook']; ?>">
</div>
				
<div class="form-group">
	<label><?php _e('Twitter', 'udemy'); ?></label>
	<input type="text" class="form-control" name="cu_inputTwitter" value="<?php echo $theme_opts['twitter']; ?>">
</div>

<div class="form-group">
	<label><?php _e('YouTube', 'udemy'); ?></label>
	<input type="text" class="form-control" name="cu_inputYoutube" value="<?php echo $theme_opts['youtube']; ?>">
</div>

<h4><?php _e('Logo', 'udemy'); ?></h4>
<div class="form-group">
	<label><?php _e('Logo Type', 'udemy'); ?></label>
	<select class="form-control" name="cu_inputLogoType">
		<option value="1"><?php _e('Site Name', 'udemy'); ?></option>
		<option value="2"><?php echo $theme_opts['logo_type'] == 2 ? 'SELECTED' : ''; ?><?php _e('Image', 'udemy'); ?></option>
	</select>
</div>

<div class="input-group">
	<input type="text" class="form-control" placeholder="Logo Image" name="cu_inputLogoImg" value="<?php echo $theme_opts['logo_img']; ?>">
		<span class="input-group-btn">
			<button class="btn btn-primary" type="button" id="cu_uploadLogoImgBtn"><?php _e('Upload', 'udemy'); ?></button>
		</span>
</div>


<h4><?php _e('Footer', 'udemy'); ?></h4>
<div class="form-group">
	<label><?php _e('Footer Text (HTML Allowed)', 'udemy'); ?></label>
	<textarea class="form-control" name="cu_inputFooter"><?php echo stripslashes_deep($theme_opts['footer']); ?></textarea>
</div>


<div class="form-group">
	<button type="submit" class="btn btn-primary"><?php _e('Update', 'udemy'); ?></button>
</div>

</form>
		
		</div>

	  </div>
	</div>
</section>


<?php
}
?>