    <!-- Footer -->
    <footer class="footer">
        <div class="top">
            <div class="container">
                <div class="row footer_menu_block">
                    <a href="#" class="footer_logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/main_logo.png" alt="" class="footer_logo_img">
                    </a>
                    <ul class="footer_menu">
                        <li>
                            <a href="#provide" class="footer_menu_link">Услуги</a>
                        </li>
                        <li>
                            <a href="#best" class="footer_menu_link">Почему мы</a>
                        </li>
                        <li>
                            <a href="#work" class="footer_menu_link">Как мы работаем</a>
                        </li>
                        <li>
                            <a href="#about_us" class="footer_menu_link">О нас</a>
                        </li>
                        <li>
                            <a href="#faq" class="footer_menu_link">Частые вопросы</a>
                        </li>
                        <li>
                            <a href="#testimonials" class="footer_menu_link">Отзывы</a>
                        </li>
                        <li>
                            <a href="#contacts" class="footer_menu_link">Контакты</a>
                        </li>
                    </ul>
                    <div class="recall">
                        <a href="#" class="recall_link" data-toggle="modal" data-target="#callbackmodal">Заказать обратный звонок</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="row footer_menu_block">
                    <div class="col-12">
                        <p class="copyright">
                            Twój Biznes © Copyright 2020. Разработано <a href="#" class="developer_link">SFdevelop</a>
                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="#" class="footer_social_link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/images/vk.png" alt="" class="social_img">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer_social_link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/images/fb.png" alt="" class="social_img">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer_social_link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/images/insta.png" alt="" class="social_img">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer_social_link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/images/tele.png" alt="" class="social_img">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer_social_link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/images/whats.png" alt="" class="social_img">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer_social_link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/images/imo.png" alt="" class="social_img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="callbackmodal" tabindex="-1" role="dialog" aria-labelledby="callbackmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form class="faq_form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="form_title text-center">
                        Заказать обратный звонок
                    </h4>
                    <p class="form_desc text-center">
                        Оставьте свои данные и мы обязательно перезвоним Вам
                    </p>
                    <input type="name" class="name" id="name" placeholder="Ваше имя">
                    <input type="phone" class="phone" id="phone" placeholder="Ваш телефон">
                    <p class="therms text-center">Нажав кнопку Вы соглашаетесь на обработку персональных данных.</p>
                    <input type="button" class="confirm" value="Отправить">
                </form>

            </div>
        </div>
    </div>
    <!-- End Modal -->

    <?php wp_footer(); ?>   

    <!-- Scripts -->
    <script src="<?php echo bloginfo('template_url'); ?>/js/jquery-3.4.1.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/viewportchecker.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/js/main.js"></script>
</body>
</html>