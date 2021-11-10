<?php
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {
 
    // Do some minor form validation to make sure there is content
    if (isset ($_POST['title_input'])) {
        $title =  $_POST['title_input'];
    } else {
        echo 'Please enter the wine name';
    }
    if (isset ($_POST['txt_input'])) {
        $description = $_POST['txt_input'];
    } else {
        echo 'Please enter some notes';
    }

	if (isset ($_POST['category_input'])) {
        $categories = $_POST['category_input'];
    } else {
        echo 'Enter some category';
    }

	if (isset ($_POST['tags_input'])) {
        $tags = $_POST['tags_input'];
    } else {
        echo 'Enter some tags';
    }

 
    // ADD THE FORM INPUT TO $new_post ARRAY
    $new_post = array(
    'post_title'    =>   $title,
    'post_content'  =>   $description,
    'post_category' =>   array(isset($categories)),  // Usable for custom taxonomies too
    'tags_input'    =>   $tags,
    'post_status'   =>   'publish',  // Choose: publish, preview, future, draft, etc.
    'post_type' =>   'post'  //'post',page' or use a custom post type if you want to
    );
 
    //SAVE THE POST
    $pid = wp_insert_post($new_post);
	
	//SET UP CATEGORIES
    wp_set_post_categories($pid, $_POST['category_input']);
 
    //SET OUR TAGS UP PROPERLY
    wp_set_post_tags($pid, $_POST['tags_input']);
	
	//DODAVANJE VREDNOSTI IZ CUSTOM FIELDS
	add_post_meta($pid, 'stanje', $_POST['stanje_cf']);
	add_post_meta($pid, 'price', $_POST['cena_cf']);
	add_post_meta($pid, 'starost', $_POST['starost_cf']);
 
    //REDIRECT TO THE NEW POST ON SAVE
    $link = get_permalink( $pid );
    wp_redirect( $link );
	
	
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
 
} // END THE IF STATEMENT
 
?>







<?php
/*
Template Name: Dodaj Oglas Template
*/
get_header(); 
?>
<br>
	<h1 class="text-center ">Dodaj <span class="badge badge-primary"> Oglas</span></h1>
<br>

 <?php if ( is_user_logged_in() ) { ?>
   <!-- WINE RATING FORM -->

<section id="dodaj_oglas_forma">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<form id="new_post" name="new_post" method="post" action="" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="title">Naslov Oglasa</label>
						<input type="text" name="title_input" class="form-control" id="title" required >
					</div>
					
<div class="form-group">
	<label>Kategorija:</label>

<?php

$args_dd = array(
	'show_option_all'    => '',
	'show_option_none'   => '',
	'option_none_value'  => '-1',
	'orderby'            => 'ID',
	'order'              => 'ASC',
	'show_count'         => true,
	'hide_empty'         => 1,
	'child_of'           => 0,
	'exclude'            => '1',
	'include'            => '',
	'echo'               => 1,
	'selected'           => 0,
	'hierarchical'       => 0,
	'name'               => 'category_input',
	'id'                 => 'category_id',
	'class'              => 'form-control search-slt',
	'depth'              => 0,
	'tab_index'          => 0,
	'taxonomy'           => 'category',
	'hide_if_empty'      => false,
	'value_field'	     => 'category_field',
); 
			
wp_dropdown_categories($args_dd); 

?>

</div>
					
					<div class="form-group">
						<label>Stanje:</label>
                            <select class="form-control search-slt" name="stanje_cf" id="exampleFormControlSelect2">
								<option hidden >novo / polovno</option>
								<option value="">nebitno</option>	
								<option value="novo">Novo</option>
								<option value="polovno">Polovno</option>							
                            </select>
					</div>
					
					<div class="form-group">
						<label for="star_cf">Starost</label>
						<input type="text" name="starost_cf" class="form-control" id="star_cf" placeholder="uneti broj godina" required >
					</div>

					<div class="form-group">
						<label for="cena_cf">Cena</label>
						<input type="text" name="cena_cf" class="form-control" id="cena_cf" required >
					</div>

					<div class="form-group">
						<label for="description">Tekst Oglasa</label>
						<textarea name="txt_input" class="form-control" id="description" rows="6" required ></textarea>
					</div>

					<div class="form-group">
						<label for="exampleFormControlInput1">Ključne Reči (odvojiti zarezom):</label>
						<input type="text" name="tags_input" class="form-control" id="exampleFormControlInput1" required >
					</div>

					<div class="form-group">
						<label for="profile_photo">Dodaj Sliku</label>
						<input type="file" name="profile_photo" class="form-control-file" id="profile_photo" >
					</div>

					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" id="submit" value="Dodaj Oglas" required>
					</div>

						<input type="hidden" name="action" value="new_post" />
						<?php wp_nonce_field( 'new-post' ); ?>

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

<?php } else {
   echo 'MORATE TE BITI PRIJAVLJENI DA BISTE POSTAVLJALI OGLASE!'; 
}
?>

<?php get_footer(); ?>