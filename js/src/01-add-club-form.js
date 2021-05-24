jQuery(function() {
    let $form = jQuery('#add-club-form'),
        $save_draft = $form.find('.save_draft'),
        $club_photo_hidden_input = jQuery('#club_photos_input'),
        $club_photo_file_input = jQuery('#add-photo-input'),
        $club_price_file_input = jQuery('#add-price-file-input'),
        $club_price_hidden_input = jQuery('#add-price-file-hidden-input'),
        $club_price_file_text = jQuery('#add-price-file-text');

    if ($form.length === 0) {
        return;
    }

    $save_draft.on('click', function(e) {
        jQuery.ajax({
            type: 'POST',
            url: '',
            data: $form.serialize(),
            success: function() {
                jQuery('[data-remodal-id="success_modal"]').remodal().open();
            }
        });
    });

    $form.on('submit', function(e) {
        e.preventDefault();

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: $form.serialize(),
            success: function() {
                jQuery('[data-remodal-id="success_modal"]').remodal().open();
            }
        });
    });

    $club_price_file_input.on('change', function(e) {
        if (this.files.length === 0) {
            $club_price_hidden_input.val('');
            $club_price_file_text.text('Загрузить файл');
            return;
        }

        upload_file(this.files[0]).then(data => {
            $club_price_hidden_input.val(data);
            $club_price_file_text.text('Файл загружен');
        });
    });

    (() => {
        let files = $club_photo_hidden_input.val().split(':').filter(x => !!x);

        $club_photo_file_input.on('change', function() {
            for (let file of this.files) {
                upload_file(file).then(data => {
                    addFile(data);
                });
            }

            setTimeout(() => $club_photo_file_input.attr('type', 'hidden'), 0);
            setTimeout(() => $club_photo_file_input.attr('type', 'file'), 50);
        });

        $form.on('click', '.add_photo_item .remove_photo', function(e) {
            e.preventDefault();

            let $this = jQuery(this),
                $item = $this.closest('.add_photo_item'),
                $img = $item.find('img'),
                path = $img.attr('src');

            removeFile(path);
        });

        renderFiles();

        function addFile(path) {
            files.push(path);

            renderFiles();
        }

        function removeFile(path) {
            files.splice(files.indexOf(path), 1);

            renderFiles();
        }

        function renderFiles() {
            $club_photo_hidden_input.val(files.join(':'));

            jQuery('.add_photo_item').each(function(index) {
                let $this = jQuery(this);

                if (files[index]) {
                    let path = files[index];

                    $this.html(`
<img src="${path}"/>
<a href="#" class="remove_photo"></a>
`);
                } else {
                    $this.empty();
                }
            });
        }
    })();

    function upload_file(file) {
        return new Promise((resolve, reject) => {
            let formData = new FormData();

            formData.append('file', file, file.name);

            jQuery.ajax({
                url: '/upload.php',
                method: 'post',
                data: formData,
                processData: false,
                contentType: false,
                success: function({data, error}) {
                    if (error) {
                        return reject(error);
                    }

                    resolve(data);
                }
            });
        });
    }
});