<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.header.php");
?>
<!--SECTION LOG IN PAGE START-->
<section class="log_in_page_wrapper">
    <div class="container">
        <div class="log_in_page_content">
            <div class="log_in_page_title">
                Вход в личный кабинет
            </div>
            <div class="log_in_wrapper">
                <form action="" method="post" id="log-in-form">
                    <div class="forma">
                        <div class="form-group">
                            <label for="log-in-phone-input">Номер телефона</label>
                            <input id="log-in-phone-input" name="log_in_phone" type="tel" placeholder="+7 (___) ___-__-__" required>
                            <div class="error"></div>
                        </div>
                        <div class="form-group">
                            <label for="log-in-password-input">Пароль</label>
                            <div class="input_wrapper">
                                <input id="log-in-password-input" name="log_in_password" type="password" placeholder="" required>
                                <a href="/password_recovery.php" class="forgot_password">Забыл пароль</a>
                            </div>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="btn_wrapper">
                        <a href="/add_club.php" class="registration">Регистрация</a>
                        <button type="submit">Продолжить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--SECTION LOG IN PAGE END-->
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.footer.php");
?>
