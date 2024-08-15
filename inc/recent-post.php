<?php
class Techub_Recent_Posts_Widget extends WP_Widget
{
    // Constructor
    public function __construct()
    {
        parent::__construct(
            'techub_recent_posts_widget', // Base ID
            __('Techub Recent Posts', 'techub'),
            array('description' => __('A Custom Widget to Display Recent Posts with Custom HTML', 'techub'))
        );
    }
    // The widget's front-end display
    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        $title = !empty($instance['title']) ? $instance['title'] : __('Recent Posts', 'techub');
        $num_posts = !empty($instance['num_posts']) ? absint($instance['num_posts']) : 5;
        $order = !empty($instance['order']) ? $instance['order'] : 'DESC';
        echo $args['before_title'] . $title . $args['after_title'];

        // Query for recent posts
        $recent_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => $num_posts,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => $order,
        ));

        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <div class="sidebar__widget-content">
                    <div class="sidebar__post">
                        <div class="rc__post mb-5 d-flex align-items-center">
                            <div class="rc__post-thumb mr-20">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/blog/default-thumbnail.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="rc__post-content">
                                <div class="rc__meta">
                                    <span><i class="fa-thin fa-comments"></i> <?php comments_number('0 Comments', '1 Comment', '% 
                                    
                                    
                                    Comments'); ?> </span>
                                </div>
                                <h3 class="rc__post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>' . __('No recent posts available.', 'techub') . '</p>';
        endif;

        echo $args['after_widget'];
    }

    // Widget backend (form for customization)
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : __('Recent Posts', 'techub');
        $num_posts = !empty($instance['num_posts']) ? absint($instance['num_posts']) : 5;
        $order = !empty($instance['order']) ? $instance['order'] : 'DESC';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'techub'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('num_posts')); ?>"><?php _e('Number of Posts:', 'techub'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('num_posts')); ?>" name="<?php echo esc_attr($this->get_field_name('num_posts')); ?>" type="number" value="<?php echo esc_attr($num_posts); ?>">
            <select class="widefat" id="<?php echo esc_attr($this->get_field_id('order')); ?>" name="<?php echo esc_attr($this->get_field_name('order')); ?>">
                <option value="DESC" <?php selected($order, 'DESC'); ?>><?php _e('Descending', 'techub'); ?></option>
                <option value="ASC" <?php selected($order, 'ASC'); ?>><?php _e('Ascending', 'techub'); ?></option>
            </select>
        </p>
<?php
    }

    // Update widget settings
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['num_posts'] = (!empty($new_instance['num_posts'])) ? absint($new_instance['num_posts']) : 5;
        $instance['order'] = (!empty($new_instance['order'])) ? sanitize_text_field($new_instance['order']) : 'DESC';
        return $instance;
    }
}