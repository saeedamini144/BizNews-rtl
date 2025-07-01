// jQuery code for the BizNews RTL theme
(function ($) {
    "use strict";

    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Main News carousel
    $(".main-carousel").owlCarousel({
        autoplay: true,
        rtl: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        center: true,
    });


    // Tranding carousel
    $(".trending-carousel").owlCarousel({
        autoplay: true,
        rtl: true,
        smartSpeed: 2000,
        items: 2,
        dots: false,
        loop: true,
        nav: false,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 2
            }
        }
    });


    // Carousel item 1
    $(".carousel-item-1").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        rtl: true,
        dots: false,
        loop: true,
        nav: false,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });

    // Carousel item 2
    $(".carousel-item-2").owlCarousel({
        autoplay: true,
        rtl: true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav: false,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });


    // Carousel item 3
    $(".carousel-item-3").owlCarousel({
        autoplay: true,
        rtl: true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav: false,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });


    // Carousel item 4
    $(".carousel-item-4").owlCarousel({
        autoplay: true,
        rtl: true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav: false,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

})(jQuery);


// Function to make the header sticky on scroll
// document.addEventListener("DOMContentLoaded", function () {
//     const navbar = document.querySelector(".menu-navbar"); // Selects the first element with class "navbar"
//     if (navbar) { // Ensure the navbar element exists
//         const stickyOffset = navbar.offsetTop; // Get the initial offset of the navbar

//         function stickyHeader() {
//             if (window.pageYOffset > stickyOffset) {
//                 navbar.classList.add("sticky");
//             } else {
//                 navbar.classList.remove("sticky");
//             }
//         }

//         window.onscroll = function () {
//             stickyHeader();
//         };

//         // Call it once on load to check initial position
//         stickyHeader();
//     }
// });

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".menu-navbar"); // عنصر با کلاس "menu-navbar" را انتخاب می‌کند

    // فقط اگر navbar وجود داشت و دارای کلاس "sticky-header-enabled" بود، کد را اجرا کن
    if (navbar && navbar.classList.contains("sticky-header-enabled")) {
        const stickyOffset = navbar.offsetTop; // آفست اولیه navbar را می‌گیرد

        function stickyHeader() {
            if (window.pageYOffset > stickyOffset) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }

        window.onscroll = function () {
            stickyHeader();
        };

        // یک بار در زمان بارگذاری صفحه برای بررسی موقعیت اولیه فراخوانی می‌شود
        stickyHeader();
    }
});