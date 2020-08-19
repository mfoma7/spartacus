<?php get_header(); ?>

<?php

global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach ($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
}

$the_query = new WP_Query($search_query);
if ($the_query->have_posts()) : ?>
    <main class="container page section no-sidebar">
        <div class="search-content">
            <div class="search-items-wrap">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="search-item-result">
                        <div>
                            <date class="search-content-date"><i class="icon-calendar-empty"></i><?php echo get_the_date('j-n-Y');  ?></date>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <a class="read-more-button" href="<?php the_permalink(); ?>"><?php echo __('Read more', 'spartacus'); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
<?php else : ?>
    <main class="container page section no-sidebar search-content">
        <div class="search-content">
            <h3><?php echo __('Nothing Found', 'spartacus'); ?></h3>
            <p><?php echo __('Sorry, no page or post matched your search criteria.', 'spartacus'); ?></p>
            <span><?php echo __('Try again with different keywords', 'spartacus'); ?></span>
            <?php get_search_form(); ?>
        </div>
    </main>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>