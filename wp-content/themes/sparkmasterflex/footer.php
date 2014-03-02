<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage sparkmasterflex
 * @since sparkmasterflex 1.0
 */
?>
    </div><!-- / .pad-20 -->
  </div><!-- / #content -->
	<footer>
		<?php //get_sidebar( 'main' ); ?>
		<?php do_action( 'twentythirteen_credits' ); ?>
	</footer><!-- #colophon -->

	<?php wp_footer(); ?>
</body>
</html>