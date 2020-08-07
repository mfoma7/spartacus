<?php

//Author box at the end of the pages / posts
function spartacus_author_box($content)
{

    global $post;

    // Detect if it is a single post with a post author
    if (((is_single() && isset($post->post_author)) || (is_page() && isset($post->post_author))) && !is_front_page()) {

        $author_id = get_the_author_meta('ID');

        //Get ACF author image
        $image = get_field('author_image', 'user_' . $author_id);

        // Get author's display name 
        $display_name = get_the_author_meta('display_name', $post->post_author);

        // If display name is not available then use nickname as display name
        if (empty($display_name))
            $display_name = get_the_author_meta('nickname', $post->post_author);

        // Get author's biographical information or description
        $user_description = get_field('author_description', 'user_' . $author_id, 'options');

        // Get author's website URL 
        $user_website = get_the_author_meta('url', $post->post_author);

        // Get link to the author archive page
        $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author));

        if (have_rows('social_accounts', 'options')) :
            while (have_rows('social_accounts', 'options')) : the_row();

                // Get sub field values.
                $linkedin = get_field('author_linkedin', 'user_' . $author_id, 'options');
                $twitter = get_field('author_twitter', 'user_' . $author_id, 'options');
                $instagram = get_field('author_instagram', 'user_' . $author_id, 'options');

            endwhile;
        endif;

        $author_details = '<div class="author_socials_bar">
        <span class="author_detail">' . __('About author', 'spartacus') . '</span>
        <span class="author_social_icons">
        <a href="' . $linkedin . '"><img class="author-socials" src="' . SPARTACUS_DIR_URI . '/img/icons/linkedin.png' . '" alt="Linkedin" target="_blank" rel="nofollow"></a>
        <a href="' . $instagram . '"><img class="author-socials" src="' . SPARTACUS_DIR_URI . '/img/icons/instagram.png' . '" alt="Instagram" target="_blank" rel="nofollow"></a>
        <a href="' . $twitter . '"><img class="author-socials" src="' . SPARTACUS_DIR_URI . '/img/icons/twitter.png' . '" alt="Twitter" target="_blank" rel="nofollow"></a>
        </span></div>';

        if (!empty($user_description) && !empty($display_name))
            // Author avatar and bio

            $author_details .= '<div class="author_details"><img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" /><div class="someclass"><span class="author_name">' . $display_name . '</span>'  . '<p class="author_description">' . nl2br($user_description) . '</p></div>' . '</div>';

        $author_details .= '<p class="author_links"><a href="' . $user_posts . '">' . __('All posts from', 'spartacus') . ' ' . $display_name . '</a>';

        // Check if author has a website in their profile
        if (!empty($user_website)) {

            // Display author website link
            $author_details .= '</p>';
        } else {
            // if there is no author website then just close the paragraph
            $author_details .= '</p>';
        }

        // Pass all this info to post content  
        $content = $content . '<div class="author_bio_section" >' . $author_details . '</div>';
    }
    return $content;
}
