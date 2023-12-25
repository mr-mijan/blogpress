<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function blogpress_widget_register(){

	// Footer Sidebar 01
	register_sidebar( array(
        'name' => esc_html__('Footer-01', 'blogpress'),
        'id'   => 'footer_1',
		'description'    => esc_html__( 'Add widgets here.', 'blogpress' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget-title">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );


	// Footer Sidebar 02
	register_sidebar( array(
		'name' => esc_html__('Footer-02', 'blogpress'),
		'id'   => 'footer_2',
		'description'    => esc_html__( 'Add widgets here.', 'blogpress' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget-title">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 03
	register_sidebar( array(
		'name' => esc_html__('Footer-03', 'blogpress'),
		'id'   => 'footer_3',
		'description'    => esc_html__( 'Add widgets here.', 'blogpress' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget-title">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 04
	register_sidebar( array(
		'name' => esc_html__('Footer-04', 'blogpress'),
		'id'   => 'footer_4',
		'description'    => esc_html__( 'Add widgets here.', 'blogpress' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget-title">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );


	// Blog Sidebar
    register_sidebar( array(
        'name' => esc_html__('Blog Sidebar', 'blogpress'),
        'id'   => 'sidebar_1',
		'description'    => esc_html__( 'Add widgets here.', 'blogpress' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget-title">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

}
add_action( 'widgets_init', 'blogpress_widget_register' );