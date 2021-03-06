<?php
/**
* The template for displaying pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that
* other "pages" on your WordPress site will use a different template.
*
* @package FoundationPress
* @since FoundationPress 1.0.0
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image-parallax' ); ?>

<div id="page" role="main">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(array('main-content')) ?> id="post-<?php the_ID(); ?>">
			<div class="row">
			   	<header class="large-12 columns">
			   	    <h1 class="entry-title"><?php the_title(); ?></h1>
			   	</header>
			</div> <!-- row -->
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php get_template_part('template-parts/content', 'columns'); ?>
			</div> <!-- entry-content -->
		</article>
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div> <!-- #page -->

<?php get_footer();