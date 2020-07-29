<?php if (have_rows('social_accounts', 'options')) : ?>
    <?php while (have_rows('social_accounts', 'options')) : the_row();

        // Get sub field values.
        $instagram = get_sub_field('instagram_link', 'options');
        $twitter = get_sub_field('twitter_link', 'options');
        $linkedin = get_sub_field('linkedin_link', 'options');

    ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php if ($instagram) : ?>
    <a href="<?php echo $instagram; ?>"><img src="<?php echo SPARTACUS_DIR_URI . '/img/icons/instagram.png'; ?>" alt="Instagram"></a>
<?php endif; ?>

<?php if ($twitter) : ?>
    <a href="<?php echo $twitter; ?>"><img src="<?php echo SPARTACUS_DIR_URI . '/img/icons/twitter.png'; ?>" alt="Twitter"></a>
<?php endif; ?>

<?php if ($linkedin) : ?>
    <a href="<?php echo $linkedin; ?>"><img src="<?php echo SPARTACUS_DIR_URI . '/img/icons/linkedin.png'; ?>" alt="Linkedin"></a>
<?php endif; ?>