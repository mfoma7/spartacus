<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Slideout menu -->
    <div id="slideout-menu">
        <div class="slideout-menu-logo flexrow-c-c">
            <?php the_custom_logo(); ?>
            <span class="slideout-close">
                <i class="icon-cancel"></i>
            </span>
        </div>
        <?php if (has_nav_menu('button-menu')) : ?>
            <?php

            $args = array(
                'theme_location' => 'button-menu',
                'container' => 'div',
                'after'    => '<span class="sub-arrow"><i class="icon-angle-down"></i></span>',
            );

            wp_nav_menu($args);
            ?>

        <?php endif; ?>
    </div>
    <!-- End Slideout menu -->

    <!-- Back to top button -->
    <div id="back-to-top" class="back-to-top-button">
        <div class="btt-icon-wrap">
            <i class="icon-up-open"></i>
        </div>
    </div>
    <!--.sidenav-wrapper-->
    <div id="panel">
        <header class="site-header" <?php if (get_field('spartacus_menu_transparent', 'options')) : ?> style="background:<?php the_field('spartacus_menu_and_header_background', 'options'); ?>;background-image:url(<?php echo SPARTACUS_DIR_URI . '/img/pattern-optimized.png'; ?>);background-position-y:-73px;" <?php endif; ?>>
            <div class="nav-bar container">
                <div id="nav-icon3" class="hamburger-menu toggle-button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a>
                </div>
                <!--.logo-->

                <!--.main-menu-->
                <?php if (has_nav_menu('main-menu')) : ?>
                    <?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container' => 'nav',
                        'container_class' => 'main-menu hidden',
                    );
                    wp_nav_menu($args);
                    ?>
                <?php endif; ?>
                <div class="header-search">
                    <i class="icon-search" aria-hidden="true"></i>
                </div>
                <div class="search-header">
                    <div class="container header-search-form">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
            <!--.nav-bar-->

        </header>
        <!--.site-header-->