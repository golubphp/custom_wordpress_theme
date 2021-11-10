<?php
/*
Template Name: Izmeni Oglas Template
*/
get_header();
?>

<?php

if ( 'POST' == $_SERVER['REQUEST_METHOD'] && ! empty($_POST['post_id']) && ! empty($_POST['post_title']) && isset($_POST['update_post_nonce']) && isset($_POST['postcontent']) )
{
	$post_id = $_GET['post_id_num'];
        $update_post = array(
            'ID'			=>	esc_sql($post_id),
            'post_title'	=>	esc_sql($_POST['post_title']),
            'post_content'	=>	esc_sql($_POST['postcontent']),
			'post_status'	=>	'publish',  // Choose: publish, preview, future, draft, etc.
			'post_type'		=>	'post'  //'post',page' or use a custom post type if you want to
        );
		
		//SAVE THE POST
		$pid = wp_update_post($update_post);

        if ( isset($_POST['stanje_input']) ) update_post_meta($post_id, 'stanje', esc_sql($_POST['stanje_input']) );
        if ( isset($_POST['nmf_price']) ) update_post_meta($post_id, 'price', esc_sql($_POST['nmf_price']) );
		if ( isset($_POST['starost_input']) ) update_post_meta($post_id, 'starost', esc_sql($_POST['starost_input']) );
		
//IMPORT IMAGE

// Get the path to the upload directory.
$wp_upload_dir = wp_upload_dir();
	
// $filename should be the path to a file in the upload directory.	
$file = $_FILES["profile_photo"]["name"];
$uploadfile = $wp_upload_dir['path'] . '/' . basename( $file );
move_uploaded_file( $_FILES["profile_photo"]["tmp_name"] , $uploadfile );	
$filename = basename( $uploadfile );
$wp_filetype = wp_check_filetype(basename($filename), null );

// The ID of the post this attachment is for.
$parent_post_id = get_the_ID();

$attachment = array(
	'post_mime_type' => $wp_filetype['type'],
	'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
	'post_content' => '',
	'post_status' => 'inherit'
	);
	
// Insert the attachment.
$attach_id = wp_insert_attachment( $attachment, $uploadfile );
update_post_meta($pid,'_thumbnail_id',$attach_id);

// Generate the metadata for the attachment, and update the database record.
$attach_data = wp_generate_attachment_metadata( $attach_id, $uploadfile );
wp_update_attachment_metadata( $attach_id, $attach_data );

set_post_thumbnail( $pid, $attach_id );
	
}
?>

<br>
	<h1 class="text-center ">Izmeni <span class="badge badge-primary"> Oglas</span></h1>
<br>

<section id="izmeni_oglas_stranica">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

<form id="post" class="post-edit front-end-form" method="post" enctype="multipart/form-data">

	<input type="hidden" name="post_id" value="<?php the_ID(); ?>" />
	<?php wp_nonce_field( 'update_post_'. get_the_ID(), 'update_post_nonce' ); ?>
	<?php $post_id_form = get_post( $_GET['post_id_num'] ); ?>

	<div class="form-group">
		<label for="post_title">Naslov Oglasa</label>
		<input type="text" class="form-control" id="post_title" name="post_title" value="<?php echo $post_id_form->post_title; ?>" required >
	</div>
	
	<div class="form-group">
		<label for="post_editor">Sadrzaj Oglasa</label>
		<?php wp_editor( $post_id_form->post_content, 'postcontent' ); ?>
	</div>
	
	<div class="form-group">
		<label>Stanje:</label>
			<select class="form-control search-slt" name="stanje_input" id="stanje_page_izmeni_id">
				<option hidden >novo / polovno</option>
				<option value="">nebitno</option>	
				<option value="novo">Novo</option>
				<option value="polovno">Polovno</option>							
			</select>
	</div>

	<div class="form-group">
		<label for="nmf_color">Cena</label>
		<?php $value = get_post_meta( $_GET['post_id_num'], 'price', true); ?>
		<input type="text" class="form-control" id="idf_price" name="nmf_price" value="<?php echo $value; ?>" >
	</div>

	<div class="form-group">
		<label for="nmf_color">Starost</label>
		<?php $value = get_post_meta( $_GET['post_id_num'], 'starost', true); ?>
		<input type="text" class="form-control" id="idf_size" name="starost_input" value="<?php echo $value; ?>" >
	</div>
	
	<!-- promeni sliku -->

	<div class="form-group">
		<label for="profile_photo">Promeni Sliku</label>
		<input type="file" name="profile_photo" class="form-control-file" id="profile_photo" >
	</div>

	<div class="form-group">
		<input type="submit" id="submit" class="btn btn-primary" value="Izmeni Oglas" />
	</div>

</form>

			</div>

			<!-- Sidebar Widgets Column -->
			<div class="col-md-4">
				<section id="custom_sidebar_one">
				<?php get_sidebar('Prvi_Sidebar'); ?>
				</section>
			</div>
	  
		</div>
	</div>
</section>

<?php get_footer(); ?>