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

function widget($atts) {
  global $wp_widget_factory;
	        
  extract(shortcode_atts(array('widget_name' => FALSE), $atts));
	        
  $widget_name = wp_specialchars($widget_name);
	        
  if (!is_a($wp_widget_factory->widgets[$widget_name], 'WP_Widget')):
    $wp_class = 'WP_Widget_'.ucwords(strtolower($class));
		        
    if (!is_a($wp_widget_factory->widgets[$wp_class], 'WP_Widget')):
      return '<p>'.sprintf(__("%s: Widget class not found. Make sure this widget exists and the class name is correct"),'<strong>'.$class.'</strong>').'</p>';
    else:
      $class = $wp_class;
    endif;
  endif;
		    
  ob_start();
  the_widget($widget_name, $instance, array('widget_id'=>'arbitrary-instance-'.$id,
      				            'before_widget' => '',
					    'after_widget' => '',
					    'before_title' => '',
					    'after_title' => ''));
  $output = ob_get_contents();
  ob_end_clean();
  return $output;
}
add_shortcode('widget','widget'); 

