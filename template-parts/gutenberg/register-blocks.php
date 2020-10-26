<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a custom text block.
        acf_register_block_type(array(
            'name'              => 'text-block',
            'title'             => __('Text Block'),
            'description'       => __('A custom text block.'),
            'render_template'   => 'template-parts/gutenberg/text-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-appearance',
            'keywords'          => array('text-block', 'quote'),
        ));
    }
}
