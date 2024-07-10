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

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'techub' ),
        'footer_menu'  => __( 'Footer Menu', 'techub' ),
    ) );
    }


add_action( 'after_setup_theme', 'techub_theme_support' );




include_once('inc/common/scripts.php');
include_once('inc/nav-walker.php');
include_once('inc/template-function.php');

if ( class_exists( 'Kirki' ) ) {
    include_once('inc/techubkirki.php');
}