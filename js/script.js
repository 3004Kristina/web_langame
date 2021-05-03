jQuery(function() {
    /**
     * Global plugins
     */
    (() => {
        jQuery('.select2_wrapper select').each(function() {
            let $this = jQuery(this);

            $this.select2({
                minimumResultsForSearch: Infinity,
                dropdownParent: $this.closest('.select2_wrapper'),
                width: '100%'
            });
        });
    })();

    /**
     * Toggle blocks by checkbox and radio buttons
     */
    (() => {
        jQuery('input[type="checkbox"][data-toggle-block]')
            .on('change init', function(e) {
                let $this = jQuery(this),
                    selector = $this.data('toggle-block'),
                    state = this.checked;

                blockToggle(selector, state);
            })
            .trigger('init');

        jQuery('input[type="radio"][data-activate-block]')
            .on('change init', function(e) {
                let $this = jQuery(this),
                    selector = $this.data('activate-block');

                blockToggle(selector, true);
            })
            .filter(':checked')
            .trigger('init');

        jQuery('input[type="radio"][data-disable-block]')
            .on('change init', function(e) {
                let $this = jQuery(this),
                    selector = $this.data('disable-block');

                blockToggle(selector, false);
            })
            .filter(':checked')
            .trigger('init');

        /**
         * @param {String} selector
         * @param {Boolean} state
         */
        function blockToggle(selector, state) {
            jQuery(selector).each(function() {
                let $block = jQuery(this);

                $block.toggleClass('block_active', state);
                $block.toggleClass('block_disabled', !state);

                $block.find('input, select, textarea').each(function() {
                    let $input = jQuery(this);

                    $input.prop('disabled', !state);
                });
            });
        }
    })();

    jQuery('#add-club-form').formWizard({
        inputWrapperSelector: '.form-group',
        inputErrorSelector: '.error',
        submitButtonSelector: '[type="submit"]',
        prevButtonSelector: '[data-role="prev-tab-button"]',
        prevButtonText: 'Назад',
        nextButtonSelector: '[data-role="next-tab-button"]',
        nextButtonText: 'Продолжить',
        tabSelector: '.form_tab'
    });

    jQuery('input[type="tel"]').inputmask({
        mask: '+7 (999) 999-99-99',
        onincomplete: function() {
            this.value = '';
        }
    });

    jQuery('ul.club_list_navigation_tabs li a').on('click', function(e) {
        e.preventDefault();

        let $this = jQuery(this),
            $tab = jQuery($this.attr('href'));

        if ($this.is('.active')) {
            return;
        }

        jQuery('ul.club_list_navigation_tabs li a.active').removeClass('active');

        $this.addClass('active');
        $tab.show();

        jQuery('.club_list_content_tabs .tab').not($tab).hide();
    });
});
