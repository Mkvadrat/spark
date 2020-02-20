document.addEventListener(
    "DOMContentLoaded", () => {
        new Mmenu("#menu", {
            "extensions": [
                "pagedim-black",
                "position-left"
            ]
        });
    }
);
$(document).ready(function () {
    $('.anchors__block a[href*="#"]').on('click', function (event) {
        $('.anchors__block a').toggleClass('active');
        const anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        event.preventDefault();
    });

    $('.product__content .owl-carousel').owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        margin: 10,
        navText: ["<img src='/wp-content/themes/spark/images/left-car.svg'/>", "<img src='/wp-content/themes/spark/images/right-kar.svg'/>"]
    });
    
    $('.button-group span *[type="submit"]').attr('disabled', 'disabled');
});


// $(document).ready(function(){
//     $('.owl-carousel').owlCarousel({
//         items: 1,
//         nav: true,
//         stagePadding: 100
//     });
// });