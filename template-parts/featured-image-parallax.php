<!-- Parallax Featured Image -->
<?php
/** If this is the blog page then get the featured image for it **/
if (is_home() && get_option('page_for_posts') ) {
	$image_url = get_the_post_thumbnail_url(get_option('page_for_posts'));
	$title = get_the_title(get_option('page_for_posts'));
} else {
	$image_url = get_the_post_thumbnail_url();
	$title = get_the_title();
}
// Default featured image
if ($image_url == null) {
	$image_url = get_template_directory_uri() . '/assets/images/default-featured.jpg';
}
?>
<div class="featured-image" data-parallax="scroll"  data-image-src="<?php echo $image_url; ?> ">
	<div class="row">
		<div class="large-12 columns text-center">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
</div>