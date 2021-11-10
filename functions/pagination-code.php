<?php

/*Pagination*/
// Numeric Page Navi
function page_navi($before = '', $after = '') {
    global $wpdb, $wp_query;
    $request = $wp_query->request;
    $posts_per_page = intval(get_query_var('posts_per_page'));
    $paged = intval(get_query_var('paged'));
    $numposts = $wp_query->found_posts;
    $max_page = $wp_query->max_num_pages;
    if ( $numposts <= $posts_per_page ) { return; }
    if(empty($paged) || $paged == 0) {
        $paged = 1;
    }
    $pages_to_show = 7;
    $pages_to_show_minus_1 = $pages_to_show-1;
    $half_page_start = floor($pages_to_show_minus_1/2);
    $half_page_end = ceil($pages_to_show_minus_1/2);
    $start_page = $paged - $half_page_start;
    if($start_page <= 0) {
        $start_page = 1;
    }
    $end_page = $paged + $half_page_end;
    if(($end_page - $start_page) != $pages_to_show_minus_1) {
        $end_page = $start_page + $pages_to_show_minus_1;
    }
    if($end_page > $max_page) {
        $start_page = $max_page - $pages_to_show_minus_1;
        $end_page = $max_page;
    }
    if($start_page <= 0) {
        $start_page = 1;
    }
         
    echo $before.'<div class="pagination_box"><ul class="pagination">'."";
    if ($paged > 1) {
        $first_page_text = "«";
        echo '<li class="prev page-item"><a href="'.get_pagenum_link().'" class="page-link" title="First">'.$first_page_text.'</a></li>';
    }
         
    $prevposts = get_previous_posts_link('← ');
    if($prevposts) { 
	echo '<li class="page-item">';
	echo $prevposts ;
	echo '</li>'; 
	}
    else { echo '<li class="disabled page-item"><a href="#" class="page-link">← </a></li>'; }
     
    for($i = $start_page; $i  <= $end_page; $i++) {
        if($i == $paged) {
            echo '<li class="active page-item"><a href="#" class="page-link">'.$i.'</a></li>';
        } else {
            echo '<li class="page-item"><a href="'.get_pagenum_link($i).'" class="page-link">'.$i.'</a></li>';
        }
    }
    echo '<li class="page-item">';
    next_posts_link(' →');
    echo '</li>';
    if (2 < 5) {
        $last_page_text = "»";
        echo '<li class="next page-item"><a href="'.get_pagenum_link($max_page).'" class="page-link" title="Last">'.$last_page_text.'</a></li>';
    }
    echo '</ul></div>'.$after."";
}

?>