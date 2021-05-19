<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.header.php");
?>
<section class="club_page_main_info_wrapper" data-track-sticky>
    <div class="container">
        <div class="club_page_main_info_top">
            <div class="main_info_title approve">
                <span>F5 центр киберспорта</span>
            </div>
            <div class="main_info_btn_wrapper">
                <button type="button" class="club_calling" data-remodal-target="club_phone_modal">Позвонить</button>
            </div>
        </div>
        <div class="club_page_main_info_bottom">
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
            <div class="club_distance">
                <img src="/img/walk-black.svg" alt="icon">
                <span>5 км. от вас</span>
            </div>
        </div>
    </div>
</section>

<section class="club_page_content_wrapper">
    <div class="club_page_photo_wrapper">
        <div class="container">
            <div class="club_page_photo_list">
                <div class="club_page_photo_item">
                    <img src="img/img1.png" alt="image">
                </div>
                <div class="club_page_photo_item">
                    <img src="img/img2.png" alt="image">
                </div>
                <div class="club_page_photo_item">
                    <img src="img/img3.png" alt="image">
                </div>
                <div class="club_page_photo_item">
                    <img src="img/img4.png" alt="image">
                </div>
                <div class="club_page_photo_item">
                    <img src="img/img5.png" alt="image">
                </div>
                <button type="button" data-remodal-target="club_photo_modal">Показать все фото</button>
            </div>
        </div>
    </div>
   <div class="club_page_services_wrapper">
       <div class="container">
           <div class="club_page_title">
               <span>Услуги</span>
           </div>
           <div class="club_page_services_list">
               <div class="club_page_services_item">
                   <img src="/img/icons/pc.svg" alt="icons">
                   <span>40 компьютеров</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/playstation.svg" alt="icons">
                   <span>4 консоли PS4</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/vip-black.svg" alt="icons">
                   <span>10 компьютеров</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/club-fastfood.svg" alt="icons">
                   <span>Горячее питание</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/vr.svg" alt="icons">
                   <span>2 устройства</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/drive.svg" alt="icons">
                   <span>1 устройство</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/hook.svg" alt="icons">
                   <span>Кальян</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/alcohol.svg" alt="icons">
                   <span>Алкоголь</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/toilet.svg" alt="icons">
                   <span>Санузел</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/cloakroom.svg" alt="icons">
                   <span>Гардероб</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/wpf.svg" alt="icons">
                   <span>Кондиционер</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/printer.svg" alt="icons">
                   <span>Принтер</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/record.svg" alt="icons">
                   <span>Стримерская</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/account1.svg" alt="icons">
                   <span>Клубные аккаунты</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/download.svg" alt="icons">
                   <span>Можно скачивать игры и приложения</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/smoke.svg" alt="icons">
                   <span>Можно курить вейпы, электронные сигареты</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/keyboard.svg" alt="icons">
                   <span>Можно со своими девайсами</span>
               </div>
               <div class="club_page_services_item">
                   <img src="/img/icons/fastfood.svg" alt="icons">
                   <span>Можно со своей едой</span>
               </div>
           </div>
       </div>
   </div>
    <div class="club_page_prices_wrapper">
        <div class="container">
            <div class="club_page_title">
                <span>Цены</span>
            </div>
            <div class="club_page_prices">
                <div class="club_page_min_price">
                    Стоимость аренды от 80₽/час
                </div>
                <button type="button" class="show_price_list" data-remodal-target="club_price_list_modal">Посмотреть прайс-лист</button>
            </div>
        </div>
    </div>
    <div class="club_page_marketing_event_wrapper">
        <div class="container">
            <div class="marketing_event_title">
                <span>Акции</span>
            </div>

            <div class="club_page_marketing_event_list">
                <ul>
                    <li>При оплате пакета 3 часа - RedBull в подарок!</li>
                    <li>Новым клиентам - 500 рублей на бонусный счёт при полной регистрации в клубе!</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="club_page_payment_wrapper">
        <div class="container">
            <div class="club_page_payment_title">
                <span>Cпособы оплаты</span>
            </div>
            <div class="club_page_payment_list">
                <div class="club_page_payment_item">
                    <span>Наличные</span>
                </div>
                <div class="club_page_payment_item">
                    <span>Карты</span>
                </div>
                <div class="club_page_payment_item">
                    <span>Online-перевод</span>
                </div>
                <div class="club_page_payment_item">
                    <span>Web-кошельки</span>
                </div>
                <div class="club_page_payment_item">
                    <span>По счёту</span>
                </div>

            </div>
        </div>
    </div>
    <div class="club_page_pc_configuration_wrapper toggle_block_wrapper">
        <div class="container">
            <div class="club_page_title club_page_toggle_content">
                <span>Конфигурация компьютеров</span>
            </div>
            <div class="club_page_pc_configuration_list toggle_block">
                <div class="table_wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Оборудование</th>
                                <th>Общий зал</th>
                                <th>VIP</th>
                                <th>VIP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Процессор</td>
                                <td>i5 9600</td>
                                <td>i7 9700</td>
                                <td>i7 9700</td>
                            </tr>
                            <tr>
                                <td>Видеокарта</td>
                                <td>Nvidia RTX 2060</td>
                                <td>Nvidia RTX 2080</td>
                                <td>Nvidia RTX 2080</td>
                            </tr>
                            <tr>
                                <td>Оперативная память</td>
                                <td>16 GB DRR4</td>
                                <td>32 GB DRR4</td>
                                <td>32 GB DRR4</td>
                            </tr>
                            <tr>
                                <td>Жёсткий диск</td>
                                <td>SSD 512гб</td>
                                <td>SSD 1тб</td>
                                <td>SSD 1тб</td>
                            </tr>
                            <tr>
                                <td>Клавиатура</td>
                                <td>Logitech</td>
                                <td>Logitech</td>
                                <td>Logitech</td>
                            </tr>
                            <tr>
                                <td>Мышь</td>
                                <td>Logitech</td>
                                <td>Logitech</td>
                                <td>Logitech</td>
                            </tr>
                            <tr>
                                <td>Гарнитура</td>
                                <td>Logitech</td>
                                <td>Logitech</td>
                                <td>Logitech</td>
                            </tr>
                            <tr>
                                <td>Кресло</td>
                                <td>DxRacer</td>
                                <td>DxRacer</td>
                                <td>DxRacer</td>
                            </tr>
                            <tr>
                                <td>Монитор</td>
                                <td>27’ 240 Гц</td>
                                <td>27’ 360 Гц</td>
                                <td>27’ 360 Гц</td>
                            </tr>
                            <tr>
                                <td>Интернет</td>
                                <td>1 Гбит/с</td>
                                <td>1 Гбит/с</td>
                                <td>1 Гбит/с</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="club_page_map_wrapper">
        <div class="container">
            <div class="club_page_title">
                <span>Расположение</span>
            </div>
            <div class="club_page_map" id="club_page_map"></div>
        </div>
    </div>
    <div class="club_page_reviews_wrapper">
        <div class="container">
            <div class="club_page_title">
                <span>Отзывы</span>
            </div>
            <div class="club_page_reviews">
                <div class="club_page_reviews_list">
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                    <div class="club_page_reviews_item">
                        <div class="user_info">
                            <div class="user_avatar">
                                <img src="/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="user_name">
                                Федор Лукин
                            </div>
                        </div>
                        <div class="rating_wrapper">
                            <div class="rating_stars">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                                <img src="/img/star.svg" alt="star">
                            </div>
                        </div>
                        <div class="review_content_wrapper">
                            <div class="review_content">
                                Мощная аппаратура, тянет все игры, часто здесь бываю и один, и с компанией.
                                Отличный вариант отдыха после работы для любителей игр.
                                Располагающая атмосфера, приятный персонал, много единомышленников, даже если пришёл один
                                - без компании не останешься. Мне нравится бывать в этом клубе, цены не завышены.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="club_page_description_wrapper">
        <div class="container">
            <div class="club_page_title">
                <span>Описание</span>
            </div>
            <div class="club_page_description">
                <p>
                    Сеть клубов F5 Центр Киберспорта - настоящий рай для любитиелей онлайн-игр и ценителей экстравагантного отдыха!
                    В компании друзей и единомышленников Вы окунетесь в виртуальную атмосферу, сразитесь с онлайн противником и весело проведете время.
                    Мы создали комфортные киберспортивные клубы, отвечающие актуальным тенденциям в игровой индустрии. Залы всех клубов оснащены восокпроизводительными
                    компьютерами, огромными мониторами и уютными креслами DXRacer. Мы внимательно следим за игровыми новинками и имеем огромную коллекцию классических игр.
                    Наши посетители могут сразиться с виртуальным соперником как в одиночку, так и дружной компанией,
                    и насладться атмосферой первоклассной игры в Dota 2, Counter-Strike: Global Offensive, Overwatch, League of Legends, PlayerUnknown’s
                    Battleplaygrounds и другие ощущения от игры!
                </p>
            </div>
        </div>
    </div>
    <div class="club_page_contacts_wrapper toggle_block_wrapper">
        <div class="container">
            <div class="club_page_title club_page_toggle_content">
                <span>Контактная информация</span>
            </div>
            <div class="club_page_contacts_list toggle_block">
                <div class="club_page_contacts_list_title">График работы</div>
                <div class="club_page_schedule">
                    <div class="club_page_schedule_item">
                        <span>Понедельник</span>
                        <span>8:00-00:00</span>
                    </div>
                    <div class="club_page_schedule_item">
                        <span>Вторник</span>
                        <span>8:00-00:00</span>
                    </div>
                    <div class="club_page_schedule_item">
                        <span>Среда</span>
                        <span>8:00-00:00</span>
                    </div>
                    <div class="club_page_schedule_item">
                        <span>Четверг</span>
                        <span>8:00-00:00</span>
                    </div>
                    <div class="club_page_schedule_item">
                        <span>Пятница</span>
                        <span>8:00-00:00</span>
                    </div>
                    <div class="club_page_schedule_item">
                        <span>Суббота</span>
                        <span>8:00-00:00</span>
                    </div>
                    <div class="club_page_schedule_item">
                        <span>Воскресенье</span>
                        <span>8:00-00:00</span>
                    </div>
                </div>
                <div class="club_page_contacts_list_title">Контакты</div>
                <div class="club_page_contacts_item">

                    <div class="club_city">
                        <span>Москва</span>
                    </div>
                </div>
                <div class="club_page_contacts_item">
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
                </div>
                <div class="club_page_contacts_item">
                    <div class="club_contact">
                        <img src="/img/phone.svg" alt="phone">
                        <a href="tel:+79999999999">+7(999)999-99-99</a>
                    </div>
                </div>
                <div class="club_page_contacts_item">
                    <div class="club_contact">
                    <img src="/img/mail.svg" alt="email">
                    <a href="mailto:admin@f5center.com">admin@f5center.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/modals.php");
?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.footer.php");
?>
