<?php

/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

<main class="container page section template-404 no-sidebar">
    <div class="page-content">
        <div class="not-found-wrap flexcol-c-c">
            <img src="<?php echo SPARTACUS_DIR_URI . '/img/cards.svg'; ?>" alt="404-image">
            <div class="not-found-text"><?php echo __('PAGE NOT FOUND', 'spartacus'); ?></div>
            <div class="not-found-secondary"><?php echo __('The page you are looking for might have been removed, had its name changed or is temporarily unavailable', 'spartacus'); ?></div>
            <div class="not-found-button"><a href="<?php echo get_home_url(); ?>"><?php echo __('Go to the homepage', 'spartacus'); ?></a></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>