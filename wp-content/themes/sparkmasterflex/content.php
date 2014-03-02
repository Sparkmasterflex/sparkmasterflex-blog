<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage sparkmasterflex
 * @since sparkmasterflex 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
			<h2><?php the_title(); ?></h2>
		<?php else : ?>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php endif; // is_single() ?>


		<time class="entry-date" datetime='<?php the_time('Y-m-d'); ?>'><?php the_time('m/d'); ?></time>
		<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
	</header><!-- .entry-header -->

	<?php if(is_single()) : // Only display Excerpts for Search ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div><!-- .entry-content -->
	<?php else : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->