jQuery(function() {
    let $firstForm = jQuery('#add-club-start-form'),
        $secondForm = jQuery('#add-club-code-confirm-form'),
        $step_back = $secondForm.find('.step_back'),
        codeFormInterval,
        phoneNumber = null;

    if ($firstForm.length === 0) {
        return;
    }

    $secondForm.find('input[name="code"]').codeInput();

    $firstForm.on('submit', function(e) {
        e.preventDefault();

        phoneNumber = $firstForm.find('input[name="phone"]').val();

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: $firstForm.serialize(),
            success: function() {
                $firstForm.hide();
                $secondForm.find('.user_phone').text(phoneNumber);
                $secondForm.show();
                clearInterval(codeFormInterval);
                startCountDown();
            }
        });
    });

    $secondForm.on('submit', function(e) {
        e.preventDefault();
        jQuery('.code_wrapper .error').text('');

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: $secondForm.serialize(),
            success: function(json) {
                if (json.error) {
                    // ошибка
                    jQuery('.code_wrapper .error').text(json.error);

                } else {
                    // успех
                    // location.href = '/';
                }
            }
        });
    });

    $step_back.on('click', function(e) {
        $secondForm.trigger('reset');
        $secondForm.hide();
        $firstForm.show();
    });

    jQuery('#reSendCode').on('click', function(e) {
        $firstForm.trigger('submit');
    });

    function startCountDown() {
        clearInterval(codeFormInterval);

        let $countdown = jQuery('#countdown'),
            $reSendCode = jQuery('#reSendCode'),
            time = 180;

        $countdown.text(getTimeText(time));

        $reSendCode.addClass('disabled');

        codeFormInterval = setInterval(function() {
            time--;
            $countdown.text(getTimeText(time));
            if (time === 0) {
                $reSendCode.removeClass('disabled');
                $countdown.text(' ');

                clearInterval(codeFormInterval);
            }
        }, 1000);
    }

    function getTimeText(time) {
        var minutes = '' + Math.floor(time / 60),
            seconds = '' + time % 60;

        seconds = seconds.length === 1 ? '0' + seconds : seconds;

        return minutes + ':' + seconds;
    }
});