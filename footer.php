<footer class="site-footer">
    <div class="footer-content container">
        <div class="upper-footer">

            <?php include_once 'template-parts/footer/footer-upper-menu.php'; ?>

        </div>
        <div class="mid-footer">
            <div class="mid-footer-wrap">
                <div class="mid-footer__text">
                    <?php if (the_field('footer_text', 'options')) : ?>
                        <?php echo the_field('footer_text', 'options'); ?>
                    <?php endif; ?>
                </div>
                <div class="mid-footer__socials">
                    <?php include_once 'template-parts/footer/footer-socials.php'; ?>
                </div>
            </div>
            <div class="mid-footer__images">
                <?php include_once 'template-parts/footer/footer-images.php'; ?>
            </div>
        </div>
        <div class="lower-footer">
            <div class="lower-footer__lang-switcher">
                <?php include_once 'template-parts/footer/language-switcher.php'; ?>
            </div>
            <div class="lower-footer__copyright">
                <?php echo the_field('copyright_text', 'options'); ?>
            </div>
            <div class="lower-footer__flag">
                <?php if (get_field('copyright_flag', 'options')) : ?>
                    <?php 
                    $flag_img = get_field('copyright_flag', 'options');
                    ?>
                    <img src="<?php echo $flag_img['url']; ?>" alt="<?php echo $flag_img['alt']; ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</div>
<!--#panel-->
</body>

</html>