 <?php
$header_offcanvas_switch = get_theme_mod('header_offcanvas_switch', false);
$header_offcanvas_social_switch = get_theme_mod('header_offcanvas_social_switch', false);

$offcanva_logo = get_theme_mod('offcanva_logo', get_template_directory_uri().'/assets/img/logo/logo.png');

$header_offcanvas_side_content = get_theme_mod('header_offcanvas_side_content', __( 'Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development.', 'techub', 'techub' ));
$offcanvas_address_text = get_theme_mod('offcanvas_address_text', __( 'Manchester 21, Zurich, CH', 'techub' ));
$offcanvas_address_url = get_theme_mod('offcanvas_address_url', __( '#', 'techub' ));
$offcanvas_email_address = get_theme_mod('offcanvas_email_address', __( 'techubinfo@mail.com', 'techub' ));
$offcanvas_phone_number = get_theme_mod('offcanvas_phone_number', __( '(+00) 678 345 98568', 'techub' ));

?>
 
 <!-- tp-offcanvus-area-start -->
 <div class="tpoffcanvas-area">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <?php if(!empty($offcanva_logo)) : ?>
            <div class="tpoffcanvas__logo">
                <a href="<?php echo home_url('/') ?>">
                    <img src="<?php echo esc_url($offcanva_logo) ?>" alt="logo">
                </a>
            </div>
            <?php endif; ?>
            <?php if(!empty($header_offcanvas_switch)) : ?>
            <div class="tpoffcanvas__title">
                <p><?php echo esc_html($header_offcanvas_side_content); ?></p>
            </div>
            <?php endif; ?>
            <div class="tp-main-menu-mobile d-xl-none"></div>
            <?php if(!empty($header_offcanvas_switch)) : ?>
            <div class="tpoffcanvas__contact-info">
                <div class="tpoffcanvas__contact-title">
                    <h5><?php echo esc_html__('Contact us', 'techub') ?></h5>
                </div>
                <ul>
                    <?php if(!empty($offcanvas_address_text)) : ?>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank"><?php echo esc_html($offcanvas_address_text); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($offcanvas_email_address)) : ?>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo esc_attr($offcanvas_email_address); ?>"><span class="__cf_email__"><?php echo esc_html($offcanvas_email_address); ?></span></a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($offcanvas_phone_number)) : ?>
                    <li>
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="<?php echo esc_attr($offcanvas_phone_number); ?>"><?php echo esc_html($offcanvas_phone_number); ?></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <?php if(!empty($header_offcanvas_social_switch)) : ?>
            <div class="tpoffcanvas__social">
                <div class="social-icon">
                    <?php techub_header_social(); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->