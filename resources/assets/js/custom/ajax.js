/*
$(document).ready(function() {
  // Получение данных из строки адреса
  var pageUrl = location.href.split('?');
  var resTitle = $('.s__item__title');

  function getParameterByName() {
    if ( $('.search_services').length ) {
      var searchString = decodeURIComponent(window.location.search.substring(1));
      var searchKey;
      var searchElem = searchString.split('&');


      if ( searchString ) {
        for (var i = 0; i < searchElem.length; i++) {
          searchKey = searchElem[i].split('=')[1];

          $("[value=" + searchKey + "]").attr("checked", true);
        }
      }

      if ( resTitle.data('result') === 0 ) {
        $('#cityMap').hide();
      }
    }
  }
  getParameterByName();

  $('.search_services #search-form').on('change', function() {
    var city = $('#city').val(),
        sc_type = $("[name='sc_type']:checked").val(),
        searchParams = '';

    $.ajax({
      type:'GET',
      url:'/ajaxSearchServices',
      data: {
        city: city,
        sc_type: sc_type
      },

      success:function(data) {
        $('.js-serv-items').remove();
        $('.search-items-res').append(data.html.services);

        console.log(data.html);
      },

      error: function (jqXHR) {
        alert(jqXHR);
      },
    });

    // Перебор установленных чекбоксов
    $.each( $('input:checked'), function() {
      searchParams += $(this).attr('name') + '=' + $(this).val() + '&';
    });

    // Данные сортировки
    //if ( activeSort.length > 0 )
     // searchParams += activeSort.attr('name') + '=' + activeSort.val() + '&';

    // Проверка наличия данных запроса
    if ( searchParams !== '' ) {
      searchParams = searchParams.slice(0, -1);

      history.replaceState(null, null, '?' + searchParams);
    } else {
      //loader.fadeIn(300);
      history.replaceState(null, null, city);
    }
  })

    /!*$(".search_services #search-form, .search__sorting form").on('change', function () {
        var city = $('.js-header-button').val(),
            sendSt = true,
            sc_type1 = $("[name='sc_type_1']:checked").val(),
            sc_type2 = $("[name='sc_type_2']:checked").val(),
            work_time = $("[name='work_time']:checked").val(),
            courier = $("[name='courier']:checked").val(),
            rep = $("[name='rep']:checked").val(),
            dia = $("[name='dia']:checked").val(),
            rat1 = $("[name='rate_1']:checked").val(),
            rat2 = $("[name='rate_2']:checked").val(),
            rat3 = $("[name='rate_3']:checked").val(),
            sortRate = $("[name='sort_rating']").val(),
            sortPrice = $("[name='sort_price']").val(),
            sortPriceRate = $("[name='sort_price_rate']").val(),
            type_1 = $("[name='type_1']:checked").val(),
            type_2 = $("[name='type_2']:checked").val(),
            type_3 = $("[name='type_3']:checked").val(),
            type_4 = $("[name='type_4']:checked").val(),
            type_5 = $("[name='type_5']:checked").val(),
            loader = $('.search__loader'),
            searchParams = '',
            activeSort = $('.sort-active');

        $.ajax({
            url: ajax.ajaxurl,
            type: 'get',
            data: {
                action: 'search_services_request',
                sendSt: sendSt,
                city: city,
                sc_type_1: sc_type1,
                sc_type_2: sc_type2,
                work_time: work_time,
                courier: courier,
                rep: rep,
                dia: dia,
                rate_1: rat1,
                rate_2: rat2,
                rate_3: rat3,
                sort_rating: sortRate,
                sort_price: sortPrice,
                sort_price_rate: sortPriceRate,
                type_1: type_1,
                type_2: type_2,
                type_3: type_3,
                type_4: type_4,
                type_5: type_5
            },
            beforeSend: function() {
                loader.fadeIn(300);
            },
            success: function (data) {
                $('.search-items-res').html(data);
                if ( $('.s__item__title').data('result') === 0 ) {
                    $('#cityMap').hide();
                } else {
                    $('#cityMap').show();
                    initMapCity();
                }

                loader.fadeOut(300);
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            },
        });

        // Перебор установленных чекбоксов
        $.each( $('input:checked'), function() {
            searchParams += $(this).attr('name') + '=' + $(this).val() + '&';
        });

        // Данные сортировки
        if ( activeSort.length > 0 )
            searchParams += activeSort.attr('name') + '=' + activeSort.val() + '&';

        // Проверка наличия данных запроса
        if ( searchParams != '' ) {
            searchParams = searchParams.slice(0, -1);

            history.replaceState(null, null, '?' + searchParams);
        } else {
            loader.fadeIn(300);
            document.location.replace(pageUrl[0]);
        }

        console.log(activeSort);
    });*!/

    // Показать все комментарии
    /!*$(".js-rep-btn").on('click', function () {
        var post_id = $("input[name='post_id']").val();

        jQuery.ajax({
            url: ajax.ajaxurl,
            type: 'post',
            data: {
                action: 'get_all_comments',
                post_id: post_id
            },
            success: function (data) {
                //console.log(data);
                $('.ser__rews .ser__rews__item').remove();
                $('.ser__rews .ser__rew__title').after(data);

                var comTextStr,
                    comTextStrSlcd,
                    comTextLength = 300,
                    showComBtn = $('.js-show-comm-text'),
                    hideComBtn = $('.js-hide-comm-text'),
                    disadvTextBlock = $('.js-comm-text-disadv');

                $.each( $('.ser__rews__item'), function() {
                    var advText = $(this).find('.js-adv-text');

                    if ( advText.text().length > comTextLength ) {
                        comTextStr = advText.text();
                        comTextStrSlcd = comTextStr.substr(0, comTextLength) + ' ...';
                        advText.text( comTextStrSlcd );
                        $(this).find(disadvTextBlock).hide();
                    } else {
                        $(this).find(showComBtn).hide();
                    }
                });

                // Показать текст комментария
                showComBtn.on('click', function() {
                    $(this).parent().find('.js-adv-text').text(comTextStr);
                    $(this).parent().find(disadvTextBlock).show();
                    $(this).hide();
                    $(this).parent().find(hideComBtn).show();
                });

                // Скрыть текст комментария
                hideComBtn.on('click', function() {
                    $(this).parent().find('.js-adv-text').text(comTextStrSlcd);
                    $(this).parent().find(disadvTextBlock).hide();
                    $(this).hide();
                    $(this).parent().find(showComBtn).show();
                });
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            },
        });
        $(this).hide();
    });*!/

    // Отправка запроса добавления сервиса
    /!*$(".js-add-serv-btn").on('click', function () {
        var city = $("input[name='city']").val(),
            serv_name = $("input[name='serv_name']").val(),
            descr = $("textarea[name='descr']").val(),
            address = $("input[name='address']").val(),
            tel = $("input[name='tel']").val(),
            email = $("input[name='email']").val(),
            loader = $('.search__loader');

        if ( city == '' || serv_name == '' ) {
            $('.add-company__form-error').hide();
            $('.ser__rew__title').after('<p class="add-company__form-error">Заполните требуемые поля</p>');
            return;
        } else if ( $('.add-company__form-error') ) {
            $('.add-company__form-error').hide();
        }

        jQuery.ajax({
            url: ajax.ajaxurl,
            type: 'post',
            data: {
                action: 'send_add_service_email',
                city: city,
                serv_name: serv_name,
                descr: descr,
                address: address,
                tel: tel,
                email: email
            },
            beforeSend: function() {
                loader.fadeIn(300);
            },
            success: function (data) {
                loader.fadeOut(300);
                $('.ser__rew__title').after('<p class="add-company__form-error">' + data + '</p>');
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            },
        });
    });*!/

    // Отправка вопроса
    /!*$(".js-add-que-btn").on('click', function () {
        var sender_name = $("input[name='sender_name']").val(),
            question = $("textarea[name='question']").val(),
            loader = $('.search__loader');

        if ( sender_name == '' || question == '' ) {
            $('.add-company__form-error').hide();
            $('.ser__rew__title').after('<p class="add-company__form-error">Заполните требуемые поля</p>');
            return;
        } else if ( $('.add-company__form-error') ) {
            $('.add-company__form-error').hide();
        }

        jQuery.ajax({
            url: ajax.ajaxurl,
            type: 'post',
            data: {
                action: 'send_que',
                sender_name: sender_name,
                question: question
            },
            beforeSend: function() {
                loader.fadeIn(300);
            },
            success: function (data) {
                loader.fadeOut(300);
                $('.ser__rew__title').after('<p class="add-company__form-error">' + data + '</p>');
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            },
        });
    });*!/

    // Отправка формы ос
    /!*$(".js-feed-btn").on('click', function () {
        var feed_email = $("input[name='feed_email']").val(),
            feed_title = $("input[name='feed_title']").val(),
            feed_msg = $("textarea[name='feed_msg']").val(),
            loader = $('.search__loader');

        if ( feed_email == '' || feed_title == '' || feed_msg == '' ) {
            $('.add-company__form-error').hide();
            $('.ser__rew__title').after('<p class="add-company__form-error">Заполните требуемые поля</p>');
            return;
        } else if ( $('.add-company__form-error') ) {
            $('.add-company__form-error').hide();
        }

        jQuery.ajax({
            url: ajax.ajaxurl,
            type: 'post',
            data: {
                action: 'send_feed',
                feed_email: feed_email,
                feed_title: feed_title,
                feed_msg: feed_msg
            },
            beforeSend: function() {
                loader.fadeIn(300);
            },
            success: function (data) {
                loader.fadeOut(300);
                $('.ser__rew__title').after('<p class="add-company__form-error">' + data + '</p>');
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            },
        });
    });*!/
});
*/
