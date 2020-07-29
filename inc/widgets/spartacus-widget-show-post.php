<?php

/**
 * Spartacus_Widget_Show_Post class
 *
 * @package BoomBox_Theme
 */

// Prevent direct script access.
if (!defined('ABSPATH')) {
    die('No direct script access allowed');
}


// Creating the widget 
class spartacus_show_post extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

            // Base ID of your widget
            'spartacus_show_post',

            // Widget name will appear in UI
            __('Custom Post'),

            // Widget description
            array('description' => __('Widget to show custom post'),)
        );
    }

    // Creating widget front-end

    public function widget($args, $instance)
    {
        $widget_id = $args['widget_id'];

        $array = [];

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];

        // This is where you run the code and display the output
        $data = get_field('spartacus_post_id', 'widget_' . $widget_id);

        array_push($array, $data);

        $post_args = array(
            'post_type' => 'post',
            'posts_per_page' => '1',
            'post__in' => $array
        );
        $loop = new WP_Query($post_args);

?>
        <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                <article class="sidebar-news-post">
                    <div class="news-post-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="news-post-info">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class=""><?php the_title(); ?></h3>
                        </a>
                        <p class=""><?php the_excerpt(); ?></p>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
<?php
        echo $args['after_widget'];
    }

    // Widget Backend 
    public function form($instance)
    {
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
    }

    // Class spartacus_show_post ends here
}


// Register and load the widget
function spartacus_load_widget()
{
    register_widget('spartacus_show_post');
}
add_action('widgets_init', 'spartacus_load_widget');

