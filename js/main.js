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
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Main News carousel
    $(".main-carousel").owlCarousel({
        autoplay: true,
        rtl:true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        center: true,
    });


    // Tranding carousel
    $(".trending-carousel").owlCarousel({
        autoplay: true,
        rtl:true,
        smartSpeed: 2000,
        items: 2,
        dots: false,
        loop: true,
        nav : false,
        navText : [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:1
            },
            1024:{
                items:2
            }
        }
    });


    // Carousel item 1
    $(".carousel-item-1").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        rtl:true,
        dots: false,
        loop: true,
        nav : false,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:1
            }
        }
    });

    // Carousel item 2
    $(".carousel-item-2").owlCarousel({
        autoplay: true,
        rtl:true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav : false,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Carousel item 3
    $(".carousel-item-3").owlCarousel({
        autoplay: true,
        rtl:true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav : false,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    

    // Carousel item 4
    $(".carousel-item-4").owlCarousel({
        autoplay: true,
        rtl:true,
        smartSpeed: 1000,
        margin: 30,
        dots: false,
        loop: true,
        nav : false,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });
    
})(jQuery);
  
// table of the content
document.addEventListener("DOMContentLoaded", function() {
    const postContent = document.querySelector('.post-content');
    const tocList = document.getElementById('toc-list');
    const headings = postContent.querySelectorAll('h2, h3, h4, h5, h6');

    if (headings.length > 0) {
        headings.forEach((heading, index) => {
            const id = `heading-${index}`;
            heading.id = id;

            const li = document.createElement('li');
            // تنظیم فاصله به‌طور داینامیک براساس سطح هدینگ
            li.style.marginLeft = `${(parseInt(heading.tagName.slice(1)) - 2) * 20}px`;

            const link = document.createElement('a');
            link.href = `#${id}`; // لازم برای دسترسی بهتر
            link.textContent = heading.textContent;

            // جلوگیری از نمایش ID در URL
            link.addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById(id).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });

            li.appendChild(link);
            tocList.appendChild(li);
        });
    } else {
        document.getElementById('table-of-contents').style.display = 'none';
    }
});
// table of the content
