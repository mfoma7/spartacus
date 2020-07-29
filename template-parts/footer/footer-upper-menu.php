<!-- Footer 1 -->
<?php if (has_nav_menu('footer-1')) : ?>
    <div class="footer-col">

        <h4><?php $menu = wp_get_nav_menu_name("footer-1");
            echo $menu; ?></h4>
        <?php
        $args = array(
            'theme_location' => 'footer-1',
            'container' => 'div',
        );
        wp_nav_menu($args);
        ?>
    </div>
<?php endif; ?>
<!-- Footer 1 -->

<!-- Footer 2 -->
<?php if (has_nav_menu('footer-2')) : ?>
    <div class="footer-col">
        <h4><?php $menu = wp_get_nav_menu_name("footer-2");
            echo $menu; ?></h4>
        <?php
        $args = array(
            'theme_location' => 'footer-2',
            'container' => 'div',
        );
        wp_nav_menu($args);
        ?>
    </div>
<?php endif; ?>
<!-- Footer 2 -->

<!-- Footer 3 -->
<?php if (has_nav_menu('footer-3')) : ?>
    <div class="footer-col">
        <h4><?php $menu = wp_get_nav_menu_name("footer-3");
            echo $menu; ?></h4>
        <?php
        $args = array(
            'theme_location' => 'footer-3',
            'container' => 'div',
        );
        wp_nav_menu($args);
        ?>
    </div>
<?php endif; ?>
<!-- Footer 3 -->

<!-- Footer 4 -->
<?php if (has_nav_menu('footer-4')) : ?>
    <div class="footer-col">
        <h4><?php $menu = wp_get_nav_menu_name("footer-4");
            echo $menu; ?></h4>
        <?php
        $args = array(
            'theme_location' => 'footer-4',
            'container' => 'div',
        );
        wp_nav_menu($args);
        ?>
    </div>
<?php endif; ?>
<!-- Footer 4 -->

<!-- Footer 5 -->
<?php if (has_nav_menu('footer-5')) : ?>
    <div class="footer-col">
        <h4><?php $menu = wp_get_nav_menu_name("footer-5");
            echo $menu; ?></h4>
        <?php
        $args = array(
            'theme_location' => 'footer-5',
            'container' => 'div',
        );
        wp_nav_menu($args);
        ?>
    </div>
<?php endif; ?>
<!-- Footer 5 -->