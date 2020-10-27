<?php

get_header(); ?>
<main class="container page section 
<?php if (get_field('posts_disable_sidebar', 'options')) {
    echo 'no-sidebar';
} else {
    echo 'with-sidebar';
}
?>">
    <h1 class="archive-posts-title"><?php _e('News', 'spartacus'); ?></h1>
    <div class="archive-content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="post_card">
                <div class="info_section">
                    <div class="post_header">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div><?php _e('Author: ', 'spartacus'); ?><?php echo get_the_author(); ?></div>
                        <div class="post_date"><?php _e('Post added: ');
                                                echo get_the_date('d/m/y'); ?></div>
                    </div>
                    <div class="post_desc">
                        <div class="text">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="post_cats">
                        <ul>
                            <?php
                            $cats = get_the_category();
                            foreach ($cats as $cat) {
                                echo "<li>" . $cat->name . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="blur_back bright_back" <?php echo 'style=background-image:url(' . get_the_post_thumbnail_url() . ')'; ?>></div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php if (!get_field('posts_disable_sidebar', 'options')) : ?>
        <?php get_sidebar(); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>