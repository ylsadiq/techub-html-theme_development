<?php
function techub_header_logo(){ 
    $header_logo = get_theme_mod('header_logo',get_template_directory_uri().'/assets/img/logo/logo.png'); 
    ?>
    <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo bloginfo(); ?>"></a>
    <?php 
}
function techub_footer_copyright(){ 
    $footer_copyright = get_theme_mod('footer_copyright', __('Full Copyright & Design By Theme pure – 2024', 'techub')); 
    ?>
    <p class="tp-footer-copy-paragraph tp-footer-4-copy-paragraph">
        <?php echo techub_kses($footer_copyright); ?></p>
    <?php 
}
function techub_header_social(){ 
    $header_facebook_url = get_theme_mod( 'header_facebook_url' , '#' );
    $header_instagram_url = get_theme_mod( 'header_instagram_url', '#' );
    $header_x_url = get_theme_mod( 'header_x_url', '#' );
    $header_pinterest_url = get_theme_mod( 'header_pinterest_url', '#' );
?>
<?php if(!empty($header_facebook_url)) : ?>
<a href="<?php echo esc_url( $header_facebook_url ); ?>">
    <i class="fa-brands fa-facebook"></i>
</a>
<?php endif; ?>
<?php if(!empty($header_instagram_url)) : ?>
<a href="<?php echo esc_url( $header_instagram_url ); ?>">
    <i class="fa-brands fa-instagram"></i>
</a>
<?php endif; ?>
<?php if(!empty($header_x_url)) : ?>
<a href="<?php echo esc_url( $header_x_url); ?>">
    <i class="fa-brands fa-twitter"></i>
</a>
<?php endif; ?>
<?php if(!empty($header_pinterest_url)) : ?>
<a href="<?php echo esc_url( $header_pinterest_url ); ?>">
    <i class="fa-brands fa-pinterest"></i>
</a>
<?php endif; ?>

<?php
}

/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function techub_kses( $allow_tags = '' ) {
	$allowed_html = [
            'a' => array(
                'href' => true,
                'class' => true,
                'id' => true,
            ),
            'br' => array(),
            'em' => array(),
            'strong' => array(),

	];

	return wp_kses( $allow_tags, $allowed_html );
}
 