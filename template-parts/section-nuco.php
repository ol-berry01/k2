<div id="nuco-section" class="image-section wow fadeInUp" <?php  
	$featured_image = $featured_image[0];
	if ( empty( $featured_image ) ) {
		$featured_image = get_template_directory_uri() . '/images/nuco-.jpg';
	}
	?>
    <div class="nuco-wrap" style="background-image: url(<?php echo $featured_image; ?>);"></div>
    <div class="nuco-text">
    	<?php /* translators: Lorem ipsum text, It is not strictly necessary to translate. */ ?>
        <h3 class="nuco-text-title wow fadeInUp"><?php  echo esc_html( get_theme_mod( 'k2_image_title', __( 'Donec id elit non mi porta gravida at eget metus', 'k2' ) ) ); ?></h3>
        <?php
        $wp_kses_args = array(
		    'a' => array(
		        'href' => array(),
		        'title' => array()
		    ),
		    'br' => array(),
		    'em' => array(),
		    'strong' => array(),
		    'span' => array(),
		);
		/* translators: Lorem ipsum text, It is not strictly necessary to translate. */
		$image_text = wp_kses( get_theme_mod( 'k2_image_text', __( 'Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'k2' ) ), $wp_kses_args );
        ?>
        <p class="wow fadeInUp" data-wow-delay="300ms"><?php echo nl2br( $image_text ); ?></p>
        <?php $k2_image_link_title = get_theme_mod( 'k2_image_link_title', esc_html__( 'Learn More', 'k2' ) ); ?>
        <?php if ( !empty( $k2_image_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'k2_image_link_url', '#' ) ); ?>" class="btn-ql alternative-white wow fadeInUp" data-wow-delay="700ms"><?php echo esc_html( $k2_image_link_title ); ?></a>
        <?php } ?>
    </div>

</div><!-- End:nuco-section -->