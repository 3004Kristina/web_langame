<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.header.php");
?>
<!--SECTION ADD CLUB PAGE START-->
<section class="add_club_page_start_wrapper">
<div class="container">
    <div class="add_club_page_start_content">
        <div class="add_club_page_title">
            Добавить клуб
        </div>
        <div class="add_club_start_wrapper">
            <form action="" method="post" id="add-club-start-form">
                <div class="forma">
                    <div class="add_club_start_info">
                        <p>
                            Вы представитель компьютерного клуба, бара, или арены?
                        </p>
                        <p>
                            Добавьте информацию о нём на портал LanGame. Это абсолютно <span class="text_decor">бесплатно!</span>
                        </p>
                    </div>
                    <div class="add_club_start_content">
                        <div class="add_club_start_content_item">
                            <div class="form-group">
                                <label for="add-club-start-input">Номер телефона</label>
                                <input id="add-club-start-input" name="add_club_start_phone" type="tel" placeholder="+7 (___) ___-__-__" required>
                            </div>
                            <div class="checkbox_wrapper">
                                <div class="checkbox_item">
                                    <label>
                                        <input type="checkbox" name="add_club_request_user_agree" required>
                                        <span class="activator"><span></span></span>
                                        <span>Согласен с условиями обработки персональных данных</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add_club_start_content_item">
                            <p>Введите код, отправленный на номер +7 999 832 32 18</p>
                            <div class="code_wrapper">
                                <input type="text" name="add_club_phone_code">
                                <input type="text" name="add_club_phone_code">
                                <input type="text" name="add_club_phone_code">
                                <input type="text" name="add_club_phone_code">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="btn_wrapper">
                    <a href="/log_in.php" class="log_in">Уже есть аккаунт?</a>
                    <button type="submit">Продолжить</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<!--SECTION ADD CLUB PAGE END-->
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.footer.php");
?>
