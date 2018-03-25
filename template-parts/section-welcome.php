<?php
$k2_enable_section = get_theme_mod( 'k2_welcome_enable', true );
if ( $k2_enable_section || is_customize_preview() ) :
?>
<div id="welcome-section" class="welcome-section" <?php if( false == $k2_enable_section ): echo 'style="display: none;"'; endif ?>>
    <?php
    $welcome_image = wp_get_attachment_image_src( absint( get_theme_mod( 'k2_welcome_image' ) ), 'full' );
    $welcome_image = $welcome_image[0];
    if ( empty( $welcome_image ) ) {
        $welcome_image = get_template_directory_uri() . '/images/peaks.jpg';
    }
    ?>
    <img src="<?php echo esc_url( $welcome_image ); ?>" alt="<?php echo esc_html( get_theme_mod( 'k2_welcome_title', __( 'Be the one to stand out in the crowd', 'k2' ) ) ); ?>">
    <div class="welcome-intro">
        <h2 class="intro-line"><?php echo esc_html( get_theme_mod( 'k2_welcome_title', __( 'Be the one to stand out in the crowd', 'k2' ) ) ); ?></h2>
        <?php $k2_welcome_link_title = get_theme_mod( 'k2_welcome_link_title', esc_html__( 'Learn More', 'k2' ) ); ?>
        <?php if ( !empty( $k2_welcome_link_title ) || is_customize_preview() ) { ?>
        <a href="<?php echo esc_url( get_theme_mod( 'k2_welcome_link_url', '#' ) ); ?>" class="btn-ql"><?php echo esc_html( $k2_welcome_link_title ); ?></a>
        <?php } ?>
    </div><!-- welcome-intro -->
        
</div><!-- welcome-section -->
<?php endif ?>