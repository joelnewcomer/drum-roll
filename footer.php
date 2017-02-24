<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
		</section>
		<div id="footer-container" class="sr">
			<footer id="footer" class="row">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>

				<div class="large-6 medium-6 columns copyright small-text-center">
					<?php if(get_field('locations', 'option')): ?>
						<div class="address">
							<?php while(has_sub_field('locations', 'option')): ?>
								<?php if( get_sub_field('title') ): ?>
									<span class="title"><?php echo get_sub_field('title');?></span>
								<?php endif; ?>
								<p>
								<?php // function drum_smart_address($address_array) array generated by ACF address field
								echo drum_smart_address(get_sub_field('address')); ?><br />
								<?php // function drum_smart_phone($phone, $phone_text, $phone_prefix)
								echo drum_smart_phone(get_sub_field('phone'), get_sub_field('phone'), 'Phone: '); ?>
								</p>
								<?php // function drum_smart_directions($address_array);
								echo drum_smart_directions(get_sub_field('address')); ?>
							<?php endwhile; ?>
						</div> <!-- address -->
					<?php endif; ?>


					<p><?php _e( 'Copyright ', 'textdomain' ); ?> &copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?>.  <span class="no-break"><?php _e( 'All rights reserved.', 'textdomain' ); ?></span></p>
				</div>
				<div class="large-6 medium-6 columns drum hide-on-print text-right small-text-center">
					<?php get_template_part('template-parts/social'); ?>
					<a href="http://www.drumcreative.com" target="_blank"><?php _e( 'Web Design by: Drum Creative', 'textdomain' ); ?></a>
				</div>
			</footer>
		</div> <!-- footer-container -->

		<?php get_template_part( 'template-parts/search-modal' ); ?>

		<a class="cd-top"><?php _e( 'Top', 'textdomain' ); ?></a>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php wp_footer(); ?>

<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>