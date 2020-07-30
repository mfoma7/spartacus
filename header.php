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
    <?php if (get_field('spartacus_enable_mobile_lower_menu', 'options', 1)) : ?>
        <div class="mobile-lower-header" <?php echo 'style="background-color:'.get_field('spartacus_header_block_bg', 'options').'"'?>>
            <?php
            $args = array(
                'theme_location' => 'main-menu',
                'container' => 'div',
                'container_class' => 'main-menu',
            );
            wp_nav_menu($args);
            ?>
        </div>
    <?php endif; ?>
    <i id="back-to-top" class="icon-up-open" <?php 
    if(get_field('spartacus_enable_mobile_lower_menu','options',1)) {echo 'style="bottom:8.5rem;"';}
    ?>></i>
    <!--.sidenav-wrapper-->
    <div id="panel">
        <header class="site-header">
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
            <div class="breadcrumbs-bar">
                <div class="container">

                </div>
            </div>
        </header>
        <!--.site-header-->