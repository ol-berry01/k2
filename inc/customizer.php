<?php
/**
 * k2 Theme Customizer.
 *
 * @package k2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function k2_customize_register( $wp_customize ) {

	

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	/*
	Logo
	------------------------------ */
	$wp_customize->add_section( 'k2_logo_section', array(
		'title' => esc_attr__( 'Logo', 'k2' ),
		'priority' => 80,
	) );
	$wp_customize->add_setting( 'k2_probtn_logo', array( 'default' => '', 'sanitize_callback' => 'k2_sanitize_text', ) );
	$wp_customize->add_control( new k2_Display_Text_Control( $wp_customize, 'k2_probtn_logo', array(
		'section' => 'k2_logo_section', // Required, core or custom.
		'label' => sprintf( __( 'Check out the <a href="%s" target="_blank">PRO version</a> to use an image logo.', 'k2' ), 'https://www.quemalabs.com/theme/k2-pro/' ),
	) ) );


	/*
    Colors
    ===================================================== */
    	$wp_customize->add_setting( 'k2_probtn_colors', array( 'default' => '', 'sanitize_callback' => 'k2_sanitize_text', ) );
		$wp_customize->add_control( new k2_Display_Text_Control( $wp_customize, 'k2_probtn_colors', array(
			'section' => 'colors', // Required, core or custom.
			'label' => sprintf( __( 'Check out the <a href="%s" target="_blank">PRO version</a> to change Text, Links and Featured colors.', 'k2' ), 'https://www.quemalabs.com/theme/k2-pro/' ),
		) ) );

}
add_action( 'customize_register', 'k2_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function k2_customize_preview_js() {
	
	wp_register_script( 'k2_customizer_preview', get_template_directory_uri() . '/js/customizer-preview.js', array( 'customize-preview' ), '20151024', true );
	wp_localize_script( 'k2_customizer_preview', 'wp_customizer', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'theme_url' => get_template_directory_uri(),
		'site_name' => get_bloginfo( 'name' )
	));
	wp_enqueue_script( 'k2_customizer_preview' );

}
add_action( 'customize_preview_init', 'k2_customize_preview_js' );


/**
 * Load scripts on the Customizer not the Previewer (iframe)
 */
function k2_customize_js() {

	wp_enqueue_script( 'k2_customizer_top_buttons', get_template_directory_uri() . '/js/theme-customizer-top-buttons.js', array( 'jquery' ), true  );
	wp_localize_script( 'k2_customizer_top_buttons', 'topbtns', array(
			'pro' => esc_html__( 'View PRO version', 'k2' ),
            'documentation' => esc_html__( 'Documentation', 'k2' )
	) );
	
	wp_enqueue_script( 'k2_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-controls' ), '20151024', true );

}
add_action( 'customize_controls_enqueue_scripts', 'k2_customize_js' );










/*
Sanitize Callbacks
*/

/**
 * Sanitize for post's categories
 */
function k2_sanitize_categories( $value ) {
    if ( ! array_key_exists( $value, k2_categories_ar() ) )
        $value = '';
    return $value;
}

/**
 * Sanitize return an non-negative Integer
 */
function k2_sanitize_integer( $value ) {
    return absint( $value );
}

/**
 * Sanitize Any
 */
function k2_sanitize_any( $input ) {
    return $input;
}

/**
 * Sanitize Text
 */
function k2_sanitize_text( $str ) {
	return sanitize_text_field( $str );
} 

/**
 * Sanitize Textarea
 */
function k2_sanitize_textarea( $text ) {
	return esc_textarea( $text );
}

/**
 * Sanitize URL
 */
function k2_sanitize_url( $url ) {
	return esc_url( $url );
}

/**
 * Sanitize Boolean
 */
function k2_sanitize_bool( $string ) {
	return (bool)$string;
} 

/**
 * Sanitize Text with html
 */
function k2_sanitize_text_html( $str ) {
	$args = array(
			    'a' => array(
			        'href' => array(),
			        'title' => array()
			    ),
			    'br' => array(),
			    'em' => array(),
			    'strong' => array(),
			    'span' => array(),
			);
	return wp_kses( $str, $args );
}

/**
 * Sanitize GPS Latitude and Longitud
 * http://stackoverflow.com/a/22007205
 */
function k2_sanitize_lat_long( $coords ) {
	if ( preg_match( '/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?),[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/', $coords ) ) {
	    return $coords;
	} else {
	    return 'error';
	}
} 





/**
 * Display Text Control
 * Custom Control to display text
 */
if ( class_exists( 'WP_Customize_Control' ) ) {
	class k2_Display_Text_Control extends WP_Customize_Control {
		/**
		* Render the control's content.
		*/
		public function render_content() {

	        $wp_kses_args = array(
			    'a' => array(
			        'href' => array(),
			        'title' => array(),
			        'data-section' => array(),
			    ),
			    'br' => array(),
			    'em' => array(),
			    'strong' => array(),
			    'span' => array(),
			);
			$label = wp_kses( $this->label, $wp_kses_args );
	        ?>
			<p><?php echo $label; ?></p>		
		<?php
		}
	}
}



/*
* AJAX call to retreive an image URI by its ID
*/
add_action( 'wp_ajax_nopriv_k2_get_image_src', 'k2_get_image_src' );
add_action( 'wp_ajax_k2_get_image_src', 'k2_get_image_src' );

function k2_get_image_src() {
	$image_id = $_POST['image_id'];
	$image = wp_get_attachment_image_src( absint( $image_id ), 'full' );
	$image = $image[0];
	echo $image;
	die();
}
