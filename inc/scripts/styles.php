<?php

/**
 * Enqueues front-end CSS for color scheme.
 *
 * @see wp_add_inline_style()
 */
function k2_custom_css() {
	$heroColor = get_theme_mod( 'k2_hero_color', '#c3f216' );
	$text_color = get_theme_mod( 'k2_text_color', '#999999' );
	$link_color = get_theme_mod( 'k2_link_color', '#c3f216' );

	$colors = array(
		'heroColor'      => $heroColor,
		'text_color'     => $text_color,
		'link_color'     => $link_color,
	);

	$custom_css = k2_get_custom_css( $colors );

	wp_add_inline_style( 'k2-pro-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'k2_custom_css' );



/**
 * Returns CSS for the color schemes.
 *
 * @param array $colors colors.
 * @return string CSS.
 */
function k2_get_custom_css( $colors ) {

	//Default colors
	$colors = wp_parse_args( $colors, array(
		'heroColor'            => '',
		'text_color'            => '',
		'link_color'            => '',
	) );

	$css = <<<CSS


CSS;

	return $css;
}