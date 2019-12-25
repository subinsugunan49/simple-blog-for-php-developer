<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<div class="subpage clearfix">
			<div class="content">
	    	
					<?php 
						$args =array(
							          'orderby'          => 'date',                    
           							  'order'            => 'DESC',
							          'post_status' => 'publish',
							          'posts_per_page' => -1,
							          //'post__not_in'     => array($featued), 
							          'category_name' => 'blog',
							         

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
								$data='animate-on-load';								
								else 
								$data='';							
								?>
								<article class="news-post large fadeInUp <?php echo $data ?>">
									<div class="thumbnail">
										<a href="<?php echo  the_permalink();?>">
											<?php
											$thumb   = get_post_thumbnail_id();
											$img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
											$image   = aq_resize( $img_url, 583, 378, true ); // Resize & crop img ?>

											<?php if (!$image ) {

												$image=site_url().'/wp-content/themes/twentyseventeen-child/assets/placeholder/blog-large.jpg';

											} ?>
  											<img src="<?php echo esc_url( $image ); ?>" alt="Your Image alt" />
									</div>
									<div class="content">
										<h3><a href="<?php echo  the_permalink();?>">
											<?php the_title(); ?></a></h3>
										<?php the_excerpt() ?>
										<a href="<?php echo  the_permalink();?>" class="arrow-btn">READ THE FULL STORY</a>
									</div>
								</article>
								
								
							<?php 
							 $i++;
							}		
							?>
							
							<?php
							wp_reset_postdata();
						}


					 ?>
					
			</div>
		</div>
