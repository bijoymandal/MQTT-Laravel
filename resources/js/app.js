import './bootstrap';
import { createIcons, icons } from 'lucide';

import Alpine from 'alpinejs';
import $ from 'jquery';
window.$ = window.jQuery = $;
window.Alpine = Alpine;

Alpine.start();

createIcons({ icons });

$(document).ready(function() {
    console.log('jQuery is ready!');
});


(function () {
    "use strict"; // Side Menu

    $(".side-menu").on("click", function () {
        if ($(this).parent().find("ul").length) {
            if ($(this).parent().find("ul").first()[0].offsetParent !== null) {
                $(this).find(".side-menu__sub-icon").removeClass("transform rotate-180");
                $(this).removeClass("side-menu--open");
                $(this).parent().find("ul").first().slideUp(300, function () {
                    $(this).removeClass("side-menu__sub-open");
                });
            } else {
                $(this).find(".side-menu__sub-icon").addClass("transform rotate-180");
                $(this).addClass("side-menu--open");
                $(this).parent().find("ul").first().slideDown(300, function () {
                    $(this).addClass("side-menu__sub-open");
                });
            }
        }
    });
})();


// Side menu tooltips
var initTooltips = function tooltips() {
    $(".side-menu").each(function () {
        if (this._tippy == undefined) {
            var content = $(this).find(".side-menu__title").html().replace(/<[^>]*>?/gm, "").trim();
            (0, tippy_js__WEBPACK_IMPORTED_MODULE_0__["default"])(this, {
                content: content,
                arrow: tippy_js__WEBPACK_IMPORTED_MODULE_0__.roundArrow,
                animation: "shift-away",
                placement: "right"
            });
        }

        if ($(window).width() <= 1260 || $(this).closest(".side-nav").hasClass("side-nav--simple")) {
            this._tippy.enable();
        } else {
            this._tippy.disable();
        }
    });
    return tooltips;
}();

window.addEventListener("resize", function () {
    initTooltips();
});

//Dark Mode

$(".dark-mode-switcher").on("click", function () {
    var switcher = $(this).find(".dark-mode-switcher__toggle");

    if ($(switcher).hasClass("dark-mode-switcher__toggle--active")) {
        $(switcher).removeClass("dark-mode-switcher__toggle--active");
    } else {
        $(switcher).addClass("dark-mode-switcher__toggle--active");
    }

    setTimeout(function () {
        var link = $(".dark-mode-switcher").data("url");
        window.location.href = link;
    }, 500);
});
