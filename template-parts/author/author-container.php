<div class="author-page-details">
    <?php

    $author_id = get_the_author_meta('ID');
    $image = get_field('author_image', 'user_' . $author_id);

    ?>

    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

    <span><?php echo get_the_author_meta('display_name', $post->post_author); ?></span>
</div>
<div class="author-page-about">
    <div class="author-page--description">
        <?php
        $author_id = get_the_author_meta('ID');
        echo get_field('author_description', 'user_' . $author_id, 'options');
        ?>
    </div>
    <div class="author-page--socials">
        <?php echo generate_social_icons(); ?>
    </div>
</div>