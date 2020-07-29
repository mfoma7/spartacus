<?php

//Generate social icons for author fields
function generate_social_icons()
{
    $author_id = get_the_author_meta('ID');
    $result = '';

    if (have_rows('social_accounts', 'options')) :
        while (have_rows('social_accounts', 'options')) : the_row();

            // Get sub field values.
            $linkedin = get_field('author_linkedin', 'user_' . $author_id, 'options');
            $twitter = get_field('author_twitter', 'user_' . $author_id, 'options');
            $instagram = get_field('author_instagram', 'user_' . $author_id, 'options');

        endwhile;
    endif;


    if ($linkedin) {
        $result = "<a href='{$instagram}'><img class='author-socials' src='" . SPARTACUS_DIR_URI . '/img/icons/instagram.png' . "' alt='Instagram' target='_blank' rel='nofollow'></a>";
    }

    if ($twitter) {
        $result .= "<a href='{$twitter}'><img class='author-socials' src='" . SPARTACUS_DIR_URI . '/img/icons/twitter.png' . "' alt='Twitter' target='_blank' rel='nofollow'></a>";
    }

    if ($instagram) {
        $result .=  "<a href='{$linkedin}'><img class='author-socials' src='" . SPARTACUS_DIR_URI . '/img/icons/linkedin.png' . "' alt='Linkedin' target='_blank' rel='nofollow'></a>";
    }

    return $result;
}
