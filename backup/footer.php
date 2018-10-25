<!-- =============================================================================
	PAGE STRUCTURE:= start footer
=============================================================================- -->
	<?php 
		$bgcolor 			= get_field('footer_bg_color', 'option');
		$pattern			= get_field('footer_pattern', 'option');
		$patternColor		= get_field('footer_bg_pattern', 'option');
	?>

		<footer class="<?php if($pattern){echo $patternColor; } echo " ".$bgcolor; ?>">

			<div class="footer-column"><!-- start footer-column -->

				<h5><?php the_field('title_above_contact_information', 'option'); ?></h5>

				<div class="footer-column-content">

					<?php
					// vars	
					$footerContent = get_field('footer_content', 'option');

					// check selected content
					if($footerContent && in_array('contact_info', $footerContent) ): ?>

					<address>

						<div class="address-content display-table">

						<?php while(the_flexible_field("contact_information", "option")): 
							if(get_row_layout() == "street"):
				// layout: Street ?>
								<div class="table-row">
									<div class="table-cell table-cell-h">Street</div>
									<div class="table-cell"><?php the_sub_field('street', 'option'); ?></div>
								</div>

							<?php elseif(get_row_layout() == "city"): 
				// layout: City ?>
								<div class="table-row">
									<div class="table-cell table-cell-h">City</div>
									<div class="table-cell"><?php the_sub_field('city', 'option'); ?></div>
								</div>

							<?php elseif(get_row_layout() == "state"):
				// layout: State ?>
								<div class="table-row">
									<div class="table-cell table-cell-h">State</div>
									<div class="table-cell"><?php the_sub_field('state', 'option'); ?></div>
								</div>

							<?php elseif(get_row_layout() == "phone"):
				// layout: Phone ?>
								<div class="table-row">
									<div class="table-cell table-cell-h">Phone</div>
									<div class="table-cell">
										<a href="tel:<?php the_sub_field('only_numbers', 'option'); ?>">
											<?php the_sub_field('phone', 'option'); ?>
										</a>
									</div>
								</div>

							<?php elseif(get_row_layout() == "mobile"):
				// layout: Mobile ?>
								<div class="table-row">
									<div class="table-cell table-cell-h">Mobile</div>
									<div class="table-cell">
										<a href="tel:<?php the_sub_field('only_numbers', 'option'); ?>">
											<?php the_sub_field('mobile', 'option'); ?>
										</a>
									</div>
								</div>

							<?php elseif(get_row_layout() == "email"):
				// layout: Email ?>
								<div class="table-row">
									<div class="table-cell table-cell-h">Email</div>
									<div class="table-cell">
										<a href="mailto:<?php the_sub_field('email', 'option'); ?>">
											<?php the_sub_field('email', 'option'); ?>
										</a>
									</div>
								</div>

							<?php endif; ?>
						<?php endwhile; ?>

						</div><!-- end: address-content -->

					</address>

				<?php endif; // Check selected content ?>

				</div><!-- end: footer-column-content -->

			</div><!-- end footer-column -->


			<div class="footer-column"><!-- start footer-column -->

			<?php if($footerContent && in_array('social_media', $footerContent) ): ?>
				<div class="footerSocial"><!-- start footerSocialMedia -->

					<div class="footerSocialIcons"><!-- start footerSocialIcons -->
						<h5><?php the_field('social_media_title', 'option'); ?></h5>
						
						<?php $socialMedias = get_field('check_social_medias', 'option'); ?>

						<ul>
							<?php foreach( $socialMedias as $socialMedia ): ?>
							<li>
								<?php if ($socialMedia == 'facebook') : ?>
									<a href="<?php the_sub_field('facebook_link', 'option'); ?>" title="Visit our Facebook" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Facebook_icon.png">
									</a>

								<?php elseif ($socialMedia == 'twitter') : ?>
									<a href="<?php the_sub_field('twitter_link', 'option'); ?>" title="Visit our Twitter" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Twitter_icon.png">
									</a>

								<?php elseif ($socialMedia == 'linkedin') : ?>
									<a href="<?php the_sub_field('linkedin_link', 'option'); ?>" title="Visit our LinkedIn" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Linkedin_icon.png">
									</a>

								<?php elseif ($socialMedia == 'instagram') : ?>
									<a href="<?php the_sub_field('instagram_link', 'option'); ?>" title="Visit our Instagram" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/images/Instagram_icon.png">
									</a>

								<?php endif; ?>
							</li>
							<?php endforeach; ?>
						</ul>
						<ul>
							<li><a href=""><img src="images/Instagram_icon.png" alt=""></a></li>
							<li><a href=""><img src="images/Twitter_icon.png" alt=""></a></li>
							<li><a href=""><img src="images/Facebook_icon.png" alt=""></a></li>
							<li><a href=""><img src="images/Linkedin_icon.png" alt=""></a></li>
						</ul>
					</div><!-- end footerSocialIcons -->

				</div><!-- end footerSocialMedia -->

			<?php endif; // Social Media ?>

			</div><!-- end footer-column -->


			<div class="footer-column"><!-- start footer-column -->

				<?php if($footerContent && in_array('calendar', $footerContent) ): ?>

					<div class="footer-calendar centered">
						<h5 class="heading-font"><?php the_field('title_above_calendar', 'option'); ?></h5>
						<!-- Calendar -->
						<?php include('template-parts/calendar.php'); ?>
					</div>

				<?php endif; // Calendar ?>

			</div><!-- end footer-column -->


			<div class="copy">
				<small> 2009 - <?php echo date("Y"); ?> (&copy;) <?php bloginfo( 'name' ); ?> - All rights reserved</small>
			</div>

		</footer><!-- PAGE STRUCTURE:= end footer -->

	</div><!-- END: page body -->


<!-- Inline style -->
<style>
	.stickyMenu li.logoMenu a,
	.fixedMenu li.logoMenu a {
		background: url("<?php echo $logo['url']; ?>");
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain; }
</style>
<!-- =================================================================
	PAGE STRUCTURE:  Scripts
================================================================== -->

<!-- jQuery Library
================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
<!-- Theme JS file
================================================== -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


<?php wp_footer(); ?>
</body>
</html>