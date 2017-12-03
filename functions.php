<?php

//CSS
function mm_load_scripts(){



    wp_enqueue_style('bootstrap', get_template_directory_uri().'/includes/css/bootstrap.min.css',array(), '4.0.2', 'all');
    wp_enqueue_style('normalize', get_template_directory_uri().'/includes/css/normalize.css',array(), '0.01', 'all');
    wp_enqueue_style('component', get_template_directory_uri().'/includes/css/component.css',array(), '0.01', 'all');
    wp_enqueue_style('demo', get_template_directory_uri().'/includes/css/demo.css',array(), '0.01', 'all');

//slider css

wp_enqueue_style('slider_header1', get_template_directory_uri().'/includes/css/base.css',array(), '1.0.0', 'all');
wp_enqueue_style('slider_header2', get_template_directory_uri().'/includes/css/pater.css',array(), '1.0.0', 'all');
//main css
    wp_enqueue_style('custom_css', get_template_directory_uri().'/style.css',array(), '1.0.0', 'all');



//load js
    wp_deregister_script('jquery');

    wp_register_script( 'jquery', get_template_directory_uri().'/includes/js/jquery-3.2.1.min', false, '3.2.1', true);
    wp_enqueue_script('jquery' );
    wp_enqueue_script('bootstrap_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), '1.12.3', true );
    wp_enqueue_script('bootstrap_bundle', get_template_directory_uri(). '/includes/js/bootstrap.bundle.min.js', array('jquery'), '4.0.2',  true );
    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/includes/js/bootstrap.min.js', array('jquery'), '4.0.2', true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri(). '/includes/js/modernizr.custom.js','' ,'0.0.1',  true);
    wp_enqueue_script( 'custom_js', get_template_directory_uri(). '/includes/js/custom.js','', '0.0.1',  true);

//slider js

    wp_enqueue_script( 'header_js1', get_template_directory_uri(). '/includes/js/demo.js','', '0.0.1',  true);
    wp_enqueue_script( 'header_js2', get_template_directory_uri(). '/includes/js/imagesloaded.pkgd.min.js','', '0.0.1',  true);
    wp_enqueue_script( 'header_js3', get_template_directory_uri(). '/includes/js/anime.min.js','', '0.0.1',  true);
    wp_enqueue_script( 'header_js4', get_template_directory_uri(). '/includes/js/demo3.js','', '0.0.1',  true);





}
add_action('wp_enqueue_scripts','mm_load_scripts');

//Register navwalker and walker
require get_template_directory() . '/bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'theme-textdomain' ),
) );

//add logo support

function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//header image

$defaults = array(
	'default-image'          => '',
	'width'                  => 400,
	'height'                 => 250,
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );



?>
