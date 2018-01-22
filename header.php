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
	<title><?php wp_title( '|', true, 'right' ); ?>Cello Discovery</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<div class="navigation">
		<div class="nav-container">
			<div class="brand">
				<a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"></a>
			</div>

			<nav>
				<div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
				<?php wp_nav_menu(['theme_location' => 'header-primary', 'menu_class' => 'menu-header-primary']); ?>
			</nav>
		</div>
	</div>

	<div id="main" class="site-main">
