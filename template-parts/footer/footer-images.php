<div class="mid-footer__images--wrap">
    <?php
    // Check rows exists.
    if (have_rows('footer_image_field', 'options')) :

        // Loop through rows.
        while (have_rows('footer_image_field', 'options')) : the_row();

            // Load sub field value.
            $image = get_sub_field('footer_image', 'options');
            $link = get_sub_field('footer_image_link', 'options');
            // Do something...
            echo '<a href="' . $link . '"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '"></a>';
        // End loop.
        endwhile;
    // Do something...
    endif;
    ?>
</div>