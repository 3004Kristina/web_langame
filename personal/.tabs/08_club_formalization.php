<?php

declare(strict_types=1);

?>

<div class="form_tab_title">
    8. Оформление
</div>

<div class="form-group descr">
    <label for="club-descr-input">Описание клуба</label>
    <div class="input_wrapper">
        <textarea name="club_description" id="club-descr-input" maxlength="1500"></textarea>
        <div class="error"></div>
    </div>
</div>

<div class="add_photo_wrapper">
    <div class="add_photo_title">Фото</div>
    <div class="add_photo_list">
        <div class="add_photo_item"></div>
        <div class="add_photo_item">2</div>
        <div class="add_photo_item">3</div>
        <div class="add_photo_item">4</div>
        <div class="add_photo_item">5</div>
        <div class="add_photo_item">6</div>
        <div class="add_photo_item">7</div>
        <div class="add_photo_item">8</div>
        <div class="add_photo_item">9</div>
    </div>
    <div class="add_photo">
        <label>
            <input id="add-photo-input" name="add_club_photo" type="file">
            <span>Загрузить</span>
        </label>
    </div>
</div>

<div class="form-group">
    <label for="club-youtube-link-input">Ссылка на ролик YouTube</label>
    <div class="input_wrapper">
        <input id="club-youtube-link-input" name="club_youtube_link" type="text" placeholder="">
        <div class="error"></div>
    </div>
</div>
