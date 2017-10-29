<?php
$bck_color = get_theme_mod( 'k2_tagline_bck_color', '#222e3c' );
?>
<?php
$k2_enable_section = get_theme_mod( 'k2_tagline_enable', true );
if ( $k2_enable_section || is_customize_preview() ) :
?>
<div id="tagline-section" class="tagline-section" style="background-color: <?php echo esc_attr( $bck_color ); ?>;" <?php if( false == $k2_enable_section ): echo 'style="display: none;"'; endif ?>>
    <h2 class="tagline" style="color:#c3f216"><?php echo esc_html( get_theme_mod( 'k2_tagline_text', __( 'New Website Officially Launching Soon!', 'k2' ) ) ); ?></h2>
    <span style="color:#c3f216"><?php echo esc_html( get_theme_mod( 'k2_tagline_sub_text', __( "We've been working hard on the new site and it's new features!", 'k2' ) ) ); ?></span>
</div><!-- tagline-section -->
<?php endif ?>