jQuery.noConflict();
(function($) {
$(function() {
	// more code using $ as alias to jQuery
	$(document).ready(function(){
		kwest_anchorLinks();
		kwest_scrollHelp();
		kwest_stickyBlocks();
	});
	
	$(window).resize(function(){
		kwest_destroyStickyBlocks();
	});
	$(window).on("orientationchange", function(){
		kwest_destroyStickyBlocks();
	});
	$(window).load(function(){
		
	});

	
	function kwest_anchorLinks(){
		// scroll to top of the page
		if($('a.scroll-top').length){
			$('a.scroll-top').click(function(e){
				e.preventDefault();
				$('html, body').animate({
					scrollTop: 0
				}, 700);
			});
		}
	}

	// scroll help block
	function kwest_scrollHelp(){
		if($('.scroll-help').length){
			window.addEventListener("scroll", function(){
				var scrollTop = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
				if(scrollTop > 100){
					$('.scroll-help').addClass('active');
				}else{
					$('.scroll-help').removeClass('active');
				}
			}, false);
		}
	}

	// sticky block
	function kwest_stickyBlocks(){
		/*if($('#back-link').length){
			var topMargin = '';
			if($("body,html").width() > 1280){
				if($('.book-form').length){
					topMargin = $('.book-form').outerHeight();
				}
			}
			$('#back-link').scrollToFixed({
				marginTop: topMargin,
				minWidth: 720
			});
		}*/
	}

	// reload sticky blocks
	function kwest_destroyStickyBlocks(){
		$('.scroll-init-fixed').trigger('detach.ScrollToFixed');
		kwest_stickyBlocks();
	}
	
});
})(jQuery);