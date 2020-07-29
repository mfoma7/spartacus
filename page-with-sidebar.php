<?php

/**
 * Template Name: Page With Sidebar
 */
get_header(); ?>
<div class="header-block-bg">
    <div class="header-block">
        <div class="page-heading <?php if (is_front_page()) {
                                        echo "homepage-flag";
                                    } ?>">
            <h1><?php the_title(); ?></h1>
            <?php if (is_front_page()) {
                echo '<img src="' . get_field('homepage_flag') . '" alt="Country Flag">';
            } ?>
        </div>
        <div class="container">
            <div class="header-block__intro">
                <div class="text-center text-primary">
                </div>
                <p><?php echo get_field('introduction'); ?></p>
            </div>
            <div class="header-block__toc">
                <ul data-toc data-toc-headings="h2"></ul>
            </div>
        </div>
    </div>
</div>
<main class="container page section with-sidebar">
    <div class="page-content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="text-center">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>