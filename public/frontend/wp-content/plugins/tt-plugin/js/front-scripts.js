/*
Author: TrendyTheme
Version: 1.0
*/

jQuery(function ($) {

    'use strict';

    (function () {

        $('.creptaam-price-ticker').webTicker({
            duplicate:true,
            startEmpty:false
        });

    }());

    $(window).on('load', function() {
    	setTimeout(
	    	function() {
	      	$('.ccc-widget a').removeAttr("href");
	    }, 2000);
    });

});