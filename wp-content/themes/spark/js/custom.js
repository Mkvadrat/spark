window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
}
document.body.onload = function(){
   new WOW().init();
    var preloader = document.getElementById('page-preloader');
    if( !preloader.classList.contains('done'))
    {
        preloader.classList.add('done');
    }
}


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


 $(document).ready(function(){
  var owl = $("#owl-slider");
  owl.owlCarousel({
    loop: true,
    items:1,
    fade:false,
    nav : true, 
    slideSpeed : 300,
    paginationSpeed : 500,
    singleItem:true, 
    transitionStyle : "goDown",
    onInitialized:customPager,  
    onChanged:customPager 
}); 
   function customPager(property){
     var current = property.item.index;
    var prevSrc = $(property.target).find(".owl-item").eq(current - 1).find("img").attr("src");
     var nextSrc = $(property.target).find(".owl-item").eq(current + 1).find("img").attr("src");
     //   $(".owl-prev").css("background-image",'url('+prevSrc+')');
     // $(".owl-next").css("background-image",'url('+nextSrc+')');
   }
});

$(document).ready(function(){
 $('.timer').countTo();
 $(".owl-carousel").owlCarousel( {
   loop: true,
   // mergeFit: true,
   nav: true,
   // dotsEach: true,
   // autoWidth: false,
   onInitialized: coverFlowEfx,
   onTranslate: coverFlowEfx,
 }).on('changed.owl.carousel', function() {
   $('.timer').countTo('restart');
 }).on('translated.owl.carousel', function() {
   $('.timer').countTo('restart');
 });
});

 function coverFlowEfx(e){
  idx = e.item.index;
  $('.owl-item.active').removeClass('active');
  $('.owl-item.a0').removeClass('a0');
  $('.owl-item.a1').removeClass('a1');
  $('.owl-item.a2').removeClass('a2');
  $('.owl-item.a3').removeClass('a3');
  // $('.owl-item.a4').removeClass('a4');
  $('.owl-item').eq(idx - 2).addClass('a3');
  // $('.owl-item').eq(idx -1).addClass('a4');
  $('.owl-item').eq(idx).addClass('a0');
  $('.owl-item').eq(idx + 1).addClass('a1');
  $('.owl-item').eq(idx + 2).addClass('a2');
}

// var currentNumber = $('.number').text();
// var currentNumberCompany = $('.number-company').text();
// var currentNumberCount = $('.number-count').text();
// var currentNumberPers = $('.number-personal').text();
// var currentNumberProd = $('.number-prod').text();

// $({numberValue: currentNumber}).animate({numberValue: 80}, {
//     duration: 3500,
//     easing: 'linear',
//     step: function() { 
//         $('.number').text(Math.ceil(this.numberValue)); 

//     }

// });

// $({numberValue: currentNumberCompany}).animate({numberValue: 70}, {
//     duration: 3500,
//     delay: 9000, 
//     easing: 'linear',
//     step: function() { 
//         $('.number-company').text(Math.ceil(this.numberValue)); 
//     }
// });
// $({numberValue: currentNumberCount}).animate({numberValue: 30}, {
//     duration: 3500,
//     easing: 'linear',
//     step: function() { 
//         $('.number-count').text(Math.ceil(this.numberValue)); 
//     }
// });
// $({numberValue: currentNumberPers}).animate({numberValue: 1100}, {
//     duration: 4500,
//     easing: 'linear',
//     step: function() { 
//         $('.number-personal').text(Math.ceil(this.numberValue)); 
//     }
// });
// $({numberValue: currentNumberProd}).animate({numberValue: 8000}, {
//     duration: 3500,
//     easing: 'linear',
//     step: function() { 
//         $('.number-prod').text(Math.ceil(this.numberValue)); 
//     }
// });
$('#owl-carousel').owlCarousel({
    loop: true,
    dots: false,
    nav: false,
    items: 1,
    autoplay:true,
    autoplayTimeout:7000,
    autoplayHoverPause:false,
})

$('#owl').owlCarousel({
    loop: true,
    dots: true,
    nav: true,
    items: 1,
  
})

$(document).ready(function() {

	$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});
});




