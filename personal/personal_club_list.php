<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.header.php");
?>

<!--SECTION PERSONAL PAGE START-->
<section class="personal_page_wrapper">
    <div class="container-fluid">
        <div class="personal_page">
            <div class="personal_menu_wrapper">
                <h2>Личный кабинет</h2>
                <div class="personal_menu">
                    <a href="/personal/personal_profile.php">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-svg-account"></use>
                        </svg>
                        <span>Профиль</span>
                    </a>
                    <a href="/personal/personal_club_list.php" class="active">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-svg-file"></use>
                        </svg>
                        <span>Список клубов</span>
                    </a>
                    <a href="#" class="exit">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-svg-cancel"></use>
                        </svg>
                        <span>Выйти</span>
                    </a>
                </div>
            </div>
            <div class="personal_main_content_wrapper">
                <div class="club_list_navigation_wrapper">
                    <ul class="club_list_navigation_tabs">
                        <li>
                            <a href="#tab1" class="active">
                                <span>Опубликованные</span>
                                <span class="qty">2</span>
                            </a>
                        </li>
                        <li><a href="#tab2">
                                <span>На модерации</span>
                                <span class="qty">1</span>
                            </a>
                        </li>
                        <li><a href="#tab3">
                                <span>Черновики</span>
                                <span class="qty">1</span>
                            </a>
                        </li>
                    </ul>
                    <button type="button" class="add_club" data-remodal-target="add_club_modal">Добавить</button>
                </div>

                <div class="club_list_content_tabs">
                    <div class="tab" id="tab1">
                        <div class="club_list_content">
                            <div class="club_list_item">
                                <a href="#" class="club_card">
                                    <div class="search_club_img_wrapper">
                                        <div class="search_club_img">
                                            <img src="/img/club6.png" alt="club">
                                        </div>
                                        <div class="club_services">
                                            <img src="/img/vip.svg" alt="icon">
                                            <img src="/img/fastfood.svg" alt="icon">
                                            <img src="/img/drink.svg" alt="icon">
                                        </div>
                                        <div class="club_distance">
                                            <img src="/img/walk.svg" alt="icon">
                                            <span>5 км. от вас</span>
                                        </div>
                                        <div class="club_promotion">
                                            <span>Акция</span>
                                        </div>
                                    </div>
                                    <div class="search_club_info">
                                        <div class="club_name">
                                            <span>F5 - Центр Киберспорта</span>
                                        </div>
                                        <div class="rating_wrapper">
                                            <div class="rating_stars">
                                                <img src="/img/star.svg" alt="star">
                                                <img src="/img/star.svg" alt="star">
                                                <img src="/img/star.svg" alt="star">
                                                <img src="/img/star.svg" alt="star">
                                                <img src="/img/star0.svg" alt="star">
                                            </div>
                                            <div class="reviews_qty">
                                                <span>47 отзывов</span>
                                            </div>
                                        </div>
                                        <div class="club_subway_wrapper">
                                            <div class="subway_img_wrapper">
                                                <img src="/img/metro.svg" alt="subway">
                                            </div>
                                            <div class="subway_station">
                                                <span>Сокол</span>
                                                <span class="subway_time_to">(1 мин.)</span>
                                            </div>
                                        </div>
                                        <div class="club_address_wrapper">
                                            <div class="address_img_wrapper">
                                                <img src="/img/point-red.svg" alt="location">
                                            </div>
                                            <div class="club_address">
                                                Ленинградский проспект 71КБ
                                            </div>
                                        </div>
                                        <div class="checkbox_qty_wrapper">
                                            <label>
                                                <input type="checkbox" name="vip_pc" data-toggle-block='[data-block="vip_pc"]'>
                                                <span class="activator"><span></span></span>
                                                <span>Скрыто из поиска? Нет</span>
                                            </label>
                                        </div>
                                        <div class="club_price_wrapper">
                                            <div class="club_price"></div>
                                            <div class="club_booking">Забронировать</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="club_list_item">
                                <a href="#" class="club_card">
                                    <div class="search_club_img_wrapper">
                                        <div class="search_club_img">
                                            <img src="/img/club6.png" alt="club">
                                        </div>
                                        <div class="club_services">
                                            <img src="/img/vip.svg" alt="icon">
                                            <img src="/img/fastfood.svg" alt="icon">
                                            <img src="/img/drink.svg" alt="icon">
                                        </div>
                                        <div class="club_distance">
                                            <img src="/img/walk.svg" alt="icon">
                                            <span>5 км. от вас</span>
                                        </div>
                                        <div class="club_promotion">
                                            <span>Акция</span>
                                        </div>
                                    </div>
                                    <div class="search_club_info">
                                        <div class="club_name">
                                            <span>F5 - Центр Киберспорта</span>
                                        </div>
                                        <div class="rating_wrapper">
                                            <div class="rating_stars">
                                                <img src="/img/star.svg" alt="star">
                                                <img src="/img/star.svg" alt="star">
                                                <img src="/img/star.svg" alt="star">
                                                <img src="/img/star.svg" alt="star">
                                                <img src="/img/star0.svg" alt="star">
                                            </div>
                                            <div class="reviews_qty">
                                                <span>47 отзывов</span>
                                            </div>
                                        </div>
                                        <div class="club_subway_wrapper">
                                            <div class="subway_img_wrapper">
                                                <img src="/img/metro.svg" alt="subway">
                                            </div>
                                            <div class="subway_station">
                                                <span>Сокол</span>
                                                <span class="subway_time_to">(1 мин.)</span>
                                            </div>
                                        </div>
                                        <div class="club_address_wrapper">
                                            <div class="address_img_wrapper">
                                                <img src="/img/point-red.svg" alt="location">
                                            </div>
                                            <div class="club_address">
                                                Ленинградский проспект 71КБ
                                            </div>
                                        </div>
                                        <div class="club_features_wrapper">
                                            <div class="club_features_item">
                                                <div class="club_features_img_wrapper">
                                                    <img src="/img/pc.svg" alt="icon">
                                                </div>
                                                <div class="club_features_qty">
                                                    <span>20</span>
                                                </div>
                                            </div>
                                            <div class="club_features_item">
                                                <div class="club_features_img_wrapper">
                                                    <img src="/img/playstation.svg" alt="icon">
                                                </div>
                                                <div class="club_features_qty">
                                                    <span>20</span>
                                                </div>
                                            </div>
                                            <div class="club_features_item">
                                                <div class="club_features_img_wrapper">
                                                    <img src="/img/vr.svg" alt="icon">
                                                </div>
                                                <div class="club_features_qty">
                                                    <span>20</span>
                                                </div>
                                            </div>
                                            <div class="club_features_item">
                                                <div class="club_features_img_wrapper">
                                                    <img src="/img/drive.svg" alt="icon">
                                                </div>
                                                <div class="club_features_qty">
                                                    <span>20</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="club_price_wrapper">
                                            <div class="club_price">от 80 ₽/час</div>
                                            <div class="club_booking">Забронировать</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab2" style="display: none">

                    </div>
                    <div class="tab" id="tab3" style="display: none">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION PERSONAL PAGE END-->

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/modals.php");
?>


<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.footer.php");
?>
