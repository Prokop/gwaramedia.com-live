jQuery(document).ready(function ($) {
    $(document).on('yith_infs_adding_elem', function () {
        init_share_buttons();
    });

    init_share_buttons();


    function init_share_buttons() {
        $('.a2a_button_facebook').html('<div class="icon icon--default"><svg preserveAspectRatio="none">\n' +
            '                                                  <use xlink:href="' + main.gtd + '/img/svg/sprite.symbol.svg#fb"></use>\n' +
            '                                                </svg></div>');

        $('.a2a_button_telegram').html('<div class="icon icon--default"><svg preserveAspectRatio="none">\n' +
            '                                                  <use xlink:href="' + main.gtd + '/img/svg/sprite.symbol.svg#telegram"></use>\n' +
            '                                                </svg></div>');

        $('.a2a_button_twitter').html('<div class="icon icon--default"><svg preserveAspectRatio="none">\n' +
            '                                                  <use xlink:href="' + main.gtd + '/img/svg/sprite.symbol.svg#twitter"></use>\n' +
            '                                                </svg></div>');
    }


    $('#load-more-seasons').click(function () {
        $.ajax({
            url: $('.subcategories-pagination .next').attr('href'),
            type: 'POST',
            success: function (data) {
                $('.seasons-list').append($(data).find('.seasons-list').find('li'));
                $('.subcategories-pagination').replaceWith($(data).find('.subcategories-pagination').html());
                $('#load-more-seasons').replaceWith($(data).find('#load-more-seasons').html());
            }
        });
    });


    $(document).on('input', '.search-result-form input', function () {
        var data = {
            action: 'gwara_search',
            s: $('.search-result-form input').val(),
            cat: $('.search-result--body .tab-btn-active').attr('data-cat')
        };

        // с версии 2.8 'ajaxurl' всегда определен в админке
        jQuery.post(main.ajaxurl, data, function (response) {
            $('.search-result--body .tabs-content--item--active .results').html(response);
        });
    });

    $(document).on('submit', '.search-result-form', function (e) {
        e.preventDefault();
    });

    $('.yt-lazyload').click(function(event){
        $('.block-title').addClass('block-title--off')
    });

});


