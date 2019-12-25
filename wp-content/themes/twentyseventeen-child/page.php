<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

	<?php
		
		get_template_part( 'template-parts/page/content', 'banner' );

	?>

	<div class="container">
		<div class="subpage clearfix">
			<div class="content">
				<?php the_content(); ?>
			</div>
		</div>
	
		
<?php

endwhile;

 get_footer();