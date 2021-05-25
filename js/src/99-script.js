jQuery(function() {

    Layout.initSelect2();

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

    /**
     * Configuration tabs
     */
    (() => {
        let $configuration = jQuery('[data-role="pc-configuration"]'),
            $navs = $configuration.find('[data-role="pc-configuration-nav"]'),
            $tabs = $configuration.find('[data-role="pc-configuration-tabs"]'),
            $tab_tpl = jQuery('#configuration-tab-template'),
            $create_tab_button = $configuration.find('[data-role="pc-configuration-create-tab"]'),
            tab_tpl_html = $tab_tpl.html(),
            tab_count = $tabs.find('[data-role="pc-configuration-tab"]').length,
            last_tab_index = tab_count - 1,
            active_tab_index = last_tab_index;

        if ($configuration.length === 0) {
            return;
        }

        $create_tab_button.on('click', function(e) {
            e.preventDefault();

            add_tab();
        });

        $configuration.on('click', '[data-show-tab]', function(e) {
            e.preventDefault();

            let $this = jQuery(this),
                tab = $this.data('show-tab');

            show_tab(tab);
        });

        $configuration.on('click', '[data-remove-tab]', function(e) {
            e.preventDefault();

            let $this = jQuery(this),
                tab = $this.data('remove-tab');

            remove_tab(tab);
        });

        function add_tab() {
            let tab_index = last_tab_index + 1,
                tab_html = generate_tab_html(tab_index);

            $tabs.append(tab_html);
            $navs.append(`
                <li data-nav-tab="${tab_index}">
                    <a href="#" data-show-tab="${tab_index}"></a>
                    <button type="button" data-remove-tab="${tab_index}"></button>
                </li>
            `);

            Layout.initSelect2();

            show_tab(tab_index);

            last_tab_index = tab_index;

            ++tab_count;

            $create_tab_button.prop('disabled', tab_count >= 5);
        }

        function remove_tab(index) {
            $navs.find(`[data-nav-tab="${index}"]`).remove();
            $tabs.find(`[data-tab="${index}"]`).remove();

            if (active_tab_index === index) {
                show_tab(0);
            }

            --tab_count;

            $create_tab_button.prop('disabled', tab_count >= 5);
        }

        function show_tab(index) {
            $tabs
                .find('[data-tab]')
                .removeClass('active')
                .filter(`[data-tab="${index}"]`)
                .addClass('active');

            $navs
                .find('[data-show-tab]')
                .removeClass('active')
                .filter(`[data-show-tab="${index}"]`)
                .addClass('active');

            active_tab_index = index;
        }

        function generate_tab_html(index) {
            return tab_tpl_html.replace(/\{n\}/g, `${index}`);
        }
    })();

    /**
     * Add marketing event
     */
    (() => {
        let add_button = jQuery('[data-role="marketing-event-add-tab"]'),
            parent_list = jQuery('.marketing_event .marketing_event_list'),
            index = parent_list.find('.form-group').length;


        add_button.on('click', function(e) {
            ++index;
            parent_list.append(`
             <div class="form-group" >
                <label for="marketing-event-input[${index}]">Акция №</label>
                <div class="input_wrapper" >
                    <input id="marketing-event-input[${index}]" name="marketing_event_descr[]" type="text" placeholder="Описание акции" required>
                    <div class="error"></div>
                </div>
                <button type="button" data-role-remove-marketing-event></button>
            </div>
            `);
            add_button.prop('disabled', index >= 5);
        });

        parent_list.on('click', '[data-role-remove-marketing-event]', function(e) {
            e.preventDefault();
            jQuery(this).closest('.form-group').remove();
            --index;
            add_button.prop('disabled', index >= 5);
        });
    })();

    /**
     * Scroll page handlers
     */
    (() => {
        jQuery(window).on('scroll resize', function() {
            jQuery('[data-track-sticky]').each(function() {
                let $this = jQuery(this),
                    y = this.getBoundingClientRect().y;

                $this
                    .toggleClass('sticky', y === 0)
                    .toggleClass('not-sticky', y !== 0);
            });
        });
    })();

    jQuery('.club_page_services_list .club_services_mobile_toggle').on('click', function(e) {
        jQuery(this).toggleClass('active')
            .closest('.club_page_services_list').toggleClass('mob_toggle')
            .find('.mob_hide').toggleClass('active');
    });

    jQuery('#add-club-form').formWizard({
        inputWrapperSelector: '.form-group',
        inputErrorSelector: '.error',
        submitButtonSelector: '[type="submit"]',
        prevButtonSelector: '[data-role="prev-tab-button"]',
        prevButtonText: 'Назад',
        nextButtonSelector: '[data-role="next-tab-button"]',
        nextButtonText: 'Продолжить',
        tabSelector: '.form_tab'
    }).on('show-tab', function(e, tabIndex) {
        jQuery('.person_add_club_modal_wrapper .remodal-wrapper').stop().animate({scrollTop: 0}, 300);
    });

    jQuery('input[type="tel"]').inputmask({
        mask: '+7 (999) 999-99-99',

        onincomplete: function() {
            this.value = '';
        }
    });

    jQuery('input[type="number"]').on('input change', function(e) {
        let input_val = +jQuery(this).val();

        if (input_val <= 0 || isNaN(input_val)){
            jQuery(this).val('');
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

    jQuery('.club_page_toggle_content').on('click', function(e) {
        jQuery(this).closest('.toggle_block_wrapper').find('.toggle_block').toggle();
        jQuery(this).toggleClass('active');
    });

    jQuery('.review_content_wrapper').scrollbar();

    jQuery('.person_add_club_modal').remodal({
        appendTo: jQuery('.person_add_club_modal_wrapper'),
        hashTracking: false
    });

    jQuery('.show_club_price_list_modal').remodal({
        appendTo: jQuery('.club_page_modals_wrapper'),
        hashTracking: false,
        closeOnOutsideClick: false
    });

    jQuery('.show_club_photo_modal').remodal({
        appendTo: jQuery('.club_page_modals_wrapper'),
        hashTracking: false,
        closeOnOutsideClick: false
    });

    jQuery('.club_page_reviews_list').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        variableWidth: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow"><img src="../../img/left1.svg" alt="arrow"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow"><img src="../../img/right1.svg" alt="arrow"></button>',
        responsive: [
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
