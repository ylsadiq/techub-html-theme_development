<?php
function techub_theme_support() {
    /** thumbnail */
    add_theme_support( 'post-thumbnails' );
    /** automatic feed Link */
    add_theme_support( 'automatic-feed-links' );
    /** title tag */
    add_theme_support( 'title-tag' );
    /** HTML5 Support */
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    /** refresh Widget */
    add_theme_support('customize-selective-refresh-widgets');

    /** Post Format */
    add_theme_support('post-formats', array('image', 'video', 'audio', 'gallery', 'quote', 'link'));


};
add_action( 'after_setup_theme', 'techub_theme_support' );

function add_theme_scripts() {
    wp_enqueue_style( 'animate', get_template_directory_uri() . "/assets/css/animate.css", array(),'1.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.css", array(),'5.2.3', 'all' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . "/assets/css/flaticon.css", array(), '5.2.3', 'all' );
    wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . "/assets/css/font-awesome-pro.css", array(), '6.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . "/assets/css/magnific-popup.css", array(), '1.0', 'all' );
    wp_enqueue_style( 'techub-core', get_template_directory_uri() . "/assets/css/techub-core.css", array(), '1.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . "/assets/css/slick.css", array(), '1.0', 'all' );
    wp_enqueue_style( 'spacing', get_template_directory_uri() . "/assets/css/spacing.css", array(), '1.0', 'all' );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . "/assets/css/swiper-bundle.css", array(), '1.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array( 'jquery' ), '5.1.3', true);
	wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/countdown.js', array( 'jquery' ), '0.1.0', true);
	// wp_enqueue_script( 'imagesloaded-pkgd', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array( 'jquery' ), '4.1.4', true);
	wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'imagesloaded' ), '3.0.5', true);
	wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), '3.0.5', true);
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array( 'jquery' ), '1.1.0', true);
    wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array( 'jquery' ), '2.0.8', true);
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array( 'jquery-ui-core' ), '1.0', true);
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array( 'jquery' ), '1.5.0', true);
    // wp_enqueue_script( 'range-slider', get_template_directory_uri() . '/assets/js/range-slider.js', array( 'jquery' ), '1.12.1', true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array( 'jquery' ), '6.5.0', true);
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.js', array( 'jquery' ), '4.0.0', true);
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.1.3', true);
    wp_enqueue_script( 'techub-main', get_template_directory_uri() . '/assets/js/techub-main.js', array( 'jquery' ), '1.0', true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );