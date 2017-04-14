<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MelChoyce.Design
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'choycedesign' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	<?php if ( is_home() ): ?>
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<div class="site-bio">
			<p>I’m a Boston based Product Designer working at Automattic. I’m currently focusing on customization, new user experience, and design hiring.</p>
			<p>I’m also a guest committer for WordPress, where I contribute design for core and community projects. I co-organize the Boston WordPress meetups and WordCamp Boston.</p>
			<p>I love big typography, cold brew coffee, and craft beer.</p>
		</div>
	<?php else: ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php endif; ?>
	</header>
	<div id="content" class="site-content">
