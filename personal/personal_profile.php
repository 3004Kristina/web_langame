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
                    <a href="/personal/personal_profile.php" class="active">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-svg-account"></use>
                        </svg>
                        <span>Профиль</span>
                    </a>
                    <a href="/personal/personal_club_list.php">
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
                <div class="user_profile_form_wrapper">
                    <form action="" method="post" id="user-profile-form">
                        <div class="forma">
                            <div class="form-group">
                                <label for="user-name-input">ФИО представителя</label>
                                <input id="user-name-input" name="name" type="text" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="user-phone-input">Контактный телефон</label>
                                <input id="user-phone-input" name="phone" type="tel" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label for="user-email-input">Email</label>
                                <input id="user-email-input" name="email" type="email" placeholder="" required>
                            </div>

                        <div class="form-group">
                            <label for="user-position-input">Должность представителя</label>
                            <div class="select2_wrapper select_user_position_wrapper">
                                <select id="user-position-input" name="user_position" class="select2_input">
                                    <option value="1">Выбрать из списка</option>
                                    <option value="2">Директор</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group password">
                            <label for="user-password-input">Сменить пароль</label>

                            <div class="user_password">
                                <input id="user-password-input" name="password" type="password" placeholder="Новый пароль" required>
                                <input id="user-password-again-input" name="password" type="password" placeholder="Повторите" required>
                            </div>
                        </div>
                        </div>
                        <button type="submit" class="user_profile_submit">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION PERSONAL PAGE END-->

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.footer.php");
?>
