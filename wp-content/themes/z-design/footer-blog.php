<footer class="footer none">
                <div class="footer__copyright">
                    <div class="copyright__name">
                        <?php the_field('copyright', 7); ?>
                    </div>
                    <div class="footer__social">
                        <a target="_blank" href="<?php echo get_field('facebook_link', 7); ?>">
                            <img src="<?php bloginfo('template_directory') ?>/img/svg/fb.svg" alt="fb">
                        </a>
                        <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo get_field('whatsapp_text', 7); ?>&phone=<?php echo get_field('whatsapp_number', 7); ?>">
                            <img src="<?php bloginfo('template_directory') ?>/img/svg/wapp.svg" alt="whatsapp">
                        </a>
                    </div>
                </div>    

                <div class="footer__wrapper">
                    <div class="footer__go_up">
                        <a href="#"></a>
                    </div>
                </div>
            </footer>
        </div>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor.min.js"></script>
    <?php wp_footer(); ?>
</body>

</html>