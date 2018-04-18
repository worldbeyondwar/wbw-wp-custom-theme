/**
 * Template Name: WBW Archive
 * 
 * This template generates a custom archive page
 */

<?php get_header(); ?>

<div class="article-archive">
  <h1 class="page-title">Articles</h1>
 
         <?php
           $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
           $args = array (
             'nopaging'               => false,
             'paged'                  => $paged,
             'posts_per_page'         => '15',
             'post_type'              => 'post',
             'post_status'            => 'publish',
           );
 
           $query = new WP_Query( $args );
 
           if ($query->have_posts()) {
 
             previous_posts_link( '« Previous Page' );
 
             ?>
             <div class="archive-post">
               <table class="archive-post-table">
                 <?php
                   while ($query->have_posts()) {
                     $query->the_post();
                     $title = get_the_title();
                     $datetime = get_the_date('F j, Y g:i a');
                     $thumb = get_the_post_thumbnail(null,'medium');
                     $link = get_permalink($recent["ID"]);
                     ?>
                     <tr>
                       <td class="archive-post-image">
                         <a href="<?php print $link ?>"><?php print $thumb ?></a>
                       </td>
                       <td class="archive-post-text">
                         <div class="archive-post-title"><h2 class="title"><a href="<?php print $link ?>"><?php print $title ?></a></h2></div>
                         <div class="archive-post-datetime"><?php print $datetime; ?></div>
                         <div class="archive-post-summary"><?php the_excerpt(); ?></div>
                       </td>
                     </tr>
                     <?php
                   }
                 ?>
               </table>
             </div>
             <?php
 
             next_posts_link( 'Next Page »', $query->max_num_pages );
         }
 
         // Restore original Post Data
         wp_reset_postdata();
         ?>
</div>

<?php get_footer(); ?>
