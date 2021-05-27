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
    <input id="club_photos_input" type="hidden" name="club_photos" value="">
    <div class="add_photo">
        <label>
            <input id="add-photo-input" type="file" multiple accept="image/*">
            <span>Загрузить</span>
        </label>
    </div>
</div>

<div class="add_photo_list">
    <div class="add_photo_item"></div>
    <div class="add_photo_item"></div>
    <div class="add_photo_item"></div>
    <div class="add_photo_item"></div>
    <div class="add_photo_item"></div>
    <div class="add_photo_item"></div>
    <div class="add_photo_item"></div>
    <div class="add_photo_item"></div>
    <div class="add_photo_item"></div>
</div>

<div class="form-group">
    <label for="club-youtube-link-input">Ссылка на ролик YouTube</label>
    <div class="input_wrapper">
        <input id="club-youtube-link-input" name="club_youtube_link" type="text" placeholder="">
        <div class="error"></div>
    </div>
</div>
