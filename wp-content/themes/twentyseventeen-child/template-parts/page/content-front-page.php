<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>





<div class="container">

	<div class="content">
		<div class="media-sec">
			<div class="heading animate-it fadeInUp">
				<h2><?php echo  @get_field('media_center-heading');?></h2>
				
			</div>
			<div class="row animate-it fadeInUp">



					<?php 
						$args =array(
							          'orderby'          => 'date',                    
           							  'order'            => 'DESC',
							          'post_status' => 'publish',
							          'posts_per_page' => 5,							          
							          'category_name' => 'news',						         
									);
						$new_query = new WP_Query( $args );
						// The Loop
						if ( $new_query->have_posts() ) {

						   $i=1;
							while ( $new_query->have_posts() ) {
								$new_query->the_post();	
								if( $i == 1)
								$data='';
								else if($i % 2 == 0)
								$data='data-delay="100"';
								else if($i % 3 == 0)
								$data='data-delay="100"';

								if($i==2)
								{
									?>
									<div class="col-8">
									<a href="<?php echo the_permalink();?>">
										<article class="media-post">
											<div class="left">
												<h3><?php echo wp_trim_words(get_the_title(),50, '...') ?></h3>
												<span class="know-more">Know More</span>
											</div>

											<?php
											$thumb   = get_post_thumbnail_id();
										    $img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL?>
											

											<?php 
													$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID(),"size" ) );
												 ?>
												
												<img src="<?php echo  $thumbnail[0]; ?>" alt=""></a>
											</div>
										</article>
									</a>
								</div>
									<?php
								}	
								else
								{						
								?>

								<div class="col-4">
									<a href="<?php echo  the_permalink();?>">
										<article class="media-post">
											<h3><?php echo wp_trim_words(get_the_title(),50, '...') ?></h3>
											<span class="know-more">Know More</span>
										</article>
									</a>
								</div>
	
							<?php
							} 
							 $i++;
							}		
							?>
							
							<?php
							wp_reset_postdata();
						}


					 ?>

				
				<div class="col-4">
					<a href="<?php echo site_url(); ?>/category/news/" class=""><?php echo @get_field('view_all') ?></a>
				</div>
			</div>
			
		</div>
	</div>
	