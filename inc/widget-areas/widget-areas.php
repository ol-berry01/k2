<?php
	
	/*
	Sidebar
	===================================
	*/

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'k2' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	
	/*
	Front Page Sections
	===================================
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Front Page - Services Section', 'k2' ),
		'id'            => 'services-section',
		'description'   => esc_html__( 'This is the Services Section in the Front Page. Here Add the "k2 - Service widget"', 'k2' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Front Page - Phone Section', 'k2' ),
		'id'            => 'phone-section',
		'description'   => esc_html__( 'This is the Phone Section in the Front Page. Here Add the "k2 - Service widget"', 'k2' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Front Page - Clients Section', 'k2' ),
		'id'            => 'clients-section',
		'description'   => esc_html__( 'This is the Clients Section in the Front Page. Here Add the "k2 - Client widget"', 'k2' ),
		'before_widget' => '<div class="widget %s clients-logo wow flipInX">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Front Page - Pricing Section', 'k2' ),
		'id'            => 'pricing-section',
		'description'   => esc_html__( 'This is the Pricing Section in the Front Page. Here Add the "k2 - Pricing widget"', 'k2' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );


?>