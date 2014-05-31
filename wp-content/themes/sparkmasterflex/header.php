<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage sparkmasterflex
 * @since sparkmasterflex 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section>
		<div class="left-col double-border-right">
			<div class="pad-horizontal-20">
				<h1 class='sparkmasterflex-logo'>
					<a href="/"><?php bloginfo( 'name' ); ?></a>
				</h1>
			</div>
			<?php if(is_home()) { ?>
				<h3 class='tag-line double-border-top pad-horizontal-20'><?php bloginfo( 'description' ); ?></h3>
				<ul class="per-75 centered horizontal-800">
					<li><a href="http://ifkeithraymond.com" rel="external">ifkeithraymond.com</a></li>
					<li><a href="http://twitter.com/Sparkmasterflex" rel="external">@Sparkmasterflex</a></li>
					<li><a href="http://github.com/Sparkmasterflex" rel="external">github.com/Sparkmasterflex</a></li>
				</ul>
			<?php } else { ?>
				<div class="double-border-top pad-horizontal-20">
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					<?php endif; ?>
				</div>
			<?php } ?>
		</div>

		<div id="content" class='right-col'>
			<nav class='main double-border-bottom'>
				<ul class="cf">
					<li><a href="/">home</a></li>
					<li><a href="/about">about</a></li>
					<li><a href="/sandbox">sandbox</a></li>
					<li><a href="http://ifkeith.com">ifkeith.com</a></li>
				</ul>
			</nav>
			<div class="pad-20">
