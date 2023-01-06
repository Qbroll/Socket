<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package testSocket
 */

?>
 <footer>
        <div class="container">
            <div class="row mt-4 pt-4 pb-5">
                <div class="col-xl-3 col-md-6 col-sm-12 mb-3">
                    <h5>Подписатся</h5>
                    <p>Подпишитесь на наши новости и узнавайте первыми о самом интересном, что происходит в
                        увлекательном мире ретро электрик</p>
                    <form class="d-flex .d-sm-none .d-md-block" role="search">
                        <input type="text" placeholder="Ваш E-mail адрес">
                        <button type="submit" class="shadow-none">Подписатся</button>
                    </form>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 mb-3">
                    <h5>Полезная информация</h5>
                    <ul>
                        <li><a href="#">Наши контакты</a></li>
                        <li><a href="#">Сотрудничество</a></li>
                        <li><a href="#">Монтаж</a></li>
                        <li><a href="#">Карта сайта</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 mb-3">
                    <h5>Как приобрести</h5>
                    <ul>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Оплата</a></li>
                        <li><a href="#">Публичные оферта</a></li>
                        <li><a href="#">Политика конфиденциальности</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 mb-3">
                    <h5>Личное пространство</h5>
                    <ul>
                        <li><a href="#">Войти в кабинет</a></li>
                        <li><a href="#">История заявок</a></li>
                        <li><a href="#">Избранные товары</a></li>
                        <li><a href="#">Подписка на новости</a></li>
                    </ul>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-12 d-flex justify-content-between">
                    <span>Copyright © 2019 | ФД "КерамикЪ"</span>
                    <div id="mango"></div>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
