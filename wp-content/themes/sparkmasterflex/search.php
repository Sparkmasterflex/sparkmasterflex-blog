<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage sparkmasterflex
 * @since sparkmasterflex 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></h2>

	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>

	<?php twentythirteen_paging_nav(); ?>

	<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>