/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
 
 
var cbpAnimatedHeader = (function() {
	
	var docElem = document.documentElement,
		header = document.querySelector( '#main-menu' ),
		didScroll = false,
		
	changeHeaderOn = ( $("#home").height() );

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 20 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy <= changeHeaderOn ) {
			classie.add( header, 'menu-hidden' );
		}
		else {
			classie.remove( header, 'menu-hidden' );
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();

$("nav#main-menu ul li").find("a.na").click(function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    });
});

$("nav#menu-movil ul li").find("a.na").click(function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    });
});

$("ul.servicios-ul").find("a.na").click(function(e) {
	e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    });
});

$("nav#navbar-servicios ul li").find("a.na").click(function(e) {
	
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    });
});