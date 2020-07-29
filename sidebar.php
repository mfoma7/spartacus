<aside class="sidebar cmr">
    <div class="sidebar-content-wrap">
        <?php
        if (is_active_sidebar('sidebar')) :
            dynamic_sidebar('sidebar');
        endif;

        ?>
    </div>
</aside>