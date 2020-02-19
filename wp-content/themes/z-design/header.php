<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Z-DESIGN {PRO}</title>
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="<?php bloginfo('template_directory') ?>/img/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="<?php bloginfo('template_directory') ?>/img/favicons/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="<?php bloginfo('template_directory') ?>/img/favicons/apple-touch-icon-1024x1024.png">
    <?php wp_head(); ?>
</head>

<body class="overflow-hidden">
    <!-- <div class="preloader">
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
    </div> -->
    <div class="hidden" style="display:block">
        <div class="overlay"></div>
        <div class="modal modal--contact">
            <div class="modal__overlay" style="transform: translateX(125%);"></div>
            <div class="modal__form" style="transform: translateX(125%);">
                <div class="modal__form_body">
                    <header class="modal__header">
                        <svg class="close_icon modal__close" viewBox="0 0 44 50">
                            <path class="close_icon__arc"
                                style="fill:none;stroke:#231f20;stroke-width:2;stroke-miterlimit:10"
                                d="M 0.58123819,5.8 C 4.7812382,2.8 9.9812382,1 15.581238,1 c 14.2,0 25.7,11.5 25.7,25.7 0,9.9 -5.6,18.5 -13.8,22.8" />
                            <line class="line1" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10"
                                x1="5.0812378" y1="16.800001" x2="25.58124" y2="37.299999" />
                            <line class="line2" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10"
                                x1="25.58124" y1="16.800001" x2="5.0812378" y2="37.299999" />
                        </svg>
                        <div class="modal__title">Contact</div>
                    </header>

                    <div class="contact">
                        <div class="contact__form">
                            <div class="contact__group"><input type="text" name="name" placeholder="Name"></div>
                            <div class="contact__group"><input type="text" name="phone" placeholder="Tel #"></div>
                            <div class="contact__group"><input type="email" placeholder="Email"></div>
                            <div class="contact__group"><textarea type="text" name="message" placeholder="Message"
                                    rows="1"></textarea></div>

                            <div class="contact__button">
                                <button type="submit">
                                    Send
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="contact__message">
                            Message sent successfully, Will get back to you soon.
                        </div>
                        <div class="contact__phone">
                            <a href="tel:+972-54-631-99-77">+972-54-631-99-77
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal--about">
            <div class="modal__overlay" style="transform: translateX(125%);">
                <div class="modal__team">
                    <div class="modal__team_content">
                        <div class="modal__team_title">
                            Our Clients:
                            <!-- Team -->
                        </div>
                        <div class="modal__team_hr"></div>
                        <div class="modal__logos">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/1.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/2.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/3.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/4.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/5.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/6.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/7.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/8.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/9.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/10.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/11.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/12.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/13.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/14.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/15.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/16.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/17.svg" alt="">
                            <img src="<?php bloginfo('template_directory') ?>/img/about/logos/18.svg" alt="">
                        </div>
                        <!-- <div class="modal__employees employees">
                        <div class="employee">
                            <figure class="employee__photo">
                                <img src="<?php bloginfo('template_directory') ?>/img/about/employee1.png" alt="">
                            </figure>
                            <div class="employee__name">
                                Vlad Rozan
                            </div>
                            <div class="employee__post">
                                Product Management
                            </div>
                        </div>
                        <div class="employee">
                            <figure class="employee__photo">
                                <img src="<?php bloginfo('template_directory') ?>/img/about/employee2.png" alt="">
                            </figure>
                            <div class="employee__name">
                                Yaniv Levi
                            </div>
                            <div class="employee__post">
                                Web Development
                            </div>
                        </div>
                        <div class="employee">
                            <figure class="employee__photo">
                                <img src="<?php bloginfo('template_directory') ?>/img/about/employee3.png" alt="">
                            </figure>
                            <div class="employee__name">
                                Adi Wais
                            </div>
                            <div class="employee__post">
                                SEO Optimization
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
            <div class="modal__form" style="transform: translateX(125%);">
                <div class="modal__form_body">
                    <header class="modal__header">
                        <svg class="close_icon modal__close" viewBox="0 0 44 50">
                            <path class="close_icon__arc"
                                style="fill:none;stroke:#231f20;stroke-width:2;stroke-miterlimit:10"
                                d="M 0.58123819,5.8 C 4.7812382,2.8 9.9812382,1 15.581238,1 c 14.2,0 25.7,11.5 25.7,25.7 0,9.9 -5.6,18.5 -13.8,22.8" />
                            <line class="line1" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10"
                                x1="5.0812378" y1="16.800001" x2="25.58124" y2="37.299999" />
                            <line class="line2" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10"
                                x1="25.58124" y1="16.800001" x2="5.0812378" y2="37.299999" />
                        </svg>
                        <div class="modal__title">About</div>
                    </header>

                    <div class="modal__content modal__content--about">
                        <img src="<?php bloginfo('template_directory') ?>/img/about/about.gif" class="about__image" alt="">
                        <div class="about__content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero earum, laboriosam ea error
                                mollitia labore
                                minus, voluptatum beatae ipsum doloremque omnis vitae est, atque autem. Quasi tempore magnam
                                minima
                                quae?</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doVitem quid quiaspe lescimu
                                sapistis
                                voluptatat.
                            </p>
                            <p>
                                Ist, quaeped itiatios cum il eum estor mi, ide dolor aut et dunto eri dolorerum facilib
                                eaquiam,
                                omnihitatio cullatiis et peribus eaquisque prorepudae lat lis aut eos quisit aut acest
                                veritis urera
                                simoluptatis pelis mod ut quos eturept asitecus aut as magniet odiorehenis alicabo
                            </p>
                        </div>
                        <div class="about__buttons">
                            <a href="#" class="about__button button button--red">
                                <span class="button__text">
                                    Recommendations
                                </span>
                                <span class="button__container">
                                    <span class="button__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="18" viewBox="0 0 27 18">
                                            <g>
                                                <path
                                                    d="M17.592.034L16.03 1.6l6.35 6.368H-.085v2.214H22.38l-6.35 6.368 1.56 1.565 9.02-9.04z" />
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                            </a>

                            <a href="#" class="about__button button button--blue">
                                <span class="button__text">
                                    CV
                                </span>
                                <span class="button__container">
                                    <span class="button__arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="18" viewBox="0 0 27 18">
                                            <g>
                                                <path
                                                    d="M17.592.034L16.03 1.6l6.35 6.368H-.085v2.214H22.38l-6.35 6.368 1.56 1.565 9.02-9.04z" />
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                            </a>
                        </div>

                        <!-- <div class="about__team">
                        <div class="about__title">
                            Our team:
                        </div>
                        <div class="employees">
                            <div class="employee">
                                <figure class="employee__photo">
                                    <img src="<?php bloginfo('template_directory') ?>/img/about/employee1.png" alt="">
                                </figure>
                                <div class="employee__name">
                                    Vlad Rozan
                                </div>
                                <div class="employee__post">
                                    Product Management
                                </div>
                            </div>
                            <div class="employee">
                                <figure class="employee__photo">
                                    <img src="<?php bloginfo('template_directory') ?>/img/about/employee2.png" alt="">
                                </figure>
                                <div class="employee__name">
                                    Yaniv Levi
                                </div>
                                <div class="employee__post">
                                    Web Development
                                </div>
                            </div>
                            <div class="employee">
                                <figure class="employee__photo">
                                    <img src="<?php bloginfo('template_directory') ?>/img/about/employee3.png" alt="">
                                </figure>
                                <div class="employee__name">
                                    Adi Wais
                                </div>
                                <div class="employee__post">
                                    SEO Optimization
                                </div>
                            </div>
                        </div>
                    </div> -->
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
            <nav class="nav <?php if (is_home()) { echo 'nav--home'; } ?>">
                <a href="#" class="nav__toggle_lang">
                    <span>he</span>
                </a>
                <a href="/" class="logo">
                    <img src="<?php bloginfo('template_directory') ?>/img/svg/logo.svg" alt="logo">
                </a>

                <div id="toggle_menu" class="nav__toggle_menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </nav>