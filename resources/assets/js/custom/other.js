// $(document).ready(function() {
//     var telBtn = '.s__item__tel_butt',
//         telInput = $("[name='show-tel']"),
//         searchForm = $('#search-form'),
//         srCont = $('.ser-content'),
//         srContCont = $('.ser-content__contacts'),
//         telsBtn = $('.js-tels-btn'),
//         telsBlock = $('.js-tels-block'),
//         showTelLink = $('.js-show-tel-link'),
//         comTextStr,
//         comTextStrSlcd,
//         comTextLength = 300,
//         showComBtn = $('.js-show-comm-text'),
//         hideComBtn = $('.js-hide-comm-text'),
//         advTextBlock = $('.js-comm-text-adv'),
//         disadvTextBlock = $('.js-comm-text-disadv');
//
//     //Показать телефон
//     $('.search-items').on('click', telBtn, function () {
//         $(this).text($(this).next(telInput).val());
//     });
//
//     // Показать телефон на странице сервиса
//     telsBtn.on('click', function () {
//         telsBtn.html(telsBlock.html());
//         console.log(telsBlock.html());
//     });
//
//     // Обрезка текста комментария
//     $.each( $('.ser__rews__item'), function() {
//         var advText = $(this).find('.js-adv-text');
//
//         if ( advText.text().length > comTextLength ) {
//             comTextStr = advText.text();
//             comTextStrSlcd = comTextStr.substr(0, comTextLength) + ' ...';
//             advText.text( comTextStrSlcd );
//             $(this).find(disadvTextBlock).hide();
//         } else {
//             $(this).find(showComBtn).hide();
//         }
//     });
//
//     // Показать текст комментария
//     showComBtn.on('click', function() {
//         $(this).parent().find('.js-adv-text').text(comTextStr);
//         $(this).parent().find(disadvTextBlock).show();
//         $(this).hide();
//         $(this).parent().find(hideComBtn).show();
//     });
//
//     // Скрыть текст комментария
//     hideComBtn.on('click', function() {
//         $(this).parent().find('.js-adv-text').text(comTextStrSlcd);
//         $(this).parent().find(disadvTextBlock).hide();
//         $(this).hide();
//         $(this).parent().find(showComBtn).show();
//     });
//
//     // Ширина доп блоков
//     var moreBlockWidth = 0;
//     $.each( $('.js-ser-more .ser-content__more-item'), function() {
//         moreBlockWidth += $(this).width() + 40;
//     });
//     $('.ser__more__block').width(moreBlockWidth);
//
//     var moreRateBlockWidth = 0;
//     $.each( $('.js-ser-more-rate .ser-content__more-item'), function() {
//         moreRateBlockWidth += $(this).width() + 40;
//     });
//     $('.ser__more__block-rate').width(moreRateBlockWidth);
//
//     /*
//     * Настройка слайдера фото сервиса
//     * */
//     $('.ser-content__fotos').magnificPopup({
//         delegate: 'a', // child items selector, by clicking on it popup will open
//         type: 'image',
//         gallery: {
//             enabled: true
//         },
//     });
// });
