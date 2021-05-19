<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Langame</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css"
          integrity="sha512-UO+dUiFTr6cCaPZKCzXEGhYsuK8DkGAS5iThyMUrtHsg+INCFyRM3GiqJ4rjuvfEyn81XGjpfmjSwwR1dAjAsw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.css"
          integrity="sha512-xlddSVZtsRE3eIgHezgaKXDhUrdkIZGMeAFrvlpkK0k5Udv19fTPmZFdQapBJnKZyAQtlr3WXEM3Lf4tsrHvSA=="
          crossorigin="anonymous"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css"
          integrity="sha512-jRxwiuoe3nt8lMSnOzNEuQ7ckDrLl31dwVYFWS6jklXQ6Nzl7b05rrWF9gjSxgOow5nFerdoN6CBB4gY5m5nDw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="/fonts/stylesheet.css">
    <link rel="stylesheet" href="/fonts/PT/stylesheet.css">
    <link rel="stylesheet" href="/css/layout.css?t=<?= time(); ?>">
</head>
<body>
<?php require __DIR__ . '/.svg_icons.php'; ?>

<!--HEADER START-->
<header class="header">
    <div class="container-fluid">
        <div class="header_wrapper">
            <div class="header_logo_wrapper">
                <a href="/">
                    <img src="/img/logo.svg" alt="logo">
                </a>
            </div>
            <div class="select2_wrapper select_city_wrapper">
                <select class="select_city">
                    <option value="1">Москва</option>
                    <option value="2">Санкт-Петербург</option>
                    <option value="3">Тюмень</option>
                </select>
            </div>
            <div class="mobile_menu_bg"></div>
            <div class="header_menu_wrapper">
                <a href="#" class="mobile_menu_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <div class="header_menu">
                    <div class="decor"></div>
                    <div class="mob_menu_item">
                        <h4>Личный кабинет</h4>
                        <ul class="personal_menu">
                            <li>
                                <a href="/personal/personal_profile.php">Профиль</a>
                            </li>
                            <li>
                                <a href="/personal/personal_club_list.php">Список клубов</a>
                            </li>
                            <li>
                                <a href="#" class="exit">Выйти</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="main_menu">
                        <li>
                            <a href="/add_club.php">Добавить клуб</a>
                        </li>
                        <li>
                            <a href="/contacts.php">Контакты</a>
                        </li>
                    </ul>
                    <div class="mob_menu_item">
                        <ul>
                            <li>
                                <a href="/add_club.php">Как попасть на LanGame</a>
                            </li>
                            <li>
                                <a href="/langame_software.php">LanGame Software</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mob_menu_item">
                        <ul>
                            <li>
                                <a href="#">О сервисе</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mob_menu_item">
                        <ul>
                            <li>
                                <a href="/privacy_policy.php">Политика конфиденциальности</a>
                            </li>
                            <li>
                                <a href="/terms_of_use.php">Пользовательское соглашение</a>
                            </li>
                        </ul>
                        <div class="rights_wrapper">
                            <p>© ООО «Лангейм», 2021</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!--HEADER END-->

