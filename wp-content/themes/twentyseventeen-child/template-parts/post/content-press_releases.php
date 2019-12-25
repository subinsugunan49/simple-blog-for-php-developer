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
							          'post__not_in'     => array($featued), 
							          'category_name' => 'press-releases',
									);
						$project_query = new WP_Query( $args );
						// The Loop
						if ( $project_query->have_posts() ) {?>
							
						   <?php
						   $i=0;
							while ( $project_query->have_posts() ) {
								$project_query->the_post();	
								if( $i == 0 || $i%3 == 0)
								$data='';
								else if($i % 3 == 1)
								$data='data-delay="100"';
								else if($i % 3 == 2)
								$data='data-delay="200"';							
								?>

								<div class="col newslist fadeInUp animate-it" <?php echo $data ?>>
									<article class="news-post">
										<div class="thumbnail">
											<a href="<?php echo  the_permalink();?>">
											<?php
											$thumb   = get_post_thumbnail_id();
											$img_url = wp_get_attachment_image_src($thumb,'thumbnail'); // Get img URL
											?>
  											<img src="<?php echo esc_url( $img_url ); ?>" alt="Your Image alt" />

										    </a>
										</div>
										<div class="content">
											<span class="date"><?php echo  get_the_date('d F Y')?></span>
											<h3>
												<a href="<?php echo  the_permalink();?>">

													<?php if (get_field('text_on_page_link')): ?>
														<?php echo wp_trim_words(get_field('text_on_page_link'),50, '...') ?>
													<?php 
														else :
															echo wp_trim_words(get_the_title(),30, '...');

												  endif ?></a>

											</h3>
											<?php 
											the_excerpt() ?>
											<?php the_content(); ?>
											
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
				</div>
			</div>
		</div>
 
 