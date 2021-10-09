<?php
/**
 * header.php
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alphagreen
 * @since 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS and other */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<style>
		/* latin */
		@font-face {
			font-family: 'Lato';
			font-style: italic;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/lato/v20/S6u8w4BMUTPHjxsAXC-qNiXg7Q.woff2) format('woff2');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* latin */
		@font-face {
			font-family: 'Lato';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/lato/v20/S6uyw4BMUTPHjx4wXiWtFCc.woff2) format('woff2');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		/* latin */
		@font-face {
			font-family: 'Lato';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url(https://fonts.gstatic.com/s/lato/v20/S6u9w4BMUTPHh6UVSwiPGQ3q5d0.woff2) format('woff2');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
        $theme_path = get_stylesheet_directory_uri();
    ?>

	<header class="header">
		<div class="container">
			<a href="<?php echo get_home_url(); ?>" class="logo">
				<img src="<?php echo $theme_path; ?>/assets/img/logo.svg" width="280" height="50" alt="Alphagreen">
			</a>
			<nav class="nav">
				<?php
					wp_nav_menu([
                    	'menu_class' => 'menu-ul'
					]);
				?>
				<a href="/wp-admin" class="login" target="_blank">Log In</a>
				<a href="/wp-login.php?action=register" class="signup" target="_blank">Sign Up</a>
			</nav>
			<div class="menu-btn" data-toggle data-control='nav'>
                <div class="menu-btn-item"></div>
                <div class="menu-btn-item"></div>
                <div class="menu-btn-item"></div>
            </div>
		</div>
	</header>