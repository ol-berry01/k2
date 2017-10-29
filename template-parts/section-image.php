<?php
$k2_enable_section = get_theme_mod( 'k2_welcome_enable', true );
if ( $k2_enable_section || is_customize_preview() ) :
?>
<div id="image-section" class="image-section wow fadeInUp" style="text-align:center;" <?php if( false == $k2_enable_section ): echo 'style="display: none;"'; endif ?>>
	<?php
	$featured_image = wp_get_attachment_image_src( absint( get_theme_mod( 'k2_image_image' ) ), 'full' );
	$featured_image = $featured_image[0];
	if ( empty( $featured_image ) ) {
		$featured_image = get_template_directory_uri() . '/images/nuco-1.jpg';
	}
	?>
    <div class="image-wrap" style="background-image: url(<?php echo $featured_image; ?>);"></div>
    <div class="image-text">
    	
    	<?php /* translators: Lorem ipsum text, It is not strictly necessary to translate. */ ?>
        <h2 class="lead image-text-title wow fadeInUp">Sponsors of <strong>KINGS</strong> since 2011</h2>
        <p class="wow fadeInUp" data-wow-delay="300ms"><?php echo nl2br( $image_text ); ?></p>
        <?php $k2_image_link_title = get_theme_mod( 'k2_image_link_title', esc_html__( 'Learn More', 'k2' ) ); ?>
        <?php if ( !empty( $k2_image_link_title ) || is_customize_preview() ) { ?>
        <a href="http://nucotravel.com" class="btn-ql alternative-white wow fadeInUp" data-wow-delay="700ms" target="_blank">More About NUCO</a>
        <?php } ?>
    </div>

</div><!-- image-section -->
<?php endif ?>