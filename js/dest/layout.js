jQuery(function(){let s=jQuery("#add-club-form"),e=s.find(".save_draft"),n=jQuery("#club_photos_input"),r=jQuery("#main_preview_photo_input"),o=jQuery("#add-photo-input"),a=jQuery("#add-price-file-input"),i=jQuery("#add-price-file-hidden-input"),l=jQuery("#add-price-file-text"),c=jQuery("#add_photo_preview"),d=jQuery("#add_photo_list");if(0!==s.length){let t=s.formWizard({inputWrapperSelector:".form-group",inputErrorSelector:".error",submitButtonSelector:'[type="submit"]',prevButtonSelector:'[data-role="prev-tab-button"]',prevButtonText:"Назад",nextButtonSelector:'[data-role="next-tab-button"]',nextButtonText:"Продолжить",tabSelector:".form_tab"});function p(t){return new Promise((n,r)=>{let e=new FormData;e.append("file",t,t.name),jQuery.ajax({url:"/upload.php",method:"post",data:e,processData:!1,contentType:!1,success:function({data:e,error:t}){if(t)return r(t);n(e)}})})}function u(e,t){jQuery(e).each(function(){let e=jQuery(this);e.toggleClass("block_active",t),e.toggleClass("block_disabled",!t),e.find("input, select, textarea").each(function(){let e=jQuery(this);e.prop("disabled",!t)})})}s.on("keydown","input",function(e){"Enter"===e.key&&(e.preventDefault(),t.goToNextTab())}),s.on("show-tab",function(e,t){jQuery(".person_add_club_modal_wrapper .remodal-wrapper").stop().animate({scrollTop:0},300)}),e.on("click",function(e){jQuery.ajax({type:"POST",url:"",data:s.serialize(),success:function(){jQuery('[data-remodal-id="success_modal"]').remodal().open()}})}),s.on("submit",function(e){e.preventDefault(),jQuery.ajax({type:"POST",url:"",data:s.serialize(),success:function(){jQuery('[data-remodal-id="success_modal"]').remodal().open()}})}),a.on("change",function(e){return 0===this.files.length?(i.val(""),void l.text("Загрузить файл")):void p(this.files[0]).then(e=>{i.val(e),l.text("Файл загружен")})}),(()=>{let a=n.val().split(":").filter(e=>!!e),i=r.val();function l(){n.val(a.join(":")),r.val(i||""),i?c.html(`<img src="${i}"/>`):c.empty(),d.empty(),a.forEach(e=>{d.append(`
<div class="add_photo_item">
    <img src="${e}"/>
    <a href="#" class="remove_photo"></a>
</div>
`)})}function u(e){i=e}o.on("change",function(){let e=a.length;for(var t of this.files){if(10<=e)break;++e,p(t).then(e=>{!function(e){a.push(e),i||u(e);l()}(e)})}setTimeout(()=>o.attr("type","hidden"),0),setTimeout(()=>o.attr("type","file"),50)}),s.on("click",".add_photo_item .remove_photo",function(e){e.preventDefault();let t=jQuery(this),n=t.closest(".add_photo_item"),r=n.find("img"),o=r.attr("src");!function(e){a.splice(a.indexOf(e),1),e===i&&u(0<a.length?a[0]:null);l()}(o)}),s.on("click",".add_photo_item img",function(e){e.preventDefault();let t=jQuery(this),n=t.attr("src");u(n),l()}),l()})(),(()=>{let e=jQuery(".form_tab_04_schedule"),t=jQuery("input[data-week-schedule]"),n=jQuery("input[data-day-schedule]");e.on("change","input",function(e){0===n.filter(":checked").length&&t.is(":checked")?(jQuery(".next_btn, .prev_btn").prop("disabled",!0),jQuery(".work_time_wrapper .error").text("Необходимо заполнить хотя бы один день")):(jQuery(".next_btn, .prev_btn").prop("disabled",!1),jQuery(".work_time_wrapper .error").text(""))})})(),(()=>{let e=jQuery(".form_tab_06_price"),t=jQuery("input[data-payment-method]");e.on("change","input",function(e){0===t.filter(":checked").length?(jQuery(".next_btn, .prev_btn").prop("disabled",!0),jQuery(".payment_method_wrapper .error").text("Необходимо выбрать хотя бы один способ оплаты")):(jQuery(".next_btn, .prev_btn").prop("disabled",!1),jQuery(".payment_method_wrapper .error").text(""))})})(),jQuery('input[type="checkbox"][data-toggle-block]').on("change init",function(e){let t=jQuery(this),n=t.data("toggle-block"),r=this.checked;u(n,r)}).trigger("init"),jQuery('input[type="radio"][data-activate-block]').on("change init",function(e){let t=jQuery(this),n=t.data("activate-block");u(n,!0)}).filter(":checked").trigger("init"),jQuery('input[type="radio"][data-disable-block]').on("change init",function(e){let t=jQuery(this),n=t.data("disable-block");u(n,!1)}).filter(":checked").trigger("init"),(()=>{let t=jQuery('[data-role="pc-configuration"]'),r=t.find('[data-role="pc-configuration-nav"]'),o=t.find('[data-role="pc-configuration-tabs"]'),e=jQuery("#configuration-tab-template"),a=t.find('[data-role="pc-configuration-create-tab"]'),n=e.html(),i=o.find('[data-role="pc-configuration-tab"]').length,l=i-1,u=l;function c(e){o.find("[data-tab]").removeClass("active").filter(`[data-tab="${e}"]`).addClass("active"),r.find("[data-show-tab]").removeClass("active").filter(`[data-show-tab="${e}"]`).addClass("active"),u=e}0!==t.length&&(a.on("click",function(e){var t;e.preventDefault(),t=l+1,e=function(e){return n.replace(/\{n\}/g,`${e}`)}(t),o.append(e),r.append(`
                <li data-nav-tab="${t}">
                    <a href="#" data-show-tab="${t}"></a>
                    <button type="button" data-remove-tab="${t}"></button>
                </li>
            `),Layout.initSelect2(),c(t),l=t,++i,a.prop("disabled",5<=i)}),t.on("click","[data-show-tab]",function(e){e.preventDefault();let t=jQuery(this),n=t.data("show-tab");c(n)}),t.on("click","[data-remove-tab]",function(e){e.preventDefault();let t=jQuery(this),n=t.data("remove-tab");!function(e){r.find(`[data-nav-tab="${e}"]`).remove(),o.find(`[data-tab="${e}"]`).remove(),u===e&&c(0);--i,a.prop("disabled",5<=i)}(n)}),s.on("error-tab",function(){if(t.is(":visible")){let e=t.find(".tab .form-group.has-error").eq(0).closest(".tab");c(e.data("tab"))}}))})(),(()=>{let t=jQuery('[data-role="marketing-event-add-tab"]'),n=jQuery(".marketing_event .marketing_event_list"),r=n.find(".form-group").length;t.on("click",function(e){++r,n.append(`
             <div class="form-group" >
                <label for="marketing-event-input[${r}]">Акция №</label>
                <div class="input_wrapper" >
                    <input id="marketing-event-input[${r}]" name="marketing_event_descr[]" type="text" placeholder="Описание акции" required>
                    <div class="error"></div>
                </div>
                <button type="button" data-role-remove-marketing-event></button>
            </div>
            `),t.prop("disabled",5<=r)}),n.on("click","[data-role-remove-marketing-event]",function(e){e.preventDefault(),jQuery(this).closest(".form-group").remove(),--r,t.prop("disabled",5<=r)})})(),jQuery(window).on("scroll resize",function(){jQuery("[data-track-sticky]").each(function(){let e=jQuery(this),t=this.getBoundingClientRect().y;e.toggleClass("sticky",0===t).toggleClass("not-sticky",0!==t)})})}}),(()=>{const r=[112,48,96,113,49,97,114,50,98,115,51,99,116,52,100,117,53,101,118,54,102,119,55,103,120,56,104,121,57,105,122,123,8,9,46,13];jQuery.fn.extend({codeInput(e={}){let t=e.inputCount||4,n=e.inputWrapperClass||"code_input_wrapper";jQuery(this).each(function(){let o=jQuery(this),a=jQuery(`<div class="${n}"></div>`);for(let e=0;e<t;++e){let e=jQuery('<input type="text" maxlength="1">');e.on("keydown",function(e){var t=e.keyCode||e.which;-1===r.indexOf(t)&&e.preventDefault()}),e.on("keyup input",function(e){let t=jQuery(this),n=e.keyCode||e.which,r="";a.find("input").each(function(){r+=jQuery(this).val()}),o.val(r),8!==n&&46!==n?("input"===e.type&&o.trigger("input"),1===t.val().length&&(0<t.next("input").length?t.next("input").trigger("focus"):"input"===e.type&&setTimeout(()=>{o.trigger("change")},50))):t.val("").prev("input").trigger("focus")}),a.append(e)}o.hide(),o.after(a)})}}),jQuery(function(){jQuery("[data-input-code]").codeInput()})})(),jQuery.fn.extend({formWizard(e={}){let o=this,a=e.inputWrapperSelector||".form-group",i=e.inputErrorSelector||".error",t=e.submitButtonSelector||'[type="submit"]',n=e.prevButtonSelector||'[data-role="prev-tab-button"]',l=e.prevButtonText||"Назад",r=e.nextButtonSelector||'[data-role="next-tab-button"]',u=e.nextButtonText||"Вперед",c=e.tabSelector||'[data-role="tabs"]',s=e.activeTab||0,d=o.find(t),p=o.find(n),f=o.find(r),h=o.find(c);return h.length<=1?null:(y(s),f.on("click",b),p.on("click",g),this.on("input change","input, textarea, select",function(){_(this,"")}),o.data("form-wizard",{showTab:y,goToNextTab:b,goToPrevTab:g,validateActiveTab:m}),{showTab:y,goToNextTab:b,goToPrevTab:g,validateActiveTab:m});function y(e){let t=h.hide().eq(e).show(),n=t.data("prev-button-text")||l,r=t.data("next-button-text")||u;d.toggle(e===h.length-1),p.toggle(0<e).text(n),f.toggle(e<h.length-1).text(r),s=e,o.trigger("show-tab",[s])}function b(){s>=h.length-1||(!1!==m()?y(s+1):o.trigger("error-tab"))}function g(){0!==s&&y(s-1)}function m(){let e=h.eq(s),n=!1;return e.find("input, select, textarea").each(function(){_(this,"")}),e.find('input[required][type="text"]:not(:disabled),input[required][type="password"]:not(:disabled),input[required][type="email"]:not(:disabled),input[required][type="tel"]:not(:disabled),input[required][type="url"]:not(:disabled),input[required][type="number"]:not(:disabled),select[required]:not(:disabled),textarea[required]:not(:disabled)').each(function(){let e=jQuery(this),t=e.val();t||(n=!0,_(this,"Необходимо заполнить данное поле"))}),e.find('input[type="email"]:not(:disabled)').each(function(){let e=jQuery(this),t=e.val();t&&!1===/^.+@.+\..+$/.test(t)&&(n=!0,_(this,"Необходимо ввести валидный e-mail"))}),e.find('input[type="url"]:not(:disabled)').each(function(){let e=jQuery(this),t=e.val();t&&!1===/^.+\..+$/.test(t)&&(n=!0,_(this,"Необходимо ввести валидный url"))}),!1===n}function _(e,t){let n=jQuery(e).closest(a),r=n.find(i);n.toggleClass("has-error",!!t),r.text(t||"")}}}),jQuery(function(){let e=jQuery(".hide-from-search-form"),t=e.find('input[type="checkbox"]');0!==e.length&&t.on("change",function(e){jQuery.ajax({type:"POST",url:"",data:{status:t.prop("checked")?"hidden":"active"},success:function(){}})})}),jQuery(function(){let t=jQuery("body");jQuery(".mobile_menu_btn").on("click",function(e){e.preventDefault(),t.toggleClass("mobile-menu-opened")}),jQuery(".mobile_menu_bg").on("click",function(){t.removeClass("mobile-menu-opened")})}),window.Layout={initSelect2(){jQuery(".select2_wrapper select:not([data-select2-id])").each(function(){let e=jQuery(this);e.select2({minimumResultsForSearch:1/0,placeholder:e.data("placeholder"),dropdownParent:e.closest(".select2_wrapper"),width:"100%"})}),jQuery(".pc_configuration_content_wrapper .select2_wrapper select").each(function(){let e=jQuery(this);e.select2({minimumResultsForSearch:1,placeholder:e.data("placeholder"),dropdownParent:e.closest(".select2_wrapper"),width:"100%"}).on("select2:opening",function(e){$(this).data("select2").$dropdown.find(":input.select2-search__field").attr("placeholder","Поиск...")})})}},jQuery(function(){let t=jQuery("#add-club-start-form"),n=jQuery("#add-club-code-confirm-form"),e=n.find(".step_back"),r,o;function a(e){var t=""+e%60;return""+Math.floor(e/60)+":"+(t=1===t.length?"0"+t:t)}0!==t.length&&(n.find('input[name="code"]').codeInput(),t.on("submit",function(e){e.preventDefault(),o=t.find('input[name="phone"]').val(),jQuery.ajax({type:"POST",url:"",data:t.serialize(),success:function(){t.hide(),n.find(".user_phone").text(o),n.show(),clearInterval(r),function(){clearInterval(r);let e=jQuery("#countdown"),t=jQuery("#reSendCode"),n=180;e.text(a(n)),t.addClass("disabled"),r=setInterval(function(){n--,e.text(a(n)),0===n&&(t.removeClass("disabled"),e.text(" "),clearInterval(r))},1e3)}()}})}),n.on("submit",function(e){e.preventDefault(),jQuery(".code_wrapper .error").text(""),jQuery.ajax({type:"POST",url:"",data:n.serialize(),success:function(e){e.error&&jQuery(".code_wrapper .error").text(e.error)}})}),e.on("click",function(e){n.trigger("reset"),n.hide(),t.show()}),jQuery("#reSendCode").on("click",function(e){t.trigger("submit")}))}),jQuery(function(){let e=document.getElementById("club_page_map");e&&window.ymaps&&ymaps.ready(()=>{new ymaps.Map(e,{center:[55.76,37.64],zoom:7})})}),jQuery(function(){let e=jQuery('[data-remodal-id="club_photo_modal"]'),n=jQuery(".club_photo_modal_wrapper"),r=jQuery("#show_club_photo_counter_slide");if(0!==e.length){let t=n.find(".slide_item").length;function o(e){r.text(`${e+1} / ${t}`)}o(0),e.on("opened",function(){n.slick({infinite:!0,slidesToShow:1,slidesToScroll:1,prevArrow:'<button type="button" class="slick-prev slick-arrow"><img src="/img/left.svg" alt="arrow"></button>',nextArrow:'<button type="button" class="slick-next slick-arrow"><img src="/img/right.svg" alt="arrow"></button>'}),n.on("beforeChange",function(e,t,n,r){o(r)})}),e.on("closed",function(){jQuery(".club_photo_modal_wrapper").slick("unslick")})}}),jQuery(function(){let t=jQuery("#user-profile-form"),r,n=t.find('input[name="phone"]'),o=t.find(".confirm_mobile_wrapper"),a=o.find(".confirm_mobile_descr"),i,l=t.find('input[name="phone"]').val();function u(){jQuery.ajax({type:"POST",url:"",data:t.serialize(),success:function(){jQuery('[data-remodal-id="success_modal"]').remodal().open()}})}function c(e){var t=""+e%60;return""+Math.floor(e/60)+":"+(t=1===t.length?"0"+t:t)}0!==t.length&&(t.find('input[name="code"]').codeInput(),t.on("submit",function(e){e.preventDefault(),i=n.val(),i!==l?jQuery.ajax({type:"POST",url:"",data:{phone:i},success:function(){jQuery(".user_profile_submit").addClass("disabled"),n.hide(),a.text(`Код отправлен на номер ${i}`).removeClass("error"),o.show(),clearInterval(r),function(){let e=jQuery("#countdown"),t=jQuery("#reSendCodeProfile"),n=180;e.text(c(n)),t.addClass("disabled"),r=setInterval(function(){n--,e.text(c(n)),0===n&&(t.removeClass("disabled"),e.text(" "),clearInterval(r))},1e3)}()}}):u()}),jQuery("#reSendCodeProfile").on("click",function(e){t.trigger("submit")}),t.on("change",'input[name="code"]',function(e){let t=jQuery(this);jQuery.ajax({type:"POST",url:"",data:{code:t.val()},success:function(e){e.error?a.text(e.error).addClass("error"):(u(),n.show(),o.hide(),clearInterval(r),jQuery(".user_profile_submit").removeClass("disabled"))}})}))}),jQuery(function(){Layout.initSelect2(),jQuery(".club_page_services_list .club_services_mobile_toggle").on("click",function(e){jQuery(this).toggleClass("active").closest(".club_page_services_list").toggleClass("mob_toggle").find(".mob_hide").toggleClass("active")}),jQuery('input[type="tel"]').inputmask({mask:"+7 (999) 999-99-99",onincomplete:function(){this.value=""}}),jQuery('input[type="number"]').on("input change",function(e){var t=+jQuery(this).val();(t<=0||isNaN(t))&&jQuery(this).val("")}),jQuery("ul.club_list_navigation_tabs li a").on("click",function(e){e.preventDefault();let t=jQuery(this),n=jQuery(t.attr("href"));t.is(".active")||(jQuery("ul.club_list_navigation_tabs li a.active").removeClass("active"),t.addClass("active"),n.show(),jQuery(".club_list_content_tabs .tab").not(n).hide())}),jQuery(".club_page_toggle_content").on("click",function(e){jQuery(this).closest(".toggle_block_wrapper").find(".toggle_block").toggle(),jQuery(this).toggleClass("active")}),jQuery(".review_content_wrapper").scrollbar(),jQuery(".person_add_club_modal").remodal({appendTo:jQuery(".person_add_club_modal_wrapper"),hashTracking:!1}),jQuery(".show_club_price_list_modal").remodal({appendTo:jQuery(".club_page_modals_wrapper"),hashTracking:!1,closeOnOutsideClick:!1}),jQuery(".show_club_photo_modal").remodal({appendTo:jQuery(".club_page_modals_wrapper"),hashTracking:!1,closeOnOutsideClick:!1}),jQuery(".club_page_reviews_list").slick({infinite:!1,slidesToShow:4,slidesToScroll:1,variableWidth:!0,prevArrow:'<button type="button" class="slick-prev slick-arrow"><img src="../../img/left1.svg" alt="arrow"></button>',nextArrow:'<button type="button" class="slick-next slick-arrow"><img src="../../img/right1.svg" alt="arrow"></button>',responsive:[{breakpoint:700,settings:{slidesToShow:1,slidesToScroll:1}}]})});
//# sourceMappingURL=layout.js.map
