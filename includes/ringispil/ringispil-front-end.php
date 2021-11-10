<?php
function ringispil_front_end_fn(){
	$rngs_opts = get_option( 'ringispil_opts' );
?>
    <div class="wrap">
        <h1>Ringišpil</h1>
    </div>
	<br>
	
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
<input type="hidden" name="action" value="ringispil_slanje">
<?php wp_nonce_field('ringispil_nonce_field'); ?>

<!-- FIRST SLIDE SECTION -->
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="InputNameId">First Slide Label</label>
		<input type="text" class="form-control" id="InputNameId" name="first_slide_label" value="<?php echo $rngs_opts[ 'first_slide_lbl' ] ?>">
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-12">
		<label for="InputTextId">First Slide Text</label>
		<input type="text" class="form-control" id="InputTextId" name="first_slide_text" value="<?php echo $rngs_opts[ 'first_slide_txt' ] ?>">
	</div>
</div>

<h5><?php _e('First Slide Image', 'colombo'); ?></h5> <span>Recommended Size: 800 x 500</span>

<div class="input-group">
	<input type="text" class="form-control" placeholder="Logo Image" name="first_slide_input_img" value="<?php echo $rngs_opts['first_slide_img']; ?>">
		<span class="input-group-btn"> &nbsp;
			<button class="btn btn-primary" type="button" id="first_slide_upload_btn"><?php _e('Choose', 'colombo'); ?></button>
		</span>
</div>
<!-- END OF FIRST SLIDE SECTION -->

<hr>

<!-- SECOND SLIDE SECTION -->
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="InputNameId">Second Slide Label</label>
		<input type="text" class="form-control" id="InputNameId" name="second_slide_label" value="<?php echo $rngs_opts[ 'second_slide_lbl' ] ?>">
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-12">
		<label for="InputTextId">Second Slide Text</label>
		<input type="text" class="form-control" id="InputTextId" name="second_slide_text" value="<?php echo $rngs_opts[ 'second_slide_txt' ] ?>">
	</div>
</div>

<h5><?php _e('Second Slide Image', 'colombo'); ?></h5> <span>Recommended Size: 800 x 500</span>

<div class="input-group">
	<input type="text" class="form-control" placeholder="Logo Image" name="second_slide_input_img" value="<?php echo $rngs_opts['second_slide_img']; ?>">
		<span class="input-group-btn"> &nbsp;
			<button class="btn btn-primary" type="button" id="second_slide_upload_btn"><?php _e('Choose', 'colombo'); ?></button>
		</span>
</div>
<!-- END OF SECOND SLIDE SECTION -->

<hr>

<!-- THIRD SLIDE SECTION -->
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="InputNameId">Third Slide Label</label>
		<input type="text" class="form-control" id="InputNameId" name="third_slide_label" value="<?php echo $rngs_opts[ 'third_slide_lbl' ] ?>">
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-12">
		<label for="InputTextId">Third Slide Text</label>
		<input type="text" class="form-control" id="InputTextId" name="third_slide_text" value="<?php echo $rngs_opts[ 'third_slide_txt' ] ?>">
	</div>
</div>

<h5><?php _e('Third Slide Image', 'colombo'); ?></h5> <span>Recommended Size: 800 x 500</span>

<div class="input-group">
	<input type="text" class="form-control" placeholder="Logo Image" name="third_slide_input_img" value="<?php echo $rngs_opts['third_slide_img']; ?>">
		<span class="input-group-btn"> &nbsp;
			<button class="btn btn-primary" type="button" id="third_slide_upload_btn"><?php _e('Choose', 'colombo'); ?></button>
		</span>
</div>
<!-- END OF THIRD SLIDE SECTION -->
<br>
<div class="form-group">
	<button type="submit" class="btn btn-primary"><?php _e('Update', 'colombo'); ?></button>
</div>

</form>
		
		</div>

	  </div>
	</div>
</section>


<?php
}
?>