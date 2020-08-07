<?php get_header(); ?>

<main class="container page section no-sidebar">
    <?php while (have_posts()) : the_post(); ?>
        <div class="post-content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>