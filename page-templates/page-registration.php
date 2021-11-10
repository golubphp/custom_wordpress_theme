<?php
/*
Template Name: Registration Page Template
*/
get_header(); 
?>

<section id="registracija_section">
		<div class="container">
			<div class="row main">
			<div class="col-md-6 offset-md-3">
				<div class="main-login main-center">
					<br>
					<h1 class="text-center ">Registracija <span class="badge badge-primary"> Korisnika</span></h1>
					<br>
					<form class="" method="post" action="#">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>&nbsp;
									<input type="text" class="form-control" name="input_name" id="name"  placeholder="Enter your Name"/ required >
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>&nbsp;
									<input type="text" class="form-control" name="input_email" id="email"  placeholder="Enter your Email"/ required >
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>&nbsp;
									<input type="text" class="form-control" name="input_username" id="username"  placeholder="Enter your Username"/ required >
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>&nbsp;
									<input type="password" class="form-control" name="input_password" id="password"  placeholder="Enter your Password"/ required >
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>&nbsp;
									<input type="password" class="form-control" name="input_confirm" id="confirm"  placeholder="Confirm your Password"/ required >
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" id="button" value="Register" class="btn btn-primary btn-lg btn-block login-button">
						</div>
						
					</form>
				</div>
				</div>
			</div>
		</div>
</section>
		
<?php

if ($_POST) {

    $username		=	sanitize_text_field($_POST['input_name']);
    $email			=	sanitize_text_field($_POST['input_email']);
    $password		=	sanitize_text_field($_POST['input_password']);
    $ConfPassword	=	sanitize_text_field($_POST['input_confirm']);

    $error = array();
    if (strpos($username, ' ') !== FALSE) {
        $error['username_space'] = "Username has Space";
    }

    if (empty($username)) {
        $error['username_empty'] = "Needed Username must";
    }

    if (username_exists($username)) {
        $error['username_exists'] = "Username already exists";
    }

    if (!is_email($email)) {
        $error['email_valid'] = "Email has no valid value";
    }

    if (email_exists($email)) {
        $error['email_existence'] = "Email already exists";
    }

    if (strcmp($password, $ConfPassword) !== 0) {
        $error['password'] = "Password didn't match";
    }

    if (count($error) == 0) {

        wp_create_user($username, $password, $email);
        echo "User Created Successfully";
        echo"<script type='text/javascript'>
        $(document).ready(function(){
        alert('USPESNO STE REGISTROVANI. MOZETE POSTAVLJATI I UREDJIVATI OBJAVE.');
        });
        </script>";
        exit();
    }else{
        
        print_r($error);
		echo 'SVA POLJA MORAJU BITI POPUNJENA!';

        
    }
}

?>		

<br>
<br>
<?php get_footer(); ?>