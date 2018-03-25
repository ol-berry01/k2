<?php
/*
Template Name: Finals Registration
*/
?>
<?php
/**
 * The template for displaying a Finals Registration form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k2
 */

get_header(); ?>

	<main id="main" class="site-main col-sm-10 col-sm-offset-1" role="main" style="margin-top:100px;">
    
		<?php echo do_shortcode( '[contact-form-7 id="186" title="Finals 2018 Registration"]' ); ?>

	</main><!-- #main -->

<?php get_footer(); ?>
