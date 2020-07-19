(function($) {
/*------
Home Page Tab-->
------*/

/*  $('.rpTabSlider').each(function(index) {
    var slickInduvidual = $(this);
    slickInduvidual.slick({ 
      dots: true,infinite: false,speed: 300,slidesToShow: 1,slidesToScroll: 1,
      draggable: false,
      nextArrow: $('.prnext-'+index),
      prevArrow: $('.prprev-'+index),
    });
  });*/
var winHeight = $(window).height();
var windowWidth = $(window).width();


/*home immrob*/
if (windowWidth>767) {
  if( $('.rpTabSlider').length ){
    var x =  $('.rpTabSlider ').children();

    for (i = 0; i < x.length ; i += 6) {
      x.slice(i,i+6).wrapAll('<ul class="clearfix"></ul>');
    }
    $('.rpTabSlider').each(function(index) {
      var rptabs1 = $(this);
      rptabs1.slick({ 
        slidesToShow: 1,
        slidesToScroll: 1,
        prevNext: true,
        arrows: true,
        dots: true,
        draggable : false,
        nextArrow: $('.prnext-'+index),
        prevArrow: $('.prprev-'+index),
      });
    });
  }
}else{
  if( $('.rpTabSlider').length ){
    var x =  $('.rpTabSlider').children();

    for (i = 0; i < x.length ; i += 1) {
      x.slice(i,i+1).wrapAll('<ul class="clearfix"></ul>');
    }

    $('.rpTabSlider').each(function(index) {
      var rptabs1 = $(this);
      rptabs1.slick({ 
        slidesToShow: 1,
        slidesToScroll: 1,
        prevNext: true,
        arrows: true,
        dots: true,
        draggable : false,
        nextArrow: $('.prnext-'+index),
        prevArrow: $('.prprev-'+index),
      });
    });
  }
}


/*blog slider*/
  if( $('.blog-tab-slider').length ){
    var x =  $('.blog-tab-slider').children();

    for (i = 0; i < x.length ; i += 6) {
      x.slice(i,i+6).wrapAll('<ul class="clearfix blog-tab-slide-item"></ul>');
    }
    $('.blog-tab-slider').each(function(index) {
      var rptabs1 = $(this);
      rptabs1.slick({ 
        slidesToShow: 1,
        slidesToScroll: 1,
        prevNext: true,
        arrows: true,
        dots: true,
        draggable : false
      });
    });
  }


if( $('.rp-tab-slider-xs').length ){
  $('.rp-tab-slider-xs').each(function(index) {
    var slickInduvidual = $(this);
    slickInduvidual.slick({ 
      dots: true,infinite: false,speed: 300,slidesToShow: 1,slidesToScroll: 1,
      draggable: false,
      nextArrow: $('.prnext-'+index),
      prevArrow: $('.prprev-'+index),
    });
  });
}

$( "#tabs" ).tabs({
  classes: {
    "ui-tabs": "highlight"
  },
    activate: function(event, ui) {
        var currentTabIndex = ui.newTab.index().toString();
        var currentTabIndex = parseInt(currentTabIndex); //0,1
        var currentTabIndex = currentTabIndex + 1;

        $('.rpTabSlider').slick('refresh'); //make slick work
        //make after before img work
        $('#tabs-'+currentTabIndex).find('.afterBeforeEffect').each(function(index) {
          var afterBeforeEffectInduvidual = $(this);
          afterBeforeEffectInduvidual.twentytwenty({ 
              click_to_move: true,
              before_label: 'ANTES', // Set a custom before label
              after_label: 'DESPUÉS',  
          });
        });

    }  
});
/*------
<--End Home Page Tab
------*/



/*------
Blog  Tab-->
------*/

$( "#btabs" ).tabs({
  classes: {
    "ui-tabs": "highlight"
  },
    activate: function(event, ui) {
        var currentTabIndex = ui.newTab.index().toString();
        //var currentTabIndex = parseInt(currentTabIndex);
        console.log(event);
        $('.blog-tab-slider').slick('refresh');
    }  
});

/*------
<--End Blog  Tab
------*/





/*------
Home Inmobiliaria Tab-->
------*/

/*if( $('.img-bx-slider').length ){
  $('.img-bx-slider').each(function(index) {
    var slickInduvidual = $(this);
    slickInduvidual.slick({ 
      dots: true,infinite: false,speed: 300,slidesToShow: 1,slidesToScroll: 1,arrows: false,fade: true
    });
  });
}


$( "#h2tabs" ).tabs({
  classes: {
    "ui-tabs": "highlight"
  },
    activate: function(event, ui) {
        var currentTabIndex = ui.newTab.index().toString();
        //var currentTabIndex = parseInt(currentTabIndex);
        console.log(event);
        $('.rpTabSlider').slick('refresh');
        $('.img-bx-slider').slick('refresh');
    }  
});*/


if( $('#h2tabs #tabs-1 .img-bx-slider').length ){
  $("#h2tabs #tabs-1 .img-bx-slider").each(function(index) {
  var slickInduvidual = $(this);
  slickInduvidual.slick({ 
  dots: true,infinite: false,speed: 300,slidesToShow: 1,slidesToScroll: 1,arrows: false,fade: true
  });
  });
}
//$("#aptabs #tabs-1 .img-bx-slider").slick('unslick');
$( "#h2tabs" ).tabs({
  classes: {
  "ui-tabs": "highlight"
  },
  activate: function(event, ui) {
  var currentTabIndex = ui.newTab.index().toString();
  var currentTabIndex = parseInt(currentTabIndex); //0,1
  var currentTabIndex = currentTabIndex + 1;
  var Tabto = '#h2tabs #tabs-'+currentTabIndex;
  //console.log(event);


  $('.rpTabSlider').slick('refresh');
  //$('.img-bx-slider').slick('refresh');
  //$('.img-bx-slider').slick('refresh'); //ui-tabs-panel

  $(Tabto).find('.img-bx-slider').not('.slick-initialized').each(function(index) {
  var slickInduvidual = $(this);
  slickInduvidual.slick({ 
  dots: true,infinite: false,speed: 300,slidesToShow: 1,slidesToScroll: 1,arrows: false,fade: true
  });
  });
  $(Tabto).find('.img-bx-slider.slick-initialized').slick('refresh');
  } 
});

/*------
<--End Home Inmobiliaria Tab
------*/



$('.av-share-icons-btn').on('click', function (){
  $('.av-share-icons-btn').not(this).parent().removeClass('av-share-show');
  $(this).parent().toggleClass("av-share-show");
});

/**
Blog single page top slider
*/
if( $('#blog-slider-top').length ){
    $('#blog-slider-top').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: false,
    });
}


/**
AfterBeforeEffect
*/

if( $('.afterBeforeEffect').length ){
  $('.afterBeforeEffect').each(function(index) {
    var afterBeforeEffectInduvidual = $(this);
    afterBeforeEffectInduvidual.twentytwenty({ 
        click_to_move: true,
        before_label: 'ANTES', // Set a custom before label
        after_label: 'DESPUÉS',  
    });
  });
}

// On before slide change

/*$('#blog-slider-top').on('beforeChange', function(event, slick, currentSlide, nextSlide){
  console.log(nextSlide);
  $('.afterBeforeEffect').each(function(index) {
      var afterBeforeEffectInduvidual = $(this);
      afterBeforeEffectInduvidual.twentytwenty({ 
          click_to_move: true,
          before_label: 'ANTES', // Set a custom before label
          after_label: 'DESPUÉS',  
      });
    });
});
*/





})(jQuery);


