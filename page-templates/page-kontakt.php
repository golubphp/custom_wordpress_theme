<?php
/*
Template Name: Kontakt Strana Template
*/
get_header();
?>

<section id="contact_form">
<div class="container contact">
	<div class="row">
		<div class="col-md-12 " id="form_container">
		<br />
		<h1 class="text-center">Contact <span class="badge badge-primary"> Us</span></h1>
		<p class="text-center"> Please send your message below. We will get back to you at the earliest! </p>
		<br />
		<form role="form" method="post" id="reused_form">
		<div class="row">
			<div class="col-sm-6 form-group">
				<label for="name"> Your Name:</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="col-sm-6 form-group">
				<label for="email"> Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 form-group">
				<label for="message"> Message:</label>
				<textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7" required></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 form-group">
				<button type="submit" class="btn btn-lg btn-primary pull-left" >Send &rarr;</button>
			</div>
		</div>
		</form>
		<div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
		<div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
		</div>
	</div>
</div>
</section>
<br/>
<?php get_template_part('/includes/google-map/google', 'map'); ?>
<br>
<br>
<?php get_template_part('/includes/carousel/customers', 'carousel'); ?> 
<br>
<br>
<?php get_footer(); ?>