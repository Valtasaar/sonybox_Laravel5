/* Selectpicker */
$('.selectpicker').selectpicker({
    width: '100%',
    iconBase: 'fa',
    tickIcon: 'fa-check'
});

/* Mmenu */
$(document).ready(function() {
    let mmenu = $(".js-mmenu");
    let mmenuBtn = $(".js-mmenu-btn");

    mmenu.mmenu({
        "extensions": [
            "fullscreen"
        ],
        navbar: {
            title:`
            <button class="js-mmenu-btn-close hamburger hamburger--collapse is-active" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
            </button>
            `
        }
    }, {
        offCanvas: {
            pageSelector: "#app"
        }
    });

    let API = mmenu.data( "mmenu" );

    mmenuBtn.click(function() {
        API.open();
    });

    $(".js-mmenu-btn-close").click(function() {
        API.close();
    });
});