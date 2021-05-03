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
                        <a href="#">
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

<!--MODALS START-->
<div class="remodal person_add_club_modal" data-remodal-id="add_club_modal">
    <button data-remodal-action="close" class="remodal-close">Закрыть</button>
    <div class="remodal-content">
        <form action="" method="post" id="add-club-form">
            <div class="forma">
                <div class="form_tab_wrapper">
                    <div class="form_tab tab1">
                        <div class="form_tab_title">
                            1. Общая информация о клубе
                        </div>
                        <div class="form-group">
                            <label for="club-name-input">Название клуба</label>
                            <div class="input_wrapper">
                                <input id="club-name-input" name="club_name" type="text" placeholder="" required>
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select-сity">Город</label>
                            <div class="input_wrapper">
                                <div class="select2_wrapper">
                                    <select id="select-сity" name="club_city" required>
                                        <option value="">Выберите город</option>
                                        <option value="1">Москва</option>
                                        <option value="2">Санкт-Петербург</option>
                                    </select>
                                    <div class="error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="club-address-input">Адрес</label>
                            <div class="input_wrapper">
                                <input id="club-address-input" name="club_address" type="text" placeholder="" required>
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dich-email-input">E-mail</label>
                            <div class="input_wrapper">
                                <input id="dich-email-input" name="dich_email" type="email" placeholder="" required>
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="clubz-phone-input">Телефон клуба</label>
                            <input id="clubz-phone-input" name="zphone" type="tel" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="select-subway">Метро</label>
                            <div class="input_wrapper">
                                <div class="select2_wrapper">
                                    <select id="select-subway" name="club_city">
                                        <option value="">Выберите метро</option>
                                        <option value="1">Не указан</option>
                                        <option value="2">Сокол</option>
                                    </select>
                                    <div class="error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="club-area-input">Общая площадь клуба</label>
                            <div class="input_wrapper">
                                <input id="club-area-input" name="club_area" type="text" placeholder="м2">
                                <div class="error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form_tab tab2">
                        <div class="form_tab_title">
                            2. Информация о базовых услугах
                        </div>
                        <div class="form-group">
                            <label for="qty_pc-input">Общая зона ПК</label>
                            <input id="qty_pc-input" name="qty_pc" type="text" placeholder="Количество" required>
                        </div>

                        <div class="form-group">
                            <div class="checkbox_qty_wrapper">
                                <input type="radio" name="dich" value="kruglosutochno" data-activate-block='[data-block="dich"]'>
                                <input type="radio" name="dich" value="ne-kruglosutochno" data-disable-block='[data-block="dich"]' checked>
                            </div>
                            <div class="input_wrapper" data-block="dich">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis fugiat labore nam non omnis quia quod quos! Dolor, et ipsa nemo nisi pariatur,
                                    perferendis perspiciatis quam quisquam quo sint veniam.</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="checkbox_qty_wrapper">
                                <label>
                                    <input type="checkbox" name="console" data-toggle-block='[data-block="console"]' checked>
                                    <span class="activator"><span></span></span>
                                    <span>Консоли</span>
                                </label>
                            </div>
                            <div class="input_wrapper" data-block="console">
                                <input id="qty_console-input" name="qty_console" type="text" placeholder="Количество" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox_qty_wrapper">
                                <label>
                                    <input type="checkbox" name="vip_pc" data-toggle-block='[data-block="vip_pc"]'>
                                    <span class="activator"><span></span></span>
                                    <span>ПК в VIP</span>
                                </label>
                            </div>
                            <div class="input_wrapper" data-block="vip_pc">
                                <input id="qty_vip-input" name="qty_vip_pc" type="text" placeholder="Количество" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox_qty_wrapper">
                                <label>
                                    <input type="checkbox" name="food_drinks" data-toggle-block='[data-block="food_drinks"]'>
                                    <span class="activator"><span></span></span>
                                    <span>Еда и напитки</span>
                                </label>
                            </div>
                            <div class="input_wrapper" data-block="food_drinks">
                                <input id="qty_food-input" name="qty_food_drinks" type="text" placeholder="Количество" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox_qty_wrapper">
                                <label>
                                    <input type="checkbox" name="vr" data-toggle-block='[data-block="vr"]'>
                                    <span class="activator"><span></span></span>
                                    <span>VR</span>
                                </label>
                            </div>
                            <div class="input_wrapper" data-block="vr">
                                <input id="qty_vr-input" name="qty_vr" type="text" placeholder="Количество" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox_qty_wrapper">
                                <label>
                                    <input type="checkbox" name="simulator" data-toggle-block='[data-block="simulator"]'>
                                    <span class="activator"><span></span></span>
                                    <span>Автосимулятор</span>
                                </label>
                            </div>
                            <div class="input_wrapper" data-block="simulator">
                                <input id="qty_simulator-input" name="qty_simulator" type="text" placeholder="Количество" required>
                            </div>
                        </div>
                    </div>
                    <div class="form_tab tab3" data-next-button-text="Предпросмотр">
                        <div class="form_tab_title">
                            3. Выберите дополнительные услуги, предоставляемые вашим клубом
                        </div>
                        <div class="checkbox_wrapper">
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="hookah">
                                    <span class="activator"><span></span></span>
                                    <span>Есть кальяны</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="streamer">
                                    <span class="activator"><span></span></span>
                                    <span>Есть стримерская</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="alcohol">
                                    <span class="activator"><span></span></span>
                                    <span>Есть алкоголь в продаже</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="with_own_device">
                                    <span class="activator"><span></span></span>
                                    <span>Можно со своими девайсами</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="bathroom">
                                    <span class="activator"><span></span></span>
                                    <span>Есть санузел</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="club_account">
                                    <span class="activator"><span></span></span>
                                    <span>Предоставляем клубные аккаунты для гостей</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="checkroom">
                                    <span class="activator"><span></span></span>
                                    <span>Есть гардероб</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="download_app">
                                    <span class="activator"><span></span></span>
                                    <span>Можно скачивать игры и приложения</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="conditioner">
                                    <span class="activator"><span></span></span>
                                    <span>Есть кондиционер</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="smoke">
                                    <span class="activator"><span></span></span>
                                    <span>Можно курить вейпы, электронные сигареты</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="print">
                                    <span class="activator"><span></span></span>
                                    <span>Есть печать документов</span>
                                </label>
                            </div>
                            <div class="checkbox_item">
                                <label>
                                    <input type="checkbox" name="with_own_food">
                                    <span class="activator"><span></span></span>
                                    <span>Можно со своей едой</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form_tab tab7">
                        <div class="form_tab_title">
                            7. Контактная информация
                        </div>
                        <div class="form-group">
                            <label for="club-site-input">Сайт клуба</label>
                            <input id="club-site-input" name="club_site" type="text" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="club-phone-input">Телефон клуба</label>
                            <input id="club-phone-input" name="phone" type="tel" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="club-email-input">Email клуба</label>
                            <input id="club-email-input" name="club_email" type="email" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="club-link-input">Ссылка на клуб (2ГИС, Яндекс.Карты, Google Maps)</label>
                            <input id="club-link-input" name="club_link" type="text" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="club-vk-link-input">Группа ВК</label>
                            <input id="club-vk-link-input" name="club_vk_link" type="text" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="club-instagram-link-input">Instagram</label>
                            <input id="club-instagram-link-input" name="club_instagram_link" type="text" placeholder="" required>
                        </div>
                    </div>
                    <div class="form_tab">
                        <h1>Успешно! отправляй форму</h1>
                    </div>
                </div>
                <div class="form_btn_wrapper">
                    <button type="button" data-role="save-draft">Сохранить как черновик</button>
                    <button type="button" data-role="prev-tab-button">Назад</button>
                    <button type="button" data-role="next-tab-button">Продолжить</button>
                    <button type="submit">Подтвердить отправку</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--MODALS END-->
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.footer.php");
?>
