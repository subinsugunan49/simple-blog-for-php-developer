<?php
/**
  Template Name: Single News

 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 

$queried_object=get_the_category();
$slug= $queried_object[0]->slug;
while ( have_posts() ) : the_post();
?>

	
	<div class="container">
		<?php   
        $terms = get_terms( array( 
                'taxonomy' => 'category',
                 'hide_empty' => false,
            ));
        $current='';
        $tabProgram = '<ul class="secondary-nav">';
                foreach ($terms as $term) {

                  if($term->slug == $slug)
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
		<?php
		if( $slug == 'news')
		{
		?>
		<div class="page-template-page-news-single clearfix">
				<article class="news-post large">
					<div class="thumbnail fadeIn animate-on-load">
						<img src="<?php the_post_thumbnail_url() ?>" alt="">
					</div>
					<div class="content">
						<span class="date"><?php echo  strtoupper(get_the_date(' F j'))?></span>
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</article>
				<a href="<?php echo site_url() .'/category/'.$slug  ?>" class="arrow-btn">BACK TO NEWS</a>
				<br>
		</div>
			
		<?php
		}
     	else if($slug == 'blog')
     	{
     		?>

          <div class="page-template-page-blog-single clearfix">


     	 	<article class="news-post large fadeIn animate-on-load">
     	 		<?php if (get_post_thumbnail_id()):?>
     	 		<div class="thumbnail">
						<img src="<?php the_post_thumbnail_url() ?>" alt="">
					</div>
     	 			
     	 		<?php endif ?>
					
					<div class="content fadeInUp animate-it">
						<span class="date"> <?php echo  strtoupper(get_the_date(' F j'))?></span>
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
						
					</div>
				</article>
				<a href="" class="arrow-btn fadeInUp animate-it">BACK TO BLOG</a>
				
		 </div>
				<br>
				<br>

     		<?php
     	}

		else if($slug == 'press-releases')
     	{
     		?>
     		<div class="page-template-page-news-single">
				<article class="news-post large clearfix">
					<div class="thumbnail fadeIn animate-on-load">
						<img src="<?php the_post_thumbnail_url() ?>" alt="">
					</div>
					<div class="content">
						<span class="date"><?php echo  strtoupper(get_the_date(' F j'))?></span>
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</article>
				<a href="<?php echo site_url() .'/category/'.$slug  ?>" class="arrow-btn">BACK TO PRESS RELEASES</a>
				<br>
		</div>
     		<?php
     	}
     	else if( $slug == 'events')
		{
		?>
		<div class="page-template-page-news-single clearfix">
				<article class="news-post large">
					<div class="thumbnail fadeIn animate-on-load">
						<img src="<?php the_post_thumbnail_url() ?>" alt="">
					</div>
					<div class="content">
						<span class="date"><?php echo  strtoupper(get_the_date(' F j'))?></span>
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</article>
				<a href="<?php echo site_url() .'/category/'.$slug  ?>" class="arrow-btn">BACK TO EVENTS</a>
				<br>
		</div>
			
		<?php
		}

	   ?>
		</div>
		</div>

<?php

endwhile;

 get_footer();