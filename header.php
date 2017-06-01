<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coffeeplace
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coffeeplace' ); ?></a>

	
	
	
	
	<header id="masthead" class="side site-header" role="banner">
	<div class="h-i">
		<div class="wrp">
			<div id="logo">
			<?php coffee_the_custom_logo(); ?>
			</div>
			<div class="m-s">
				<div class="hsm"></div>
				<div class="m-si">
					<nav class="menu-menu-container">
						<ul id="menu-menu" class="menu">
							<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
						</ul>
					</nav>  
				</div>
			</div>
		</div>
	</div>
</header>
	

	<div id="content" class="site-content">