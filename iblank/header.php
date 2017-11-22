<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage iblank
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="description" content="iblank">
	<meta name="keywords" content="iblank cars wax styles">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<section class="logo-title-holder">

		</section>
		<section class="nav-menu-holder">
			<?php
					wp_nav_menu(
							array(
								'theme_location' => 'main',
								'menu_id'        => 'top-menu',
							)
					);
			?>
		</section>
	</header>
