<?php 
if (is_active_sidebar('sidebar-1')) {
dynamic_sidebar('sidebar-1');	
}
?>

<section id="rss_section_id">
	<ul class="feeds">
		<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><i class="fas fa-rss"></i> RSS </a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><i class="fas fa-rss"></i> Comments RSS</a></li>
	</ul>
</section>


<section id="category_section_id">
    <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => true,
		'title_li'            => __( '<h5 class="card-header">Kategorije</h5>' ),
		'exclude'            => '1',
    ) ); ?> 
</section>

<section id="tags_section_id">
<?php the_tags('<h5 class="card-header">Tagovi</h5><ul>', ' ', '</ul>' ); ?>
</section>