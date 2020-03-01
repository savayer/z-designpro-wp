<?php 
/**
 * Template Name: Contact
 */
get_header();
?>

<div class="contact">
    <header class="contact__header">
        <div class="contact__title">Contact</div>
    </header>
    <div class="contact__body">
        <?php echo do_shortcode('[contact-form-7 id="131" title="Contact form 1"]'); ?>

        <div class="contact__phone">
            <a href="tel:<?php the_field('phone_number', 7); ?>"><?php the_field('phone_number', 7); ?>
                <span></span>
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo get_field('whatsapp_text', 7); ?>&phone=<?php echo get_field('whatsapp_number', 7); ?>">
                <img src="<?php bloginfo('template_directory') ?>/img/svg/wapp-white-phone.svg" alt="">
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>