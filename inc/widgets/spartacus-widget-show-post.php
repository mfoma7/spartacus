<?php

/**
 * Spartacus_Widget_Show_Post class
 *
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
            __('Custom Pages'),

            // Widget description
            array('description' => __('Widget to show custom pages'),)
        );
    }

    // Creating widget front-end

    public function widget($args, $instance)
    {
        $widget_id = $args['widget_id'];

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];

        // This is where you run the code and display the output
        $header = get_field('spartacus_post_header', 'widget_' . $widget_id);

        $icon = get_field('spartacus_post_header_icon', 'widget_' . $widget_id);

        $data = get_field('spartacus_post_id', 'widget_' . $widget_id);

        $post_args = array(
            'post_type' => 'page',
            'post__in' => $data
        );
        $loop = new WP_Query($post_args);

?>

        <div class="sidebar-pages-wrap">
            <div class="pages-wrap-header">
                <h3><?php echo $header; ?> </h3>
                <?php if ($icon) : ?>
                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                <?php endif; ?>
            </div>
            <ul>
                <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="pages-wrap-title">
                            <li> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <i class="icon-angle-right"></i></li>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
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
