<!DOCTYPE html>
<?php $currentLang = wpm_get_language(); ?>
<html class="lang-<?php echo $currentLang; ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body class="<?php if (is_page_template('page-home.php')) echo 'overflow-hidden'; ?>
<?php if (is_page_template('page-contact.php')) echo 'page_contact'; ?>
">
    <?php if (is_page_template('page-home.php')) : ?>
        <div class="preloader">
            <div class="lds-spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    <div class="internet-explorer ie" id="internet-explorer">
        <div class="ie__content">
            <div class="ie__warning"></div>
            <div class="title ie__title">
                Your Browser is Not supported
            </div>
            <div class="ie__description">
                To View our site, please upgrade to the latest version of one of the following browsers:
            </div>
            <div class="ie__hr"></div>
            <div class="ie__browsers"></div>
        </div>
    </div>
    <div class="hidden" style="display:none">
    <?php endif; ?>
        <div class="overlay"></div>
        <div class="modal modal--contact">
            <div class="modal__overlay" style="transform: translateX(125%);">
                <div class="modal__overlay_body">
                    <?php if ($currentLang === 'he') : ?>
                        <img class="dropline_img" data-src="<?php bloginfo('template_directory') ?>/img/contact-he.gif">
                    <?php else: ?>
                        <img class="dropline_img" data-src="<?php bloginfo('template_directory') ?>/img/contact-en.gif">
                    <?php endif; ?>
                </div>
            </div>
            <div class="modal__form" style="transform: translateX(125%);">
                <div class="modal__form_body">
                    <header class="modal__header">
                        <svg class="close_icon modal__close" viewBox="0 0 44 50">
                            <path class="close_icon__arc" style="fill:none;stroke:#231f20;stroke-width:2;stroke-miterlimit:10" d="M 0.58123819,5.8 C 4.7812382,2.8 9.9812382,1 15.581238,1 c 14.2,0 25.7,11.5 25.7,25.7 0,9.9 -5.6,18.5 -13.8,22.8" />
                            <line class="line1" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10" x1="5.0812378" y1="16.800001" x2="25.58124" y2="37.299999" />
                            <line class="line2" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10" x1="25.58124" y1="16.800001" x2="5.0812378" y2="37.299999" />
                        </svg>
                        <div class="modal__title">Contact</div>
                    </header>

                    <div class="contact">
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
            </div>
        </div>
        <div class="modal modal--about">
            <div class="modal__overlay" style="transform: translateX(125%);">
                <div class="modal__overlay_body">
                    <div class="modal__team_content">
                        <?php if (get_field('type_about_content', 11) === 'Clients') : ?>
                            <div class="modal__team_title">
                                <?php echo $currentLang === 'he' ? 'בין הלקוחות:' : 'Our Clients:'; ?>
                            </div>
                            <div class="modal__team_hr"></div>
                            <div class="modal__logos">
                                <?php                                
                                    $i = 0;
                                    foreach(get_field('clients', 11) as $img) : 
                                        $i++;  ?>
                                        <img src="<?php echo $img['client_image']; ?>" alt="client-<?php echo $i; ?>">
                                <?php endforeach; ?>
                            </div>
                        <?php else : ?>
                            <div class="modal__team_title">                                
                                <?php echo $currentLang === 'he' ? 'הצוות שלנו:' : 'Our Team:'; ?>
                            </div>
                            <div class="modal__team_hr"></div>
                            <div class="modal__employees employees">
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
                        <?php endif; ?>                                                
                    </div>
                </div>
            </div>
            <div class="modal__form" style="transform: translateX(125%);">
                <div class="modal__form_body">
                    <header class="modal__header">
                        <svg class="close_icon modal__close" viewBox="0 0 44 50">
                            <path class="close_icon__arc" style="fill:none;stroke:#231f20;stroke-width:2;stroke-miterlimit:10" d="M 0.58123819,5.8 C 4.7812382,2.8 9.9812382,1 15.581238,1 c 14.2,0 25.7,11.5 25.7,25.7 0,9.9 -5.6,18.5 -13.8,22.8" />
                            <line class="line1" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10" x1="5.0812378" y1="16.800001" x2="25.58124" y2="37.299999" />
                            <line class="line2" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10" x1="25.58124" y1="16.800001" x2="5.0812378" y2="37.299999" />
                        </svg>
                        <div class="modal__title">About</div>
                    </header>

                    <div class="modal__content modal__content--about">
                        <div class="gif_block gif_block--modal">
                            <img id="change_to_gif_js" src="<?php bloginfo('template_directory') ?>/img/about/about.png" class="about__image" alt="">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="menu_wrapper">
            <div class="menu_wrapper__close">
                <svg class="close_icon" viewBox="0 0 42 50">
                    <path class="close_icon__arc" style="fill:none;stroke:#231f20;stroke-width:2;stroke-miterlimit:10"
                        d="M 0.58123819,5.8 C 4.7812382,2.8 9.9812382,1 15.581238,1 c 14.2,0 25.7,11.5 25.7,25.7 0,9.9 -5.6,18.5 -13.8,22.8" />
                    <line class="line1" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10" x1="5.0812378"
                        y1="16.800001" x2="25.58124" y2="37.299999" />
                    <line class="line2" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10" x1="25.58124"
                        y1="16.800001" x2="5.0812378" y2="37.299999" />
                </svg>
            </div>
            <?php 
                wp_nav_menu( [
                    'menu'            => 'main', 
                    'container'       => 'div',
                    'menu_class'      => 'menu',
                    'walker' => new MyWalker()
                ]);
            ?>
        </div>
        <div class="wrapper">
            <nav class="nav <?php if (is_page_template('page-home.php')) { echo 'nav--home'; } else { echo 'nav--inner'; } ?>">
                <div class="nav__lang_wrapper" data-href="<?php echo $currentLang === 'he' ? 'en' : ''  ?>">
                    <div class="flipper">
                <?php 
                    if (function_exists('wpm_get_languages')) {
                        $languages = wpm_get_languages();
                        $current = wpm_get_language();
                        //dd($languages);
                        foreach ($languages as $code => $language) {
                            $toggle_url = esc_url(wpm_translate_current_url($code));
                
                            if ($code === $current) {
                                echo '<a href="' . $toggle_url . '" class="nav__toggle_lang back">';
                                echo '<span>' . $code . '</span></a>';
                            } else {
                                echo '<a href="' . $toggle_url . '" class="nav__toggle_lang front">';
                                echo '<span>' . $code . '</span></a>';
                            }
                        }
                    }
                ?>
                </div>
                </div>
                <?php 
                    if ($currentLang === 'he') {
                        $homeHref = '/';
                    } else {
                        $homeHref = '/en';                        
                    }
                ?>
                <a href="<?php echo $homeHref; ?>" class="logo">
                    <img src="<?php bloginfo('template_directory') ?>/img/svg/logo.svg" alt="logo">
                </a>

                <div id="toggle_menu" class="nav__toggle_menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </nav>