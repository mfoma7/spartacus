<div class="mid-footer__images--wrap">
    <?php
    $images = get_field('footer_images', 'options');
    if ($images) : ?>

        <?php foreach ($images as $image) : ?>

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endforeach; ?>

    <?php endif; ?>
</div>