(function($) {
/*------
Home Page Tab-->
------*/

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
if( $( "#tabs" ).length ){
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
}
/*------
<--End Home Page Tab
------*/














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


