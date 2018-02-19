
<?php
$featured = new WP_Query( array(
	'showposts' => 4,
	'post__not_in' => get_option('sticky_posts'),
	'meta_key' => 'wpzoom_is_featured',
	'meta_value' => 1
) );

// pulled this from loop below to allow for multiple (responsive) display options
//
// if we used slider nav images (nav1) we would also have to pull this, but since we don't have this activated and
// can't test it, we will leave nav images alone at this point
//

$videocodes = array();
while( $featured->have_posts() ) :
  $featured->the_post();
  unset($videocode);
  $videocode = get_post_meta($post->ID, 'wpzoom_post_embed_code', true);
  $videocodes[] = $videocode;
endwhile;
?>

<div id="feature">
 	<div id="panes">
		<?php
		foreach ($videocodes as $videocode) :
			?><div>
				<?php if ( strlen($videocode) > 1 ) {
					$videocode_narrow = preg_replace("/(width\s*=\s*[\"\'])[0-9]+([\"\'])/i", "$1 100% $2", $videocode);
					$videocode_narrow = preg_replace("/(height\s*=\s*[\"\'])[0-9]+([\"\'])/i", "$1 auto $2", $videocode_narrow);
					$videocode_narrow = str_replace("<embed", "<param name='wmode' value='transparent'></param><embed", $videocode_narrow);
					$videocode_narrow = str_replace("<embed", "<embed wmode='transparent' ", $videocode_narrow);

					$videocode_wide = preg_replace("/(width\s*=\s*[\"\'])[0-9]+([\"\'])/i", "$1 520 $2", $videocode);
					$videocode_wide = preg_replace("/(height\s*=\s*[\"\'])[0-9]+([\"\'])/i", "$1 300 $2", $videocode_wide);
					$videocode_wide = str_replace("<embed", "<param name='wmode' value='transparent'></param><embed", $videocode_wide);
					$videocode_wide = str_replace("<embed", "<embed wmode='transparent' ", $videocode_wide);
					?>
                                        <span id="narrow-front-video" class="cover"><?php echo "$videocode_narrow"; ?></span>
                                        <span id="wide-front-video" class="cover"><?php echo "$videocode_wide"; ?></span>
                                        <?php
				}

				if ( !$videocode ) {
					?><span class="overlay"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
					<?php
					$custom_field = ( option::get( 'cf_use' ) == 'on' ) ? get_post_meta($post->ID, option::get('cf_photo'), true) : '';
					$args = array( 'size' => 'slider', 'width' => 520, 'height' => 300, 'default_image' => 'http://placehold.it/520x300' );
					if ($custom_field) { 
						$args['meta_key'] = option::get( 'cf_photo' );
					}
					get_the_image( $args );
 				} // if a video does not exist
				?>
				<span class="post-info">
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<ul class="meta-feature">
						<li><?php echo get_the_date(); ?></li>
						<li><span class="separator">&times;</span> <?php comments_popup_link( __('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom')); ?></li>
						<?php edit_post_link( __('Edit', 'wpzoom'), ' <li> <span class="separator"> &times;</span> ', '</li>'); ?>
					</ul>
					<?php the_excerpt(); ?>
					<span class="more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('Read more...', 'wpzoom'); ?></a></span>
				</span>
			</div><?php
		endforeach;
		?>
	</div>
 	<div id="navi">
		<ul>
			<?php
			while( $featured->have_posts() ) :
				$featured->the_post();
				?><li>
 					<?php
						$custom_field = ( option::get( 'cf_use' ) == 'on' ) ? get_post_meta($post->ID, option::get('cf_photo'), true) : '';
  						get_the_image( array( 'size' => 'slider-small', 'meta_key' => $custom_field, 'width' => 90, 'height' => 66, 'link_to_post' => false, 'before' => '<a href="#">', 'after' => '</a>', 'default_image' => 'http://placehold.it/90x66' ) ); 
 						?>
  				</li><?php
			endwhile;
			wp_reset_query();
			?>
		</ul>
	</div>
</div>
<div id="narrow-front-anything">
  <div class="text-slider">
    <h1>NARROW</h1>
    <?php echo do_shortcode('[wp-anything-slider setting="SETTING1"]'); ?>
  </div>
</div>
<div id="wide-front-anything">
  <div class="text-slider">
    <h1>WIDE</h1>
    <?php echo do_shortcode('[wp-anything-slider setting="SETTING1"]'); ?>
  </div>
</div>
