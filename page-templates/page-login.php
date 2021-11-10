<?php
/*
Template Name: Login Page Template
*/
get_header();
?>






<!--
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->

<?php global $user_ID, $user_identity; if (!$user_ID) { ?> 

<section id="loginPageId">
    <div class="container">
    <div class="row">

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto"> 
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login Page</h5>
            <form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="form-signin" >
              <div class="form-label-group">
				<label for="inputName">User Name</label>
                <input type="text" id="inputName" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" class="form-control" placeholder="User Name" required autofocus>        
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" name="pwd" value="" class="form-control" placeholder="Password" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="rememberme" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
			  <?php do_action('login_form'); ?>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="user-submit" type="submit">Sign in</button>
			  <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
			  <input type="hidden" name="user-cookie" value="1" />
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
            </form>
          </div>
        </div>
      </div>
	  
    </div>
  </div>
</section>
	  
	 	<?php } else { // is logged in ?>
	 	
	 	<?php
	 	echo"<script type='text/javascript'>
        $(document).ready(function(){
        alert('USPESNO STE PRIJAVLJENI. MOZETE POSTAVLJATI I UREDJIVATI OBJAVE.');
        });
        </script>";
        ?>
<center>
	<div class="login_uspesno">
		<h3>Dobrodošli, <?php echo $user_identity; ?></h3>
		<div class="usericon">
			<?php global $userdata; echo get_avatar($userdata->ID, 60); ?>

		</div>
		<div class="userinfo">
			<p>Prijavljeni ste kao <strong><?php echo $user_identity; ?></strong></p>
			<p>
				<a href="<?php echo wp_logout_url('index.php'); ?>">Odjavi Se</a> | 
				<?php if (current_user_can('manage_options')) { 
					echo '<a href="' . admin_url() . '">' . __('Administracija') . '</a>'; } else { 
					echo '<a href="' . admin_url() . 'profile.php">' . __('Profile') . '</a>'; } ?>
				
			</p>
		</div>
	</div>
</center>
	<?php } ?> 
	   


<?php get_footer(); ?>





