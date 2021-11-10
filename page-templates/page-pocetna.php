<?php
/*
Template Name: Pocetna Strana Template
*/
get_header();
?>

<br>
<h1 class="text-center">Početna <span class="badge badge-primary"> Strana</span></h1>
<br>
<div class="main main-raised">
<div class="container">
  <div class="section text-center">
	<br>
	<div class="team">
	  <div class="row">
		<div class="col-md-4">
		  <div class="team-player">
			<div class="card card-plain">
			<br>
			  <div class="col-md-6 ml-auto mr-auto" id="img_01">
				<img src="<?php echo get_theme_mod('profile_img_01'); ?>" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
			  </div>
			  <h4 class="card-title" id="profile_1_name_id"><?php echo get_theme_mod('profile_1_name'); ?></h4>
			  <div class="card-body">
				<p class="card-description" id="profile_1_text_id">
				<?php echo get_theme_mod('profile_1_text'); ?>
				</p>
			  </div>
			  <div class="card-footer justify-content-center">
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-facebook-f"></i></a>
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-twitter"></i></a>
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-instagram"></i></a>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="team-player">
			<div class="card card-plain">
			<br>
			  <div class="col-md-6 ml-auto mr-auto" id="img_02">
				<img src="<?php echo get_theme_mod('profile_img_02'); ?>" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
			  </div>
			  <h4 class="card-title" id="profile_2_name_id"><?php echo get_theme_mod('profile_2_name'); ?></h4>
			  <div class="card-body">
				<p class="card-description" id="profile_2_text_id"><?php echo get_theme_mod('profile_2_text'); ?></p>
			  </div>
			  <div class="card-footer justify-content-center">
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-facebook-f"></i></a>
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-twitter"></i></a>
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-instagram"></i></a>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="team-player">
			<div class="card card-plain">
			<br>
			  <div class="col-md-6 ml-auto mr-auto" id="img_03">
				<img src="<?php echo get_theme_mod('profile_img_03'); ?>" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">				  </div>
			  <h4 class="card-title" id="profile_3_name_id"><?php echo get_theme_mod('profile_3_name'); ?></h4>
			  <div class="card-body">
				<p class="card-description" id="profile_3_text_id"><?php echo get_theme_mod('profile_3_text'); ?></p>
			  </div>
			  <div class="card-footer justify-content-center">
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-facebook-f"></i></a>
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-twitter"></i></a>
				<a href="#pablo" class="btn btn-link btn-just-icon"><i class="fab fa-instagram"></i></a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  
		<div class="section text-center">
	<div class="row">
	  <div class="col-md-8 ml-auto mr-auto">
		<br>
		<h1 class="title">Let&apos;s talk product</h1>
		<br>
	  </div>
	</div>
	<div class="features">
	  <div class="row">
		<div class="col-md-4">
		  <div class="info">
			<div class="icon icon-info">
			  <i class="fas fa-headset"></i>
			</div>
			<h4 class="info-title">Free Chat</h4>
			<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="info">
			<div class="icon icon-success">
			  <i class="far fa-user"></i>
			</div>
			<h4 class="info-title">Verified Users</h4>
			<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
		  </div>
		</div>
		<div class="col-md-4">
		  <div class="info">
			<div class="icon icon-danger">
			  <i class="far fa-comments"></i>
			</div>
			<h4 class="info-title">Comments</h4>
			<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
		  </div>
		</div>
	  </div>
	</div>
  </div>

    <br>
	  <br>
  <div class="section section-contacts">
	<div class="row">
	  <div class="col-md-8 ml-auto mr-auto">
		<br>
		<h2 class="text-center title">Work with us</h2>
		<br>
		<form class="contact-form">
		  <div class="row">
			<div class="col-md-6">
			  <div class="form-group">
				<label class="bmd-label-floating">Your Name</label>
				<input type="email" class="form-control" required>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
				<label class="bmd-label-floating">Your Email</label>
				<input type="email" class="form-control" required>
			  </div>
			</div>
		  </div>
		  <div class="form-group">
			<label for="exampleMessage" class="bmd-label-floating">Your Message</label>
			<textarea type="email" class="form-control" rows="4" id="exampleMessage" required></textarea>
		  </div>
		  <div class="row">
		  
			<div class="col-md-4 ml-auto mr-auto text-center">
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary" id="submit" value="Send Message">
				</div>
			</div>
			
		  </div>
		</form>

	  </div>
	</div>
  </div>
</div>
</div>



<br>
<br>

<!--
//$mods = get_theme_mods();
//var_dump($mods);
// output example:
//    array(2) { ["header_textcolor"]=> string(3) "333" ["header_image"]=> string(20) "random-default-image" }
//var_dump($mods['header_textcolor']);
-->
<br>

<?php get_footer(); ?> 