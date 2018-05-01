// Get IE or Edge browser version
var version = detectIE();

if (version === false) {
	//not IE/Edge
} else if (version >= 12) {
	// Edge
	document.body.classList.add("edge");
} else {
	// IE
	document.body.classList.add("ie");
}

/**
 * detect IE
 * returns version of IE or false, if browser is not Internet Explorer
 */
function detectIE() {
	"use strict";
  var ua = window.navigator.userAgent;

  var msie = ua.indexOf("MSIE ");
  if (msie > 0) {
    // IE 10 or older => return version number
    return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
  }

  var trident = ua.indexOf("Trident/");
  if (trident > 0) {
    // IE 11 => return version number
    var rv = ua.indexOf("rv:");
    return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
  }

  var edge = ua.indexOf("Edge/");
  if (edge > 0) {
    // Edge (IE 12+) => return version number
    return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
  }

  // other browser
  return false;
}


//Resize footer SVG
window.onload = function initalSVG() {
	"use strict";
	var angle = window.innerWidth / 5120;

  //hero variables
  var hbl = "0 1,",
      htl = "0 " + angle + ",",
      htr = "1 0,",
      hbr = "1 1";

  document.querySelector("#clip-polygon-footer > polygon").setAttribute("points", hbl + htl + htr + hbr);
};

window.onresize = function changeSVG() {
	"use strict";
	var angle = window.innerWidth / 5120;

  //hero variables
 	var hbl = "0 1,",
      htl = "0 " + angle + ",",
      htr = "1 0,",
      hbr = "1 1";

  document.querySelector("#clip-polygon-footer > polygon").setAttribute("points", hbl + htl + htr + hbr);
};


// Finding the parent of an iframe
jQuery(document).ready(function($){
	"use strict";
	var ifr = $("iframe");
	var ifrPar = ifr.parent();
	if ( !ifrPar.hasClass("zopim") && !ifrPar.is("body")) {
		ifrPar.addClass("iframe-parent");
	}
	//$("body").removeClass("iframe-parent");

});

// scroll to first section
jQuery(document).ready(function($){
	"use strict";
	$(".arrow").click(function() {
		$("html,body").animate({
			scrollTop: $(".one").offset().top},
			"slow");
	});
});

//Gallery masonry init
jQuery(document).ready(function($){
	"use strict";
	//Add the masonry class to all but first 3
	$(".gallery>.gallery-item:not(:first-of-type)").addClass("small-img");
	$(".gallery>.gallery-item:first-of-type").addClass("big-img");

	// init Isotope
	var $grid = $(".gallery").isotope({
		// options
		itemSelector: ".small-img",
		stamp: ".big-img",
		masonry: {
			gutter: 30,
			transitionDuration: "0.2s"
		}

	});
	// layout Isotope after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.isotope("layout");
	});

});


// Changing colors of header
jQuery(document).ready(function($){
	"use strict";
	var hamburger = $("#ham>span"),
		logo = $("#logo"),
		phone = $("#phone"),
		gradient = $(".gradient"),
		body = $("body");

	// Function to be called to set the initial color
	$.fn.setColor = function(colorBg, color){
        hamburger.addClass(colorBg);
		phone.addClass(color);
		logo.addClass(color);
    };

	// Function to be called to change the color and remove the gradient + logo
	$.fn.switchToColor = function(colorBg, color){
        //hamburger.removeClass();
		//phone.removeClass();
		hamburger.addClass(colorBg);
		phone.addClass(color);
		gradient.css("top", "-16rem");
		logo.parent().css("margin-top", "-6rem");
    };

	// Function to be called to change back the color and get the gradient + logo back
	$.fn.switchFromColor = function(colorBg, color){
        hamburger.removeClass(colorBg);
		phone.removeClass(color);
		gradient.css("top", "0rem");
		logo.parent().css("margin-top", "0rem");
    };

	// Checking what page are we on and adjusting based on it
	if (body.hasClass("front-page") || body.hasClass("overview-blog")) {

		//set inital color green
		$.fn.setColor("green-bg","green");

		//Make the logo dissapear
		$(window).scroll(function() {
			var scroll = $(window).scrollTop(),
				vph = $(window).height() / 3 * 2 - 40;

			if ( (scroll >= vph) ) {
				logo.parent().css("margin-top", "-6rem");
			} else {
				logo.parent().css("margin-top", "0rem");
			}
		});

	} else if (body.hasClass("overview-work") || body.hasClass("overview-about")) {

		//set inital color red
		$.fn.setColor("red-bg","red");

		//CHANGE HEADER COLOR ON SCROLL PAST HEADER
		$(window).scroll(function() {
			var scroll = $(window).scrollTop(),
				vph = $(window).height() / 3 * 2 - 40;

			if ( (scroll >= vph) ) {
				$.fn.switchToColor("white-bg","white");
			} else {
				$.fn.switchFromColor("white-bg","white");
			}
		});

	} else if (body.hasClass("single-blog") || body.hasClass("single-contact")) {

		//CHANGE HEADER COLOR ON SCROLL PAST HEADER
		$(window).scroll(function() {
			var scroll = $(window).scrollTop(),
				vph = $(window).height() / 3 * 2 - 40;

			if ( (scroll >= vph) ) {
				$.fn.switchToColor("green-bg","green");
			} else {
				$.fn.switchFromColor("green-bg","green");
			}
		});

	} else if (body.hasClass("single-work") || body.hasClass("single-about")) {
		//CHANGE HEADER COLOR ON SCROLL PAST HEADER
		$(window).scroll(function() {
			var scroll = $(window).scrollTop(),
				vph = $(window).height() / 3 * 2 - 40;

			if ( (scroll >= vph) ) {
				$.fn.switchToColor("red-bg","red");
			} else {
				$.fn.switchFromColor("red-bg","red");
			}
		});
	} else {
		//set inital color red
		$.fn.setColor("red-bg","red");

		//CHANGE HEADER COLOR ON SCROLL PAST HEADER
		$(window).scroll(function() {
			var scroll = $(window).scrollTop(),
				vph = $(window).height() / 3 * 2 - 40;

			if ( (scroll >= vph) ) {
				gradient.css("top", "-16rem");
				logo.parent().css("margin-top", "-6rem");
			} else {
				gradient.css("top", "0rem");
				logo.parent().css("margin-top", "0rem");
			}
		});
	}

});


//Whitepaper form
jQuery(document).ready(function($){
	"use strict";

	var $wpLeft = $(".whitepaper-left");
	var $wpRight = $(".whitepaper-right");

	$(".whitepaper-left .whitepaper-button, .whitepaper-left .close").click(function(){
		overlayToggle($wpLeft);
	});

	$(".whitepaper-right .whitepaper-button, .whitepaper-right .close").click(function(){
		overlayToggle($wpRight);
	});

	var overlayToggle = function($whitepaper) {
			$whitepaper.toggleClass("form-active");
	}

	// $(".whitepaper-button").click(function(){
	// 	$(".whitepaper").toggleClass("form-active");
	// });
	// $(".whitepaper .close").click(function(){
	// 	$(".whitepaper").toggleClass("form-active");
	// });
});

//Dropdown
jQuery(document).ready(function($){
	$("select").each(function(){
	    var $this = $(this), numberOfOptions = $(this).children("option").length;

	    $this.addClass("select-hidden");
	    $this.wrap("<div class=\"select\"></div>");
	    $this.after("<div class=\"select-styled\"></div>");

	    var $styledSelect = $this.next("div.select-styled");
	    $styledSelect.text($this.children("option").eq(0).text());

	    var $list = $("<ul />", {
	        "class": "select-options"
	    }).insertAfter($styledSelect);

	    for (var i = 0; i < numberOfOptions; i++) {
	        $("<li />", {
	            text: $this.children("option").eq(i).text(),
	            rel: $this.children("option").eq(i).val()
	        }).appendTo($list);
	    }

	    var $listItems = $list.children("li");

	    $styledSelect.click(function(e) {
	        e.stopPropagation();
	        $("div.select-styled.active").not(this).each(function(){
	            $(this).removeClass("active").next("ul.select-options").hide();
	        });
	        $(this).toggleClass("active").next("ul.select-options").toggle();
	    });

	    $listItems.click(function(e) {
	        e.stopPropagation();
	        $styledSelect.text($(this).text()).removeClass("active");
	        $this.val($(this).attr("rel"));
	        $list.hide();
	        //console.log($this.val());
	    });

	    $(document).click(function() {
	        $styledSelect.removeClass("active");
	        $list.hide();
	    });

	});

});


//***************************//
//			Plugins
//***************************//
jQuery(document).ready(function($){
	"use strict";
	$(".hashtags-slider").slick({
		mobileFirst: true,
		swipeToSlide: true,
		dots: true,
		arrows: false,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  responsive: [
			{
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 1024,
	      settings: {
					dots: false,
					arrows: false,
					slidesToShow: 3,
				  slidesToScroll: 3
				}
	    }
	  ]
	});

	$(".testimonials-slider").slick({
		dots:true,
		infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	});

	$(".logo-wall-slider").slick({
		mobileFirst: true,
		arrows: false,
	  centerMode: true,
	  slidesToShow: 2,
		swipeToSlide: true,
		speed: 300,
		responsive: [
			{
	      breakpoint: 767,
	      settings: {
					centerMode: true,
					arrows: false,
	        slidesToShow: 4
	      }
	    },
	    {
	      breakpoint: 1023,
	      settings: {
					centerMode: false,
					arrows: false,
					slidesToShow: 7
				}
	    }
	  ]
	});
});



/*$(function() {
	"use strict";
    var $sidebar   = $("#sidebar"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 15;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });

});*/


/**
 * Hover on Scroll
 * A jQuery plugin that displays hover affects on mobile during scrolling
 * See www.bencomeau.com/hover-on-scroll for more information
 * https://github.com/bencomeau/hover-on-scroll
 * Version 1.0, October 15 2015
 * by Ben Comeau
 */



/*
 * ScrollToFixed
 * https://github.com/bigspotteddog/ScrollToFixed
 *
 * Copyright (c) 2011 Joseph Cava-Lynch
 * MIT license
 */
