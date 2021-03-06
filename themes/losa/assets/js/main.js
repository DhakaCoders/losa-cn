(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
  
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}

if( $('.hmSlider').length ){
    $('.hmSlider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      arrows:true,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

  /* End-of-shariful*/



  if (windowWidth <= 991) {
    $('.hdr-humberger').on('click', function(e){
      $('.xs-main-nav-cntlr').addClass('opacity-1');
      $('.bdoverlay').addClass('active');
      $('body').addClass('active-scroll-off');
      $(this).addClass('active-collapse');
    });
    $('.closebtn').on('click', function(e){
      $('.bdoverlay').removeClass('active');
      $('.xs-main-nav-cntlr').removeClass('opacity-1');
      $('body').removeClass('active-scroll-off');
      $('.line-icon').removeClass('active-collapse');
    });
    
    $('li.menu-item-has-children > a').on('click', function(e){
      e.preventDefault();
    //$('li.menu-item-has-children .sub-menu').slideUp(300);
    $(this).toggleClass('sub-menu-active');
    $(this).toggleClass('sub-menu-plus');
    //$(this).next().slideDown(300);
    $(this).next().slideToggle(300);
    $(this).css('color', '#ee2029');

  });
  }
  var allPanels = $('.hh-accordion-des').hide();
  $('.hh-accordion-hdr').click(function() {
    allPanels.slideUp();
    $('.hh-accordion-hdr').removeClass('hh-accordion-active');
    $(this).next().slideDown();
    $(this).addClass('hh-accordion-active');
    return false;
  });

  /*$('.hh-accordion-hdr').on('click', function() {
    $(this).next().slideUp();
    var $box = $(this).closest('.hh-accordion-tab-row');
    $box.find('.hh-accordion-des').stop().slideToggle();
    $box.siblings().find('.hh-accordion-des').stop().slideUp();
    
    return false;
  });*/
/*  $('.hh-accordion-des').hide();
  $('.hh-accordion-hdr').on('click', function() {
    var current = $(this).next('.hh-accordion-des');
    if (current.is(':visible')) {
      current.slideUp();
    } else {
      current.slideDown();
    }
    return false;
  });
*/

  $('.ptPgslider').slick({
    prevArrow: $('.slick-arrows .pt-slick-prev'),
    nextArrow: $('.slick-arrows .pt-slick-next'),
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    dots: true,
    dotsClass: 'custom_paging',
    customPaging: function (slider, i) {
        console.log(slider);
        return  (i + 1) + ' de ' + slider.slideCount;
    }
  });
  /* End-of-Noyon*/





  /* End-of-Ranojit*/
if( $('.mainSlider').length ){
    $('.mainSlider').slick({
      dots: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      draggable: false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            arrows: false,
          }
        }
      ]
    });
}
if( $('.mainInnerSlider').length ){
    $('.mainInnerSlider').slick({
      infinite: false,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      draggable: false,
    });
}

if( $('.blogGrdItemsSlider').length ){
  $('.blogGrdItemsSlider').slick({
      dots: true,
      slidesPerRow: 3,
      arrows: true,
      rows: 2,
      adaptiveHeight: true,
      dotsClass: 'blog-ls-slider-custom-pagi reset-list',
      prevArrow: $('.blog-grd-items-cntlr .ls-prev'),
      nextArrow: $('.blog-grd-items-cntlr .ls-next'),
      customPaging: function(slider, i) {
        return '';
      },
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesPerRow: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesPerRow: 3,
            rows: 1,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });
  $('.blog-ls-slider-custom-pagi').appendTo('.blog-slider-moving-cntlr');
}



if( $('.arSlider').length ){
    $('.arSlider').slick({
      dots: true,
      infinite: false,
      arrows: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
       adaptiveHeight: true,
      dotsClass: 'ar-slider-custom-pagi reset-list',
      prevArrow: $('.ar-slider-wrp .ls-prev'),
      nextArrow: $('.ar-slider-wrp .ls-next'),
      customPaging: function(slick,index) {
          return '';
      }
    });

    $('.ar-slider-custom-pagi').appendTo('.ar-slider-moving-cntlr');
}


if( $('.blogSliderTop').length ){
    $('.blogSliderTop').slick({
      dots: true,
      arrows: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: false,
      dotsClass: 'bt-slider-custom-pagi reset-list',
      prevArrow: $('.blog-slider-top-cntlr .ls-prev'),
      nextArrow: $('.blog-slider-top-cntlr .ls-next'),
      customPaging: function(slider, i) {
        return '';
      },
    });
    $('.bt-slider-custom-pagi').appendTo('.bt-slider-moving-cntlr');

}



var container = $(".container").width();
var sideWidh = (windowWidth - container) / 2;

var mainSliderSecInrHeight = $('.main-slider-sec-inr').outerHeight();
$('.main-slider-sec-rgt-angle').css("border-bottom-width", mainSliderSecInrHeight);

$('.main-slider-sec-rgt-bg').css("width", sideWidh);

$( window ).resize(function() {
  var container = $(".container").width();
  var sideWidh = (windowWidth - container) / 2;
  var mainSliderSecInrHeight = $('.main-slider-sec-inr').outerHeight();
  $('.main-slider-sec-rgt-angle').css("border-bottom-width", mainSliderSecInrHeight);

  $('.main-slider-sec-rgt-bg').css("width", sideWidh);
});

$('.main-slider-sec-rgt-angle-xs-2').css("border-left-width", windowWidth);
$( window ).resize(function() {
  $('.main-slider-sec-rgt-angle-xs-2').css("border-left-width", windowWidth);
});

})(jQuery);