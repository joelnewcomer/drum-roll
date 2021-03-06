<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="slider-container sr">
	<ul class="bxslider">
		<?php if( have_rows('slides') ):
	    	while ( have_rows('slides') ) : the_row(); ?>
	        	<li>
	           	<a href="<?php echo get_sub_field('link_to'); ?>">
				<?php
				// This code uses WP Thumb and Picturefill to dynamically size and load a photo uploaded and cropped by Advanced Custom Fields for multiple devices.
				$image_id = get_sub_field('slide');
				$small = array("width" => 640,"height" => 175);
				$medium = array("width" => 1025,"height" => 280);
				$large = array("width" => 1100,"height" => 300);
				echo drum_image($image_id,$small,$medium,$large);
				?>
	           	</a>
			   	</li>
			<?php endwhile;
	   endif; ?>
	</ul> 
</header> <!-- slider-container -->

<?php do_action( 'foundationpress_before_content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content row">
			<div class="large-12 columns">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer(); ?>

<script>
jQuery(document).ready(function(){
	jQuery('.bxslider').bxSlider({
		auto: true,
		pager: true,
		controls: true,
		mode: 'fade',
		speed: 1000,
		pause: 7000
	});
});
</script>