// var map = new Datamap({element: document.getElementById('mapsMain')});



 AOS.init({

});

Revealator.scroll_padding = '150';
Revealator.effects_padding = '-150';

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
 if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
  document.getElementById("navbar").style.top = "0";
 } else {
  document.getElementById("navbar").style.top = "-100px";
 }
}

document.body.onload = function(){
 new WOW({
   mobile: false
 }).init();
 var preloader = document.getElementById('page-preloader');
 if( !preloader.classList.contains('done')){
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
  loop: true,
  items: 1,
  nav: true,
  dots: false,
  margin: 10,
  autoplay:true,
  autoplayTimeout:4000,  
  autoplayHoverPause:false,
  autoHeight:true,
  autoHeightClass: 'owl-height'
  // navText: ["<img src='/wp-content/themes/spark/images/left-car.svg'/>", "<img src='/wp-content/themes/spark/images/right-kar.svg'/>"]
 });
 
 $('.button-group span *[type="submit"]').attr('disabled', 'disabled');
 
 $("#owl-slider").owlCarousel({
  loop: true,
  items:1,
  fade:false,
  nav : true, 
  slideSpeed : 300,
  paginationSpeed : 500,
  singleItem:true, 
  autoplayTimeout:100,  
  autoplayHoverPause:false,
  transitionStyle : "goDown",
  onInitialized:customPager,  
  onChanged:customPager 
 });

 $("#owl-history").owlCarousel( {
  loop: true,
  nav: true,
  autoplay:true,
  autoplayTimeout:3000,  
  autoplayHoverPause:true,
  onInitialized: coverFlowEfx,
  onTranslate: coverFlowEfx,
 });
 
 //$('.timer').countTo();
 
 /*$('#main-text').owlCarousel( {
  loop: true,
  nav: false,
  items:1,
  autoplay:true,
  autoplayTimeout:3000,  
  onInitialized: coverFlowEfx,
  onTranslate: coverFlowEfx,
 }).on('changed.owl.carousel', function() {
  $('.timer').countTo('restart');
 }).on('translated.owl.carousel', function() {
  $('.timer').countTo('restart');
 });*/
 
 $('#owl-carousel').owlCarousel({
  loop: true,
  dots: false,
  nav: false,
  items: 1,
  autoplay:true,
  autoplayTimeout:7000,
  autoplayHoverPause:false,
 });
 
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
  mainClass: 'mfp-no-margins mfp-with-zoom', 
  image: {
   verticalFit: true
  },
  zoom: {
   enabled: true,
   duration: 300 
  }
 });
});



function customPager(property){
 var current = property.item.index;
 var prevSrc = $(property.target).find(".owl-item").eq(current - 1).find("img").attr("src");
 var nextSrc = $(property.target).find(".owl-item").eq(current + 1).find("img").attr("src");
}


function coverFlowEfx(e){
 idx = e.item.index;
 $('.owl-item.active').removeClass('active');
 $('.owl-item.a0').removeClass('a0');
 $('.owl-item.a1').removeClass('a1');
 $('.owl-item.a2').removeClass('a2');
 $('.owl-item.a3').removeClass('a3');
 $('.owl-item').eq(idx - 2).addClass('a3');
 $('.owl-item').eq(idx).addClass('a0');
 $('.owl-item').eq(idx + 1).addClass('a1');
 $('.owl-item').eq(idx + 2).addClass('a2');
}




/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 200) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/