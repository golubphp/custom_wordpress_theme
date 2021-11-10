<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->

<div class="card col-md-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section id="prikaz_blog_rezultata">
<br>
	<div class="container post_thumnails" >
	  <div class="row">
		<div class="col-md-5">
				<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		<?php endif; ?>
		</div>

	<div class="card-body col-md-7" >
	<!-- post details -->
		<h4 class="card-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h4>
		<h6>
		<span class="author"><?php _e( '<i class="far fa-user"></i> ', 'colombo' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="date"><i class="far fa-clock"></i> <i><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></i></span>
		</h6>

		<?php echo excerpt(10); ?>
		<?php echo wpdocs_excerpt_more('opacupa'); ?>
		<br>
		<small class="text-muted">Poslednje Izmene : <?php the_modified_date(); ?></small>
		<br>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( '<i class="far fa-comments"></i> Ostavite Komentar', 'colombo' ), __( '<i class="far fa-comments"></i> 1 Comment', 'html5blank' ), __( '<i class="far fa-comments"></i> % Comments', 'html5blank' )); ?></span>
		<?php edit_post_link('<i class="far fa-keyboard"></i> Uredi Post') ?>
		

		

<br>
<br>
		<a href="<?php the_permalink(); ?>" class="btn btn-primary pull-right"><i class="far fa-eye"></i> Pregledaj</a>
	</div>
	  </div> <!-- end row -->
</div> <!-- end container -->
</section>
</div>
<br>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

<!-- Pagination -->

<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
		<!-- rest of the loop -->
		<!-- the title, the content etc.. -->
<?php endwhile; ?>
<!-- pagination -->
<ul id="nap_naz_pag" class="pagination">
<li class="page-item">
<?php previous_posts_link('« Prethodni'); ?>
</li>
&nbsp;
<li class="page-item">
<?php next_posts_link('Sledeći »'); ?>
</li>
</ul>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>


<div id="paginacija">
<?php page_navi(); ?>
</div>

