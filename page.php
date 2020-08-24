<?php get_header(); ?>
<div class="header-block-bg" <?php if (get_field('spartacus_header_block_bg', 'options')) echo 'style="background-color:' . get_field('spartacus_header_block_bg', 'options') . '"';  ?>>
    <div class="header-block">
        <div class="container">
            <div id="breadcrumbs">
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                <div class="last-modified">
                    <span> <?php _e("Updated: ", "spartacus") . the_modified_date("d-m-y"); ?></span>
                </div>
            </div>
        </div>
        <div class="page-heading container <?php if (get_field('image_after_heading')) {
                                                echo "heading-image";
                                            } ?>">
            <h1><?php the_title(); ?></h1>
            <?php if (get_field('image_after_heading')) {
                echo '<img src="' . get_field('image_after_heading') . '" alt="Country Flag">';
            } ?>
        </div>
        <div class="header-lower-block container">
            <div class="header-block__intro">
                <?php
                if (get_field('introduction')) {
                    echo get_field('introduction');
                }
                ?>
            </div>
            <div class="header-block__toc">
                <ul data-toc data-toc-headings="h2"></ul>
            </div>
        </div>
    </div>
</div>

<main class="container page section no-sidebar">
    <div class="page-content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="text-center">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</main>


<?php get_footer(); ?>