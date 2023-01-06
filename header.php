<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Керамикъ</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
        <div class="topbar">
            <div class="container pt-4 pb-3">
                <div class="row">
                    <div class=" col-lg-2 col-md-4 col-sm-4 d-flex justify-content-center mb-sm-0 mb-4">
                        <img src="<? echo get_template_directory_uri();?>/assets/img/logo.svg" class="img-fluid" alt="Керамикъ">
                    </div>
                    <div class="col-lg-2 d-lg-block d-none  ms-5">
                        <a href="/">+7 926 780 3663</a>
                        <a href="/" id="feedback">Обратный звонок</a>
                    </div>
                    <div class="col-lg-3 col-md-2  d-md-block d-none ms-3">
                        <form class="d-flex .d-sm-none .d-md-block" role="search">
                            <input class="form-control me-2 shadow-none d-lg-block d-none" type="search"
                                placeholder="Поиск" aria-label="Поиск">
                            <button class="btn shadow-none btn-search" type="submit"><img src="<? echo get_template_directory_uri();?>/assets/img/search.svg"></button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 d-flex justify-content-around">
                        <a href="/">
                            <img src="<? echo get_template_directory_uri();?>/assets/img/like.svg" class="img-fluid" alt="like">
                            <span class="position-absolute translate-middle badge rounded-pill spn-bg  mt-1">7</span>
                        </a>
                        <a href="/">
                            <img src="<? echo get_template_directory_uri();?>/assets/img/basket.svg" class=" min-width-3.9rem img-fluid" alt="basket">
                            <span
                                class="position-absolute top-200 start-99 translate-middle badge rounded-pill spn-bg mt-1">9</span>
                            <span class="spn-pr d-lg-inline d-none">15 354 руб.</span>
                        </a>
                        <a href="/"><img src="<? echo get_template_directory_uri();?>/assets/img/profile.svg" class=" img-fluid" alt="profile">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Категории
                            </a>
                            <?php 
                        // Вывод название страниц сайта
                            wp_nav_menu(
                                array(
                                    "theme_location"=>'header_nav_categories',
                                    'container'=> false,
                                    "menu_class"=>'dropdown-menu'
                                )
                            )
                        ?>
                        </li>
                        <?php 
                        // Вывод название страниц сайта
                            wp_nav_menu(
                                array(
                                    "theme_location"=>'header_nav',
                                    'container'=> false,
                                    'items_wrap' => '%3$s'
                                )
                            )
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
