<?php 
/**
 * Template Name: About
 */
get_header();
$currentLang = wpm_get_language();
?>

<div class="about">
    <div class="container">
        <div class="about__header">
            <div class="about__title">About</div>
        </div>
        <div class="about__body">
            <div class="gif_block gif_block--template">
                <img id="change_to_gif_js_about_template" src="<?php bloginfo('template_directory') ?>/img/about/about.png" class="about__image" alt="">
            </div>
            <div class="about__content">
                <?php echo get_post_field('post_content', 11); ?>
            </div>
            <div class="about__buttons">
                <a href="<?php the_field('recommendations_link', 11); ?>" target="_blank" class="about__button button button--red">
                    <span class="button__text">
                        <?php echo $currentLang === 'he' ? 'להמלצות' : 'Recommendations'; ?>
                    </span>
                    <span class="button__container">
                        <span class="button__arrow">
                            <?php if ($currentLang === 'he') : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14"><g><g><path fill="#f05b6e" d="M7.308 14.006l1.21-1.213-4.92-4.933H21V6.145H3.598l4.92-4.932L7.307 0 .322 7.002z"/></g></g></svg>
                            <?php else: ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="18" viewBox="0 0 27 18">
                                    <g>
                                        <path d="M17.592.034L16.03 1.6l6.35 6.368H-.085v2.214H22.38l-6.35 6.368 1.56 1.565 9.02-9.04z" />
                                    </g>
                                </svg>
                            <?php endif; ?>   
                        </span>
                    </span>
                </a>

                <a href="<?php the_field('cv_link', 11); ?>" target="_blank" class="about__button button button--blue">
                    <span class="button__text">
                        <?php echo $currentLang === 'he' ? 'לקורות חיים' : 'CV'; ?>
                    </span>
                    <span class="button__container">
                        <span class="button__arrow">
                            <?php if ($currentLang === 'he') : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14"><g><g><path fill="#0d52ff" d="M7.308 14.006l1.21-1.213-4.92-4.933H21V6.145H3.598l4.92-4.932L7.307 0 .322 7.002z"/></g></g></svg>
                            <?php else: ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="18" viewBox="0 0 27 18">
                                    <g>
                                        <path d="M17.592.034L16.03 1.6l6.35 6.368H-.085v2.214H22.38l-6.35 6.368 1.56 1.565 9.02-9.04z" />
                                    </g>
                                </svg>
                            <?php endif; ?>
                        </span>
                    </span>
                </a>
            </div>

            <!-- <div class="about__team">
                <div class="about__title">
                    <?php echo $currentLang === 'he' ? 'הצוות שלנו:' : 'Our Team:'; ?>
                </div>
                <div class="employees">
                    <?php foreach(get_field('team', 11) as $employee) : ?>
                        <div class="employee">
                            <figure class="employee__photo">
                                <img src="<?php echo $employee['employee_image']; ?>" alt="<?php echo $employee['employee_name']; ?>">
                            </figure>
                            <div class="employee__name">
                                <?php echo $employee['employee_name']; ?>
                            </div>
                            <div class="employee__post">
                            <?php echo $employee['employee_post']; ?>
                            </div>
                        </div>                                        
                    <?php endforeach; ?>
                </div>
            </div> -->
        </div>
    </div>
</div>


<?php get_footer(); ?>