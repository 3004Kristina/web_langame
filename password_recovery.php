<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.header.php");
?>
<!--SECTION PASSWORD RECOVERY PAGE START-->
<section class="password_recovery_page_wrapper">
    <div class="container">
        <div class="password_recovery_content">
            <div class="password_recovery_title">
                Забыли пароль?
            </div>
            <div class="password_recovery_wrapper">
                <form action="" method="post" id="password-recovery-form">
                    <div class="forma">
                        <div class="form-group">
                            <label for="password-recovery-input">Email</label>
                            <input id="password-recovery-input" name="email" type="email" placeholder="" required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="btn_wrapper">
                        <a href="/log_in.php" class="step_back">Назад</a>
                        <button type="submit">Восстановление пароля</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--SECTION PASSWORD RECOVERY PAGE END-->
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/.footer.php");
?>
