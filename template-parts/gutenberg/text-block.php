<?php

/**
 * Text Block Template.
 *
 */

// Load values and assign defaults.
$if_title = get_field('if_block_title');
$title = get_field('block_title');
$text = get_field('block_text');
$block_bg = get_field('block_background');
$block_title_col = get_field('block_title_color');
$block_text_col = get_field('block_text_color');
$block_border_col = get_field('block_border_color');

?>

<div class="text-block" style="<?php echo "background-color:$block_bg;box-shadow: 0 5px 0 $block_border_col;" ?>">
    <?php if ($if_title) : ?>
        <h2 class="block-title" style="<?php echo "color:$block_title_col;" ?>">
            <?php echo $title; ?>
        </h2>
    <?php endif; ?>
    <div class="block-text" style="<?php echo "color:$block_text_col;" ?>">
        <?php echo $text; ?>
    </div>
</div>