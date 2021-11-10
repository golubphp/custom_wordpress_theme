<?php
/* The template for displaying Comments */
if ( post_password_required() )
    return;
?>
 

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'Komentar za "%2$s"', '%1$s komentara za "%2$s"', get_comments_number(), 'comments title', 'colombo' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
	
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 75,
					));
            ?>
		
<br>
<br>
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
    <?php endif; ?>
</div>



<?php 
/* Comments Form */
if (comments_open()) {
?>
<!-- Comments Form -->
<div class="card my-4">
  <h5 class="card-header">Leave a Comment:</h5>
  <div class="card-body">
	<form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentform" >
	<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
	<div class="form-group">
		<label for="name_input_id">Ime</label>
		<input type="text" class="form-control" name="author" id="name_input_id" placeholder="Enter name" required>
	</div>
  
	<div class="form-group">
		<label for="mail_input_id">Email</label>
		<input type="email" class="form-control" name="email" id="mail_input_id" placeholder="Enter email" required>
	</div>

	<div class="form-group">
		<label for="message_input_id">Poruka</label>
		<textarea class="form-control" rows="3" name="comment" id="message_input_id" placeholder="Enter message" required></textarea>
	</div>
	  <button type="submit" class="btn btn-primary">Posalji</button>
	</form>
  </div>
</div>
<?php
}
else {
	_e('Komentarisanje je zatvoreno.', 'colombo');
}

?>	


 

 
