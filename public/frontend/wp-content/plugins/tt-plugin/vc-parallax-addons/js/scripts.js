
jQuery(function ($) {

    'use strict';

	$('.tt-parallax-wrapper').each(function() {
		var $this = $(this);
		var ttRowFind = $this.prevAll('.vc_row:first');
		ttRowFind.prepend(this);
	});

	$(window).on('load', function(){
		var parallaxWrapper = $('.tt-parallax-wrapper');
		parallaxWrapper.show();
        parallaxWrapper.enllax();
    });

});