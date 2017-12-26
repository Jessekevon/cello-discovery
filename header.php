<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<!-- <nav class="main-naviation"> -->
		<!-- <a href="<//?php echo get_home_url(); ?>" class="logo"></a> -->
		<!-- <div class="nav-controls">
			<span class="line line-1"></span>
			<span class="line line-2"></span>
			<span class="line line-3"></span>
		</div> -->

	<!-- <//?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-items' ) ); ?> -->
	<!-- </nav> -->

	<div id="main" class="site-main">
