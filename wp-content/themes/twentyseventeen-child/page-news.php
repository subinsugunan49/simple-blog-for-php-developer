<?php
/**
  Template Name: News

 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 

while ( have_posts() ) : the_post();

?>
	
	<H1>All Blog-Landing Page</H1>
	<div class="container">
		
				<h5>Menu-Category</h5>
			 <?php   

        $terms = get_terms( array( 
                'taxonomy' => 'category',
                'hide_empty' => false,
            ));
        $current='';
        $tabProgram = '<ul class="secondary-nav">';
                foreach ($terms as $term) {

                  if($term->slug == 'news')
                    $current_menu='current-menu-item';
                  else
                    $current_menu='';

                   $tabProgram .= '<li class="'.$current_menu.'"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                }
         $tabProgram .='</ul>';

       echo  $tabProgram;
       ?>
		
		<div class="subpage clearfix">
			<div class="content">


			  

				<div class="news-row">

					
					<?php 
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args =array(
							          'orderby'          => 'menu_order',                    
           							  'order'            => 'ASC',
							          'post_status' => 'publish',
							          'posts_per_page' => 3,
							          'post__not_in'     => array($featued),
							          'paged' => $paged
							         

							         // 'cat' => 1,
									);
						$project_query = new WP_Query( $args );

						
						// The Loop
						if ( $project_query->have_posts() ) {?>
							
						   <?php
						   $i=1;
							while ( $project_query->have_posts() ) {
								$project_query->the_post();	
								if( $i == 1)
								$data='';
								else if($i % 2 == 0)
								$data='data-delay="100"';
								else if($i % 3 == 0)
								$data='data-delay="100"';							
								?>

								<div class="col fadeInUp animate-it" <?php echo $data ?>>
									<article class="news-post">
										<div class="thumbnail">
											<a href="<?php echo  the_permalink();?>">
												<!---We can use both ways
												<img src="<?php //the_post_thumbnail_url() ?>" alt="">--->
												<?php 
													$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID(),"size" ) );
												 ?>
												
												<img src="<?php echo  $thumbnail[0]; ?>" alt=""></a>
										</div>
										<div class="content">
											<span class="date"><?php echo  get_the_date('d F Y')?></span>
											
											<?php the_content(); ?>
											<a href="<?php echo  the_permalink();?>" class="arrow-btn">Read More</a>
										</div>
									</article>
								</div>
								
							<?php 
							 $i++;
							}		
							?>
							
							<?php
							//wp_reset_postdata();
						}


					 ?>

					 <h5>Pagination-We can customize</h5>
						<div class="pagination">
    <?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $project_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
</div>
						 
					
				</div>
			</div>
		</div>
<H1>News End</H1>
<?php

endwhile;

 get_footer();