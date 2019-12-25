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
	    
				<div class="news-row">

					
					<?php 
					$queried_object = get_queried_object();
 $slug= $queried_object->slug; 
						$args =array(
							          'orderby'          => 'date',                    
           							  'order'            => 'DESC',
							          'post_status' => 'publish',
							          'posts_per_page' => -1, 
							          'category_name' => $queried_object->slug,
							          //cat =>$queried_object->term_id
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


											$thumb   = get_post_thumbnail_id();
											$img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
											
											 if (!$image ) {

												$image=site_url().'/wp-content/themes/twentyseventeen-child/assets/placeholder/blog-small.jpg';

											} 
  																	
								?>

								<div class="col fadeInUp animate-it" >
									<article class="news-post">
										<div class="thumbnail">
											<a href="<?php echo  the_permalink();?>">
												<img src="<?php echo esc_url( $image ); ?>" alt=""></a>
										</div>
										<div class="content">
											<span class="date"><?php echo  get_the_date('d F Y')?></span>
											<h3> <?php  echo get_the_title(); ?></h3>
											<?php the_excerpt() ?>
											<a href="<?php echo  the_permalink();?>" class="arrow-btn">Read More</a>
										</div>
									</article>
								</div>
								
							<?php 
							 $i++;
							}		
							?>
							
							<?php
							wp_reset_postdata();
						}


					 ?>
					<!-- <div class="col fadeInUp animate-it" data-delay="200">
						<a href="#." class="arrow-btn">VIEW MORE <br>NEWS & PRESS</a>
					</div>  -->
				</div>
			</div>
		</div>
