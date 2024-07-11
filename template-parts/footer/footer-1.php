<?php
    $footer_bg_img = get_theme_mod('footer_bg_img');
    echo $footer_bg_img; 
?>

 <!-- Footer area start -->
 <section class="tp-footer-area tp-footer-4-area  p-relative">
    <?php if(!empty($footer_bg_img)) : ?>
        <div class="tp-footer-4-bg-shape">
            <img src="<?php echo esc_url($footer_bg_img); ?>" alt="">
        </div>
    <?php endif; ?>
        <?php if(is_active_widget('footer-widget-1') || ('footer-widget-2') || ('footer-widget-3') || ('footer-widget-4')) { ?>
        <div class="tp-footer-top pt-120 pb-55">
            <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'footer-widget-1' ) ) { ?>
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 mb-50">
                    <?php dynamic_sidebar('footer-widget-1'); ?>
                </div>
                <?php } ?>

                <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-50 ">
                    <?php dynamic_sidebar('footer-widget-2'); ?>
                </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>    
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <?php dynamic_sidebar('footer-widget-3'); ?>
                </div>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>   
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                    <?php dynamic_sidebar('footer-widget-4'); ?>
                </div>
                <?php endif; ?>
            </div>
            </div>
        </div>
        <?php } ?>
        <div class="tp-footer-bottom tp-footer-4-bottom pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-footer-copy-right text-center wow fadeInUp">
                        <?php techub_footer_copyright(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer area end -->
