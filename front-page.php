<?php
/**
 * The template for displaying the Front Page.
 *
 * The front-page.php template file is used on the site's front page
 * regardless of whether 'Settings > Reading ->Front page displays' is set to "A static page" or "Your latest posts,"
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k2
 */

get_header(); ?>

	
	
	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/section-page', 'front-page' ); ?>

	</main><!-- #main -->


<?php get_footer(); ?>
