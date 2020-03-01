            <footer class="footer none">
                <div class="footer__copyright">
                    <div class="copyright__name">
                        <span>Z-Design Pro</span> <span>|</span> <span>Vision & Creative © 2019</span>
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
    </div>
    <?php wp_footer(); ?>

</body>

</html>