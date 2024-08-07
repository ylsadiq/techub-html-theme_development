<article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox-item mb-50'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="swiper tp-faq-slide pb-30 fix">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tp-postbox-thumb p-relative">
                            <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-postbox-thumb p-relative">
                            <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-postbox-thumb p-relative">
                            <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="tp-postbox-content">
        <?php echo get_template_part('template-parts/blog/meta'); ?>
        <h3 class="tp-postbox-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="tp-postbox-text">
            <p><?php the_excerpt(); ?></p>
        </div>
        <?php echo get_template_part('template-parts/blog/button'); ?>
    </div>
</article>