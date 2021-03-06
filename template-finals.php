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

	<main id="main" class="site-main col-md-12" role="main">
    
    <div class="container">
    	<div class="row">
        	<?php echo do_shortcode( '[contact-form-7 id="27" title="Finals Registration"]' ); ?>
        </div>
    </div>
    
    <?php echo do_shortcode( '[contact-form-7 id="27" title="Finals Registration"]' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php get_footer(); ?>
