import './bootstrap';
import { createIcons, icons } from 'lucide';

import Alpine from 'alpinejs';
import $ from 'jquery';
window.$ = window.jQuery = $;
window.Alpine = Alpine;
import mqtt from 'mqtt';

Alpine.start();

createIcons({ icons });

$(document).ready(function() {
    // console.log(dom);
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

    //dark Mode
    const themeToggleBtn = document.getElementById('theme-toggle');
    const sunIcon = document.getElementById('sun-icon');
    const moonIcon = document.getElementById('moon-icon');
    const htmlElement = document.documentElement;

    // Function to apply the theme
    function applyTheme(theme) {
        if (theme === 'dark') {
            htmlElement.classList.add('dark');
            moonIcon.classList.remove('hidden-toggle');
            sunIcon.classList.add('hidden-toggle');
        } else {
            htmlElement.classList.remove('dark');
            moonIcon.classList.add('hidden-toggle');
            sunIcon.classList.remove('hidden-toggle');
        }
    }

    // Check for existing theme in localStorage and apply it
    const savedTheme = localStorage.getItem('theme') || 'light'; // Default to light if no theme is set
    applyTheme(savedTheme);

    // Add event listener to toggle between themes
    themeToggleBtn.addEventListener('click', () => {
        const currentTheme = htmlElement.classList.contains('dark') ? 'dark' : 'light';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

        // Apply the new theme and store it in localStorage
        applyTheme(newTheme);
        localStorage.setItem('theme', newTheme);
    });
})();


function dom(dom)
{

}


// Side menu tooltips
// var initTooltips = function tooltips() {
//     $(".side-menu").each(function () {
//         if (this._tippy == undefined) {
//             var content = $(this).find(".side-menu__title").html().replace(/<[^>]*>?/gm, "").trim();
//             (0, tippy_js__WEBPACK_IMPORTED_MODULE_0__["default"])(this, {
//                 content: content,
//                 arrow: tippy_js__WEBPACK_IMPORTED_MODULE_0__.roundArrow,
//                 animation: "shift-away",
//                 placement: "right"
//             });
//         }

//         if ($(window).width() <= 1260 || $(this).closest(".side-nav").hasClass("side-nav--simple")) {
//             this._tippy.enable();
//         } else {
//             this._tippy.disable();
//         }
//     });
//     return tooltips;
// }();

// window.addEventListener("resize", function () {
//     initTooltips();
// });


const options = {
    clientId: 'emqx_cloude5a3b5',
    username: 'pavan',
    password: 'pavan',
    keepalive: 60,
    clean: true, // equivalent to Clean Start
    reconnectPeriod: 1000, // reconnect after 1 second if disconnected
    protocolVersion: 4, // Use MQTT version 4 (3.1.1)
};

// WebSocket URL
const websocketURL = `wss://uaf2d772.ala.eu-central-1.emqxsl.com:8084/mqtt`;

// Create an MQTT client
const client = mqtt.connect(websocketURL, options);

// initialize the MQTT client
// var client = mqtt.connect(options);

// setup the callbacks
client.on('connect', function () {
    console.log('Connected');
});

client.on('error', function (error) {
    console.log(error);
});

client.on('message', function (topic, message) {
    // called each time a message is received
    console.log('Received message:', topic, message.toString());
});

// subscribe to topic 'my/test/topic'
client.subscribe('my/test/topic');

// publish message 'Hello' to topic 'my/test/topic'
client.publish('my/test/topic', 'Hello');

