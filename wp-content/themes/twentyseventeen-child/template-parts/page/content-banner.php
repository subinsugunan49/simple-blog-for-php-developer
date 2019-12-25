<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
 $term=get_queried_object();
 

?>
<section class="subpage-banner" style="background-image: url(<?php echo  get_field('banner_image',$term)?>);">
		<div class="container">
			<h1 class="page-title"><?php echo  get_field('banner_heading',$term)?></h1>
			<?php if (get_field('apply_now__link','option')): ?>

				<a href="<?php echo get_field('apply_now__link','option') ?>" class="btn" target="_blank"><?php echo get_field('apply_now_label','option') ?></a>
				
			<?php endif ?>
			
		</div>
</section>