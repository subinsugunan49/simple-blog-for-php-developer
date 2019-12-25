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

?>
<div class="tabs_container fadeInUp animate-it">

	<?php 
	$contentObject=get_field('page_content_template')[0];
	$i=1;
	$tabMenu='';
	$tabContent='';
	if(isset($contentObject['tab_content']) && $contentObject['tab_content'])
	foreach ($contentObject['tab_content'] as $key => $value) {

		if($i== 1)
			$active='active';
		else
			$active='';
		$tabMenu .='<li class="'.$active.'" rel="tab'.$i.'">'.$value['tab_heading'].'</li>';

		$tabContent .='
					  <h3 class="d_active tab_drawer_heading" rel="tab'.$i.'">'.$value['tab_heading'].'</h3>
					  <div id="tab'.$i.'" class="tab_content">
					  '.$value['tab_content'].'
					  </div>';

		$i++;
		# code...
	}
	 ?>
					<ul class="tabs clearfix" id="tabs1">
						<?php echo  $tabMenu;?>				 
					</ul>
					<div class="tab_container firs-active" id="tab_container1">
						<?php echo  $tabContent;?>
					  
					</div>
				</div>
				<div class="vision-and-mission clearfix fadeInUp animate-it">
					<div class="each">
						
						<?php if ($contentObject['vision']): ?>
							<h3>Vision</h3>
							<?php echo $contentObject['vision']  ?>
						<?php endif ?>
					</div>
					<div class="each">
						<?php if ($contentObject['mission']): ?>
							<h3>Mission</h3>
							<?php echo $contentObject['mission']  ?>
						<?php endif ?>
					</div>
				</div>