// go to top
$(function () {
    $(window).on("scroll", function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 400) $(".go-top").addClass("active");
        if (scrolled < 400) $(".go-top").removeClass("active");
    });

    $(".go-top").on("click", function () {
        $("html, body").animate(
            {
                scrollTop: "0",
            },
            300
        );
    });
});


$(".testimonial__slide--slider").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    autoHeight:true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: ["<i class='fa-solid fa-circle-arrow-left'></i>PREV", "NEXT<i class='fa-solid fa-circle-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        767: {
            items: 1,
        },
        1000: {
            items: 1,
        },
        1200: {
            items: 1,
        },
    },
});

$(".testimonial__mobile--slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: ["<i class='fa-solid fa-circle-arrow-left'></i>PREV", "NEXT<i class='fa-solid fa-circle-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        767: {
            items: 1,
        },
        1000: {
            items: 1,
        },
        1200: {
            items: 1,
        },
    },
});

$(".service__related--slider").owlCarousel({
    loop: true,
    margin: 40,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 4,
        },
    },
});

$(".partner__slide").owlCarousel({
    loop: true,
    margin: 40,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 4,
        },
    },
});


$(".blog__home--slider").owlCarousel({
    loop: false,
    margin: 21,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 8000,
    navText: ["<i class='fa-solid fa-circle-arrow-left'></i>PREV", "NEXT<i class='fa-solid fa-circle-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 2,
        },
    },
});

$(".home__partner--slider").owlCarousel({
    loop: true,
    margin: 100,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: ["<i class='fa-solid fa-circle-arrow-left'></i>PREV", "NEXT<i class='fa-solid fa-circle-arrow-right'></i>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        767: {
            items: 1,
        },
        1000: {
            items: 1,
        },
        1200: {
            items: 1,
        },
    },
});


$(".home__tech--slider-left").owlCarousel({
    loop: true,
    rewind: true,
    margin: 22,
    dots: false,
    nav: false,
    autoplay: true,
    autoPlayTimeout: 0,
    autoplaySpeed: 6000,
    slideTransition: "linear",
    autoplayHoverPause: true,
    navText: ["<i class='fa-solid fa-circle-arrow-left'></i>PREV", "NEXT<i class='fa-solid fa-circle-arrow-right'></i>"],
    responsive: {
        0: {
            items: 3,
        },
        600: {
            items: 3,
        },
        767: {
            items: 5,
        },
        1024: {
            items: 7,
        },
    },
});

$(".home__tech--slider-right").owlCarousel({
    loop: true,
    rewind: true,
    margin: 22,
    dots: false,
    nav: false,
    autoplay: true,
    autoPlayTimeout: 0,
    autoplaySpeed: 6000,
    slideTransition: "linear",
    autoplayHoverPause: true,
    rtl: true,
    navText: ["<i class='fa-solid fa-circle-arrow-left'></i>PREV", "NEXT<i class='fa-solid fa-circle-arrow-right'></i>"],
    responsive: {
        0: {
            items: 3,
        },
        600: {
            items: 3,
        },
        767: {
            items: 5,
        },
        1024: {
            items: 7,
        },
    },
});

$(".accordion")
    .find(".accordion__title")
    .on("click", function () {
        $(this).toggleClass("active");
        $(this).parent(".accordion__item").toggleClass("active");
        $(this).next().slideToggle("fast");
        $(".accordion__content").not($(this).next()).slideUp("fast");
        $(".accordion__title").not($(this)).removeClass("active");
        $(".accordion__title").not($(this)).parent(".accordion__item").removeClass("active");
    });


$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});


document.querySelectorAll(".menu__drop").forEach((menu) => {
    const navItems = menu.querySelectorAll(".navlist");

    navItems.forEach((navItem) => {
        navItem.addEventListener("mouseover", () => {
            // Remove 'active' class from all nav items within this menu
            navItems.forEach((item) => {
                item.classList.remove("active");
            });
            // Add 'active' class to the hovered nav item
            navItem.classList.add("active");

            // Find the corresponding textboxcontainer and toggle its 'active' class
            const index = Array.from(navItem.parentNode.children).indexOf(navItem);
            const textboxContainers = menu.querySelectorAll(".textboxcontainer");
            textboxContainers.forEach((textboxContainer, idx) => {
                textboxContainer.classList.toggle("active", idx === index);
            });
        });
    });
});

//Technolgy hover effect

document.querySelectorAll(".technology__list li").forEach((category) => {
    category.addEventListener("mouseenter", (e) => {
        const hoveredClass = e.target.id;
        document.querySelectorAll(".technology__list--img .technology__list--img-box").forEach((product) => {
            if (!product.classList.contains(hoveredClass)) {
                product.style.opacity = "0.7";


            } else if (product.classList.contains(hoveredClass)) {
                product.style.border = "1px solid #000";
                product.style.background = "#ffffff";

            }
        });
    });

    category.addEventListener("mouseleave", () => {
        document.querySelectorAll(".technology__list--img .technology__list--img-box").forEach((product) => {
            product.style.opacity = "1";
            product.style.border = "1px solid transparent";
            product.style.background = "transparent";
        });
    });
});

