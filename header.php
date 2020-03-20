<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>

    <!--ToTop-->
    <button class="toTop animated fadeInRight" onclick="topFunction()" id="toTop">
        <img src="<?php echo bloginfo('template_url'); ?>/images/arrow_top.png" alt="" class="arrow_top">
    </button>
    <!--End ToTop-->
    
    <!-- Header -->
    <section class="header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="logo">
                        <a href="#" class="logo_link">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/main_logo.png" alt="" class="logo_img">
                        </a>
                    </div>
                    <div class="contacts">
                        <div class="phones">
                            <ul>
                                <li>
                                    <img src="<?php echo bloginfo('template_url'); ?>/images/main_phone.png" alt="" class="phone_icon">
                                    <p class="phone_numb">+38 067 238 74 74</p>
                                </li>
                                <li>
                                    <a href="#" class="callback" data-toggle="modal" data-target="#callbackmodal">
                                        Заказать звонок
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="phones_mobile">
                            <a href="tel:+380672387474" class="phone_link">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/main_phone.png" alt="" class="phone_icon">
                            </a>
                        </div>
                        <div class="languages">
                            <span>RU</span>
                            <img src="<?php echo bloginfo('template_url'); ?>/images/arrow_down.png" alt="" class="arrow">
                        </div>
                        <div class="hamburger">
                            <a href="#" class="menu_link" onclick="openNav()">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/hamburger.png" alt="" class="hamburger_img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul class="header_menu">
                <li>
                    <a href="#provide" class="header_menu_link">Услуги</a>
                </li>
                <li>
                    <a href="#best" class="header_menu_link">Почему мы</a>
                </li>
                <li>
                    <a href="#work" class="header_menu_link">Как мы работаем</a>
                </li>
                <li>
                    <a href="#about_us" class="header_menu_link">О нас</a>
                </li>
                <li>
                    <a href="#faq" class="header_menu_link">Частые вопросы</a>
                </li>
                <li>
                    <a href="#testimonials" class="header_menu_link">Отзывы</a>
                </li>
                <li>
                    <a href="#contacts" class="header_menu_link">Контакты</a>
                </li>
            </ul>
            <ul class="header_social">
                <li>
                    <a href="#" class="header_social_link">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/vk.png" alt="" class="social_img">
                    </a>
                </li>
                <li>
                    <a href="#" class="header_social_link">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/fb.png" alt="" class="social_img">
                    </a>
                </li>
                <li>
                    <a href="#" class="header_social_link">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/insta.png" alt="" class="social_img">
                    </a>
                </li>
                <li>
                    <a href="#" class="header_social_link">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/tele.png" alt="" class="social_img">
                    </a>
                </li>
                <li>
                    <a href="#" class="header_social_link">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/whats.png" alt="" class="social_img">
                    </a>
                </li>
                <li>
                    <a href="#" class="header_social_link">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/imo.png" alt="" class="social_img">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Header -->