<?php get_header(); ?>




  <!-- Page Content -->
  <section id="Post_Content">
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-md-8">
	  
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- Title -->
        <h1 class="mt-4">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h1>
		
        <!-- Author -->
		<p class="lead"><i class="far fa-user"></i> <?php _e( 'Autor : ', 'colombo' ); the_author_posts_link(); ?></p>
		<?php get_template_part( 'includes/social/social', 'icons' );?>
		<br>
		<hr>
		<?php
			$current_user = wp_get_current_user();
			$cul = $current_user->user_login;
			$get_author =  get_the_author();

			if ($cul==$get_author){
				$link = home_url( '/izmeni/' );
				$link = add_query_arg( 'post_id_num', get_the_ID(), $link );
				echo '<a href="', $link, '"><i class="far fa-edit"></i> Izmeni Post</a>';
			}
			?>
			
			<?php if ($post->post_author == $current_user->ID) { ?>
			<a onclick="return confirm('Da li ste SIGURNI da hocete da obrišete ovaj post?')" href="<?php echo get_delete_post_link( $post->ID ) ?>"><i class="far fa-trash-alt"></i> Obriši Post</a>
			<?php } ?>
        <hr>
		<p><?php _e( 'Kategorije: ', 'colombo' ); the_category(', '); ?></p>

        <!-- Date/Time -->
        <p>Objavljeno: <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>

        <hr>

		<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('medium'); ?>
				</a>
		<?php endif; ?>

        <hr>

        <!-- Post Content -->
        <p class="lead">
		<?php the_content(); ?>
		</p>


		<?php edit_post_link('Uredi Post', '<p>', '</p>'); ?>
        <hr>
		<?php endwhile; ?>
		<?php else: ?>
		<h1><?php _e( 'Sorry, nothing to display.', 'colombo' ); ?></h1>
		<?php endif; ?>

        <!-- Display Comments
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

 
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Comment with nested comments</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>
		-->

<?php
 if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;
?>
</div>
	  


      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
		<section id="custom_sidebar_one">
		<?php get_sidebar('Prvi_Sidebar'); ?>
		</section>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  </section>

<?php get_footer(); ?>
