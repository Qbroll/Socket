<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testSocket
 */

get_header();
?>
    <section>
        <div class="container-fluid p-0">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<? echo get_template_directory_uri();?>/assets/img/texture.png" class="d-block w-100 object-fit-cover" alt="...">
                        <div class="carousel-caption  d-sm-block">
                            <h2>Ищете где купить механизмы Salvador?</h2>
                            <p>
                                Осуществляя ее заказ на общую сумму от 100 000 рублей, под все заказанные
                                выключатели и
                                розетки для открытой проводки в подарок вы получаете рамки из натурального бука
                                нашего
                                собственного производства.</p>
                            <input value="Подробнее" type="button">
                        </div>
                    </div>
                    <div class="carousel-item other-slide">
                        <img src="<? echo get_template_directory_uri();?>/assets/img/texture.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h2>Ищете где купить механизмы Salvador?</h2>
                            <p> Осуществляя ее заказ на общую сумму от 100 000 рублей, под все заказанные
                                выключатели и
                                розетки для открытой проводки в подарок вы получаете рамки из натурального бука
                                нашего
                                собственного производства.</p>
                            <input type="button" value="Подробнее">
                        </div>
                    </div>
                    <div class="carousel-item other-slide">
                        <img src="<? echo get_template_directory_uri();?>/assets/img/texture.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h2>Ищете где купить механизмы Salvador?</h2>
                            <p> Осуществляя ее заказ на общую сумму от 100 000 рублей, под все заказанные
                                выключатели и
                                розетки для открытой проводки в подарок вы получаете рамки из натурального бука
                                нашего
                                собственного производства.</p>
                            <input type="button" value="Подробнее">
                        </div>
                    </div>
                    <div class="carousel-item other-slide">
                        <img src="<? echo get_template_directory_uri();?>/assets/img/texture.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h2>Ищете где купить механизмы Salvador?</h2>
                            <p> Осуществляя ее заказ на общую сумму от 100 000 рублей, под все заказанные
                                выключатели и
                                розетки для открытой проводки в подарок вы получаете рамки из натурального бука
                                нашего
                                собственного производства.</p>
                            <input type="button" value="Подробнее">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="aboutUs">
        <div class="container-fluid ">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12 mb-5 p-abUs">
                    <h2>Коротко о нас</h2>
                    <p>
                        Мы, Фабрика Декора "КерамикЪ", уже много лет специализируемся на ретро электрике.
                        За годы существованя из увлекшихся любителей с горящими глазами наша команда превратилась в
                        настоящих с большой буквы Профессионалов своего дела. Но искра
                        в наших глазах совершенно не затухла! Сегодня, мы планомерно работаем над тем,
                        чтоб вырастить в таких же Профессионалов новых членов нашей команды.</p>
                    <input value="Подробнее" type="button">
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-end pe-lg-0 pe-md-5 ">
                    <img src="<? echo get_template_directory_uri();?>/assets/img/foll.png" class="img-fluid" alt="foll">
                </div>
            </div>
        </div>

    </section>


<?php
get_footer();
