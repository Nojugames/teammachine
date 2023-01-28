<?php

function teammachine_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Widget Area', 'teammachine' ),
		'id'            => 'primary-widget-area',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'teammachine' ),
		'id'            => 'footer-1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'teammachine' ),
		'id'            => 'footer-2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'teammachine' ),
		'id'            => 'footer-3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'teammachine' ),
		'id'            => 'footer-4',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Wide', 'teammachine' ),
		'id'            => 'footer-wide',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="footer-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Copyright',
		'id'            => 'copyright',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}

add_action( 'widgets_init', 'teammachine_widgets_init' );

