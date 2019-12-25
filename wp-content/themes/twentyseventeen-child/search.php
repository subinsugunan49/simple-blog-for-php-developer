<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 


?>
        
        <section class="subpage-banner small">
        	<div class="container">
            	<h1 class="page-title">
            		<strong><?php printf( __( get_field('search_results_for',option).' %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></strong>
            	</h1>
            </div>
        </section> 
		
        
        <div class="subpage clearfix">
        	<
            <div class="container">
              
                
                
				 <?php
                    if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
            
                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/post/content', 'excerpt' );
            
                        endwhile; // End of the loop.
            
                        the_posts_pagination( array(
                            'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
                            'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
                        ) );
            
                    else : ?>
            
                        <p><?php _e(get_field('search-nothing_matched',option), 'twentyseventeen' ); ?></p>
                        <?php
                           // get_search_form();
            
                    endif;
                    ?>
        
      
    


          
<?php


 get_footer();