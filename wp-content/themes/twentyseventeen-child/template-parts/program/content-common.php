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

$contentObject=get_field('page_content_template')[0];
?>
<div class="oag">
					<div class="fadeInUp animate-it">
						
						<h3><?php echo  $contentObject['title'] ?></h3>
						<?php echo  $contentObject['description'] ?>

						<hr>
					</div>
					<div class="each-container fadeInUp animate-it">
						<?php if ($contentObject['content']): ?>
							<?php foreach ($contentObject['content'] as $key => $value): ?>

								<div class="each">
									<h3><?php echo  $value['single_repeater_title'] ?></h3>
									<?php echo  $value['single_repeater_content'] ?>
								</div>
								
							<?php endforeach ?>
						<?php endif ?>
						<!-- <div class="each">
							<h3>Vendor Analyst</h3>
							<p>Fashion retailers can only sustain their competitive advantage when they are able to extract the highest quality materials at the lowest possible costs. Vendor analysts for high fashion brands use their analysis skills and business expertise to choose the best suppliers for their products.</p>
						</div>
						<div class="each">
							<h3>E-Commerce Entrepreneur</h3>
							<p>With the right wealth of experience and know-how, you can launch your own fashion business online. Self-made entrepreneurs are dominating the fashion industry, and it seems that with the success of online start-ups like Rent the Runway, e-tailing is here to stay.</p>
						</div>
						<div class="each">
							<h3>Merchant Acquisition Manager</h3>
							<p>With the right wealth of experience and know-how, you can launch your own fashion business online. Self-made entrepreneurs are dominating the fashion industry, and it seems that with the success of online start-ups like Rent the Runway, e-tailing is here to stay.</p>
						</div> -->
					</div>
				</div>