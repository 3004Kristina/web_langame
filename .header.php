<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Langame</title>
    <head>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=79ca1998-f254-447d-8081-bcd9647a8fb9&lang=ru_RU" type="text/javascript">
        </script>
    </head>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css"
          integrity="sha512-UO+dUiFTr6cCaPZKCzXEGhYsuK8DkGAS5iThyMUrtHsg+INCFyRM3GiqJ4rjuvfEyn81XGjpfmjSwwR1dAjAsw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.css"
          integrity="sha512-xlddSVZtsRE3eIgHezgaKXDhUrdkIZGMeAFrvlpkK0k5Udv19fTPmZFdQapBJnKZyAQtlr3WXEM3Lf4tsrHvSA=="
          crossorigin="anonymous" />
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
            <div class="header_menu_wrapper">
                <ul>
                    <li>
                        <a href="/add_club.php">Добавить клуб</a>
                    </li>
                    <li>
                        <a href="/contacts.php">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--HEADER END-->

