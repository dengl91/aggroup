<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alphagreen
 */

get_header(); ?>

	<!-- intro page -->

	<section>
		<div class="container">
			<h3>Present your service</h3>
			<h1>Make WordPress project<br>fast and easily.</h1>
			<a href="/wp-admin" class="get-started" target="_blank">Get started</a>
		</div>
	</section>

	<style>
		body {
			background: #E3EEF8;
		}
		header {
			height: 80px;
		}
		section .container {
			height: calc(100vh - 120px);
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
		h1 {
			font-size: 80px;
			font-weight: 600;
			text-align: center;
			letter-spacing: -0.01em;
			margin: 0 0 40px 0;
		}
		h3 {
			color: #4d4d4d;
		}
		.get-started {
			font-size: 18px;
			color: #fff;
			line-height: 58px;
			background: #008379;
			border-radius: 4px;
			padding: 0 30px;
			margin: 0 0 40px 0;
			cursor: pointer;
		}
	</style>

<?php get_footer(); ?>
