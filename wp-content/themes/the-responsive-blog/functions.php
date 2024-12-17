<?php

/**
 * [the_responsive_blog_setup code for after_setup_theme hook]
 * @return [type] [description]
 */
function the_responsive_blog_setup() {

	// Register Overlay Menu
	register_nav_menus( array(
		'top-bar-menu'	=> __( 'Top Bar Menu', 'the-responsive-blog' ),
	) );


}
add_action( 'after_setup_theme', 'the_responsive_blog_setup' );

/**
 * [the_responsive_blog_styles_scripts - add needed styles scripts]
 * @return [type] [description]
 */
function the_responsive_blog_styles_scripts() {

	$dependency = array( 'bootstrap', 'font-awesome', 'di-blog-style-default', 'di-blog-style-core' );
	if( class_exists( 'WooCommerce' ) ) {
		$dependency = array( 'bootstrap', 'font-awesome', 'di-blog-style-default', 'di-blog-style-core', 'di-blog-style-woo' ); 
	}

	/**
	 * Add the default/main css file of parent theme.
	 */
    wp_enqueue_style( 'di-blog-style-default', get_template_directory_uri() . '/style.css' );

    /**
	 * Add the main css file of the child theme after all css files of parent theme.
	 */
    wp_enqueue_style( 'the-responsive-blog',  get_stylesheet_directory_uri() . '/style.css', $dependency, wp_get_theme()->get('Version'), 'all' );
}
add_action( 'wp_enqueue_scripts', 'the_responsive_blog_styles_scripts' );

/**
 * [the_responsive_blog_customize_pr_handle description]
 * @return [type] [description]
 */
function the_responsive_blog_customize_pr_handle( $wp_customize ) {

	// For Topbar left
	$wp_customize->get_setting( 'tpbr_left_vw' )->transport   = 'refresh';
	$wp_customize->selective_refresh->add_partial( 'tpbr_left_vw', array(
		'selector'	=> '.topbar-lft-p',
	) );

	// For Topbar right
	$wp_customize->add_setting(
		'top_bar_menu_hidden_field', array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		'top_bar_menu_hidden_field', array(
			'priority' => 25,
			'type'     => 'hidden',
			'section'  => 'menu_locations',
		)
	);

	$wp_customize->get_setting( 'top_bar_menu_hidden_field' )->transport   = 'refresh';
	$wp_customize->selective_refresh->add_partial( 'top_bar_menu_hidden_field', array(
			'selector'	=> '.top-bar-menu-class-pr',
		)
	);

}
add_action( 'customize_register', 'the_responsive_blog_customize_pr_handle', 9999999 );

/**
 * [the_responsive_blog_topbar_options - description]
 * @return [type] [description]
 */
function the_responsive_blog_topbar_options(){

	Kirki::add_section( 'tpbr_options', array(
		'title'          => esc_attr__( 'Top Bar Options', 'the-responsive-blog' ),
		'panel'          => 'di_blog_options',
		'capability'     => 'edit_theme_options',
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'        => 'toggle',
		'settings'    => 'tpbr_endis',
		'label'       => esc_attr__( 'Enable/Disable Top Bar', 'the-responsive-blog' ),
		'section'     => 'tpbr_options',
		'default'     => '1',
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'        => 'select',
		'settings'    => 'tpbr_left_vw',
		'label'       => esc_html__( 'Top Bar Left Content View', 'the-responsive-blog' ),
		'section'     => 'tpbr_options',
		'default'     => '1',
		'choices'     => array(
			'1' 	=> esc_html__( 'Current Date', 'the-responsive-blog' ),
			'2' 	=> esc_html__( 'Address, phone, email', 'the-responsive-blog' ),
			'3' 	=> esc_html__( 'Disable', 'the-responsive-blog' ),
		),
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
		),
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'			=> 'text',
		'settings'		=> 'tpbr_loc',
		'label'			=> esc_attr__( 'Top Bar Address', 'the-responsive-blog' ),
		'description'	=> esc_attr__( 'Leave empty for disable', 'the-responsive-blog' ),
		'section'		=> 'tpbr_options',
		'default'		=> esc_html__( 'Xyz Street, New York, USA', 'the-responsive-blog' ),
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
			array(
				'setting'  => 'tpbr_left_vw',
				'operator' => '==',
				'value'    => 2,
			),
		)
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'			=> 'text',
		'settings'		=> 'tpbr_phn',
		'label'			=> esc_attr__( 'Top Bar Contact Number', 'the-responsive-blog' ),
		'description'	=> esc_attr__( 'Leave empty for disable', 'the-responsive-blog' ),
		'section'		=> 'tpbr_options',
		'default'		=> '0123456789',
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
			array(
				'setting'  => 'tpbr_left_vw',
				'operator' => '==',
				'value'    => 2,
			),
		)
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'			=> 'text',
		'settings'		=> 'tpbr_mail',
		'label'			=> esc_attr__( 'Top Bar Email Address', 'the-responsive-blog' ),
		'description'	=> esc_attr__( 'Leave empty for disable', 'the-responsive-blog' ),
		'section'		=> 'tpbr_options',
		'default'		=> 'info@example.com',
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
			array(
				'setting'  => 'tpbr_left_vw',
				'operator' => '==',
				'value'    => 2,
			),
		)
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'        => 'color',
		'settings'    => 'tpbr_clr',
		'label'       => esc_attr__( 'Top Bar Color', 'di-blog' ),
		'section'     => 'tpbr_options',
		'default'     => '#fff',
		'choices'     => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'	=> '.container-fluid.topbar',
				'property'	=> 'color',
			),
		),
		'transport' => 'auto',
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'        => 'color',
		'settings'    => 'tpbr_bg_clr',
		'label'       => esc_attr__( 'Top Bar Background Color', 'the-responsive-blog' ),
		'section'     => 'tpbr_options',
		'default'     => '#ae8400',
		'choices'     => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'	=> '.container-fluid.topbar',
				'property'	=> 'background-color',
			),
		),
		'transport' => 'auto',
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'        => 'color',
		'settings'    => 'tpbr_links_clr',
		'label'       => esc_attr__( 'Top Bar Links Color', 'the-responsive-blog' ),
		'section'     => 'tpbr_options',
		'default'     => '#fff',
		'choices'     => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'	=> '.container-fluid.topbar a',
				'property'	=> 'color',
			),
		),
		'transport' => 'auto',
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'        => 'color',
		'settings'    => 'tpbr_hvr_links_clr',
		'label'       => esc_attr__( 'Top Bar Hover Links Color', 'the-responsive-blog' ),
		'section'     => 'tpbr_options',
		'default'     => '#fff',
		'choices'     => array(
			'alpha' => true,
		),
		'output' => array(
			array(
				'element'	=> '.container-fluid.topbar a:hover',
				'property'	=> 'color',
			),
			array(
				'element'	=> 'ul.top-bar-menu-class li a::before',
				'property'	=> 'background-color',
			),
		),
		'transport' => 'auto',
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'        => 'custom',
		'settings'    => 'tpbr_menu_info',
		'label'       => esc_attr__( 'Top Bar Menu', 'di-blog' ),
		'section'     => 'tpbr_options',
		'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">' . esc_attr__( 'You can edit top bar menu, here: Appearance > Menus', 'the-responsive-blog' ) . '</div>',
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'di_blog_config', array(
		'type'        => 'typography',
		'settings'    => 'tpbr_typo',
		'label'       => esc_attr__( 'Top Bar Typography', 'the-responsive-blog' ),
		'section'     => 'tpbr_options',
		'default'     => array(
			'font-family'    => 'Lora',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'letter-spacing' => '1px',
			'line-height'    => '1.5',
			'text-transform' => 'inherit',
		),
		'output'      => array(
			array(
				'element' => '.container-fluid.topbar',
			),
		),
		'transport' => 'auto',
		'active_callback'  => array(
			array(
				'setting'  => 'tpbr_endis',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

}
add_action( 'di_blog_after_typo', 'the_responsive_blog_topbar_options' );
