<?php 
/**
 * Template Name: Contact
 */
get_header();
?>

<div class="contact contact--section">
    <header class="contact__header">
        <div class="contact__title">Contact</div>
    </header>
    <div class="contact__body">
        <?php echo do_shortcode('[contact-form-7 id="131" title="Contact form 1"]'); ?>

        <div class="contact__phone">
            <a href="tel:<?php the_field('phone_number', 7); ?>"><?php the_field('phone_number', 7); ?>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><g><g><path fill="#1e0547" d="M19.564 5.941a44.13 44.13 0 0 1-5.92 7.755 40.265 40.265 0 0 1-7.698 5.887c-1.371.708-2.722 1.042-3.76 0L.306 17.7a1.249 1.249 0 0 1 0-1.882l3.76-2.818a1.406 1.406 0 0 1 1.88 0l1.11 1.108a36.682 36.682 0 0 0 4.054-3.461 31.743 31.743 0 0 0 3.03-3.553L12.99 5.94a1.42 1.42 0 0 1 0-1.881L15.81.297l.035-.034a1.302 1.302 0 0 1 1.846.034l1.873 1.881c1.038 1.03.542 2.282 0 3.763zm-1.018-2.904l-1.195-1.2a.761.761 0 0 0-1.195 0L14.362 4.23a.907.907 0 0 0 0 1.2l1.515 1.514c-3.088 5.008-8.618 8.653-8.964 8.896l-1.475-1.475a.899.899 0 0 0-1.195 0l-2.39 1.796c-.358.301-.247.787 0 1.2l1.195 1.192c.327.335 1.528.315 1.959.092 0 0 5.608-3.533 7.984-6.116a39.399 39.399 0 0 0 5.634-7.525c.242-.485.386-1.528-.078-1.967z"/></g></g></svg>
                </span>
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo get_field('whatsapp_text', 7); ?>&phone=<?php echo get_field('whatsapp_number', 7); ?>">
                <img src="<?php bloginfo('template_directory') ?>/img/svg/wapp-white-phone.svg" alt="">
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>