<?php get_header(); ?>

<?php
$curauth = (isset($_GET['author_name'])) ?
    get_user_by('slug', $author_name) :
    get_userdata(intval($author));
?>

<div class="container author-content">
    <div class="author-container">
        <?php include_once 'template-parts/author/author-container.php'; ?>
    </div>

    <div class="author-reviews">
        <div class="review-row">
            <h2><?php echo __('Author pages','spartacus'); ?></h2>
            <ul>
                <!-- Casino review loop -->
                <?php
                $args = array(
                    'author' => $curauth->ID,
                    'post_type' => 'page',
                    'posts_per_page' => '4'
                );
                $author_posts = new WP_Query($args);
                ?>

                <div class="author-posts">
                    <?php if ($author_posts->have_posts()) : while ($author_posts->have_posts()) : $author_posts->the_post(); ?>

                            <article class="author-content-preview">
                                <date class="author-content-date"><i class="icon-calendar-empty"></i><?php echo get_the_date('j-n-Y');  ?></date>
                                <h3 class="author-content-title"><?php the_title(); ?></h3>
                                <p class="author-content-excerpt"><?php echo get_the_excerpt(); ?></p>
                                <a class="button" href="<?php the_permalink(); ?>"><?php echo __('Read More', 'spartacus'); ?></a>
                            </article>

                        <?php endwhile;
                    else : ?>
                        <p><?php echo __('No pages','spartacus'); ?></p>

                    <?php endif; ?>
                </div>
                <!-- End Loop -->

            </ul>
        </div>

        <div class="review-row">
            <h2><?php echo __('Author articles','spartacus'); ?></h2>
            <ul>
                <!-- Casino review loop -->
                <?php
                $args = array(
                    'author' => $curauth->ID,
                    'post_type' => 'post',
                    'posts_per_page' => '4'
                );
                $author_posts = new WP_Query($args);
                ?>

                <div class="author-posts">
                    <?php if ($author_posts->have_posts()) : while ($author_posts->have_posts()) : $author_posts->the_post(); ?>

                            <article class="author-content-preview">
                                <date class="author-content-date"><i class="icon-calendar-empty"></i><?php echo get_the_date('j-n-Y');  ?></date>
                                <h3 class="author-content-title"><?php the_title(); ?></h3>
                                <p class="author-content-excerpt"><?php echo get_the_excerpt(); ?></p>
                                <a class="button" href="<?php the_permalink(); ?>"><?php echo __('Read More', 'spartacus'); ?></a>
                            </article>

                        <?php endwhile;
                    else : ?>
                        <p><?php echo __('No articles','spartacus'); ?></p>

                    <?php endif; ?>
                </div>
                <!-- End Loop -->

            </ul>
        </div>

        <div class="review-row">
            <h2><?php echo __('Author casino reviews','spartacus'); ?></h2>

            <ul>
                <!-- Casino review loop -->
                <?php

                $args = array(
                    'author' => $curauth->ID,
                    'post_type' => 'casino-review',
                    'posts_per_page' => '4'
                );
                $author_posts = new WP_Query($args);

                ?>

                <div class="author-posts">
                    <?php if ($author_posts->have_posts()) : while ($author_posts->have_posts()) : $author_posts->the_post(); ?>

                            <article class="author-content-preview">
                                <date class="author-content-date"><i class="icon-calendar-empty"></i><?php echo get_the_date('j-n-Y');  ?></date>
                                <h3 class="author-content-title"><?php the_title(); ?></h3>
                                <p class="author-content-excerpt"><?php echo get_the_excerpt(); ?></p>
                                <a class="button" href="<?php the_permalink(); ?>"><?php echo __('Read More', 'spartacus'); ?></a>
                            </article>

                        <?php endwhile;
                    else : ?>
                        <p><?php echo __('No casino reviews','spartacus'); ?></p>

                    <?php endif; ?>
                </div>

                <!-- End Loop -->
            </ul>
        </div>



        <div class="review-row">
            <h2><?php echo __('Author slot reviews','spartacus'); ?></h2>

            <ul>
                <!-- Casino review loop -->
                <?php

                $args = array(
                    'author' => $curauth->ID,
                    'post_type' => 'casino-slot',
                    'posts_per_page' => '4'
                );
                $author_posts = new WP_Query($args);

                ?>

                <div class="author-posts">
                    <?php if ($author_posts->have_posts()) : while ($author_posts->have_posts()) : $author_posts->the_post(); ?>

                            <article class="author-content-preview">
                                <date class="author-content-date"><i class="icon-calendar-empty"></i><?php echo get_the_date('j-n-Y');  ?></date>
                                <h3 class="author-content-title"><?php the_title(); ?></h3>
                                <p class="author-content-excerpt"><?php echo get_the_excerpt(); ?></p>
                                <a class="button" href="<?php the_permalink(); ?>"><?php echo __('Read More', 'spartacus'); ?></a>
                            </article>

                        <?php endwhile;
                    else : ?>
                        <p><?php echo __('No slot reviews','spartacus'); ?></p>

                    <?php endif; ?>
                </div>

                <!-- End Loop -->
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>