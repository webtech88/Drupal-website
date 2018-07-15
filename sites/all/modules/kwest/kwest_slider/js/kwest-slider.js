jQuery.noConflict();
(function($) {
$(function() {
	
	$(document).ready(function(){
		kwestSlider();
	});
    
    
  function kwestSlider(){
    if($('.background-slider .kwest-slider-holder').length){
      var sliderAutoplay = Drupal.settings.sliderAutoplay;
      var sliderAutoplayTimeout = Drupal.settings.sliderAutoplayTimeout;

      if(sliderAutoplay){
        var autoplaySlider = true;
      }else{
        var autoplaySlider = false;
      }

      if(sliderAutoplayTimeout){
        var autoplayTimeoutSlider = sliderAutoplayTimeout;
      }else{
        var autoplayTimeoutSlider = 7000;
      }

      var slider_cycle = $('.background-slider .kwest-slider-holder');
      slider_cycle.owlCarousel({
          items:1,
          autoHeight:true,
          loop:true,
          //center:true,
          autoWidth:false,
          autoplay:autoplaySlider,
          autoplayTimeout:autoplayTimeoutSlider,
          navSpeed:1200,
          autoplaySpeed:1200,
          dotsSpeed:1200,
          dots:true,
          nav:true,
          navText:["c","c"],
      });
      
    }
  }
    
});
})(jQuery);