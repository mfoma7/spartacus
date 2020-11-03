<?php get_header(); ?>
<div class="header-block-bg front-page" <?php if (get_field('spartacus_menu_transparent', 'options')) echo 'style="background-color:' . get_field('spartacus_menu_and_header_background', 'options') . '"';  ?>>
    <div class="header-block">
        <div class="page-heading container <?php if (is_front_page() && get_field('image_after_heading')) {
                                                echo "heading-image";
                                            } ?>">
            <h1><?php the_title(); ?></h1>
            <?php if (is_front_page() && get_field('image_after_heading')) {
                echo '<img src="' . get_field('image_after_heading') . '" alt="Flag">';
            } ?>
        </div>
        <div class="header-blocks container">
            <div class="header-block__intro">
                <?php
                if (get_field('introduction')) {
                    echo get_field('introduction');
                }
                ?>
                <div class="toc-toggle">
                    <span><?php echo __('Page Content', 'spartacus') ?><i class="icon-angle-down"></i></span>
                    <div class="toc-hp">
                        <ul data-toc data-toc-headings="h2"></ul>
                    </div>
                </div>
            </div>
            <div class="header-block_elements">
                <?php include_once 'template-parts/header/header-elements.php'; ?>
            </div>
        </div>
    </div>
</div>

<main class="container page section no-sidebar">
    <div class="page-content">
        <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>


<?php get_footer(); ?>