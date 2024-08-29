<?php get_header(); ?>

<section class="tp-postbox-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="tp-postbox-wrapper">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/content', get_post_format()); ?>

                            <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            ?>
                            <div class="row mb-60">
                                <div class="col-xl-6">
                                    <?php if (!empty($prev_post)) : ?>
                                        <h3>
                                            <a href="<?php echo get_permalink($prev_post); ?>"><?php echo get_the_title($prev_post); ?></a>
                                        </h3>
                                    <?php endif; ?>
                                </div>
                                <div class="col-xl-6 text-end">
                                    <?php if (!empty($next_post)) : ?>
                                        <h3>
                                            <a href="<?php echo get_permalink($next_post); ?>"><?php echo get_the_title($next_post); ?></a>
                                        </h3>
                                    <?php endif; ?>
                                </div>
                            </div>
                           
                            <?php echo get_template_part('template-parts/biography' ); ?>
                            
                            <?php
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;
                            ?>
                        <?php endwhile; ?>

                        <?php
                        // Pagination
                        techub_navigation();
                        ?>

                    <?php else : ?>
                        <p><?php _e('No Posts To Display.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="sidebar__wrapper">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
