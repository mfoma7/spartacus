<?php if (get_field('spartacus_enable_sticky_sidebar', 'options')) : ?>
    <aside class="sidebar">
        <div class="sidebar-sticky">
            <?php
            if (is_active_sidebar('sidebar')) :
                dynamic_sidebar('sidebar');
            endif;
            ?>
        </div>
    </aside>
<?php else : ?>
    <aside class="sidebar">
        <?php
        if (is_active_sidebar('sidebar')) :
            dynamic_sidebar('sidebar');
        endif;
        ?>
    </aside>
<?php endif; ?>