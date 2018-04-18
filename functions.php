<?php
/*
 * functions.php for World Beyond War yamidoo child theme
 */

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles() {
  $parent_style = 'yamidoo-style'; 
  wp_enqueue_style($parent_style, get_template_directory_uri().'/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css',
                   array($parent_style),
                   wp_get_theme()->get('Version')
  );
}

if (!function_exists('my_pagination')):
  function my_pagination() {
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links(array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages,
      'mid_size' => 5
 
    ));
  }
endif;
