// Hamburger toggle animation
jQuery(document).ready(function($){
	"use strict";

	$("#ham").click(function(event) {

		if ($("#ham").hasClass("open")) {

			//When closing the menu
			event.preventDefault();
			$(".menu-wrapper").removeClass("is-visible");
			$("#ham").removeClass("open");
			$("#logo, #phone").removeClass("translucent");
			var scroll = $(window).scrollTop(),
				vph = $(window).height() / 3 * 2 - 40;
			if ( (scroll < vph) ) {
				$(".gradient").css("top", "0rem").css("opacity","1");
			}
		}else{

			//When opening the menu
			event.preventDefault();
			$(".menu-wrapper").addClass("is-visible");
			$("#ham").addClass("open");
			$(".gradient").css("top", "-16rem").css("opacity","0");
			$("#logo, #phone").addClass("translucent");


		}
	});

	$(".menu-wrapper>.veil").click(function(event){
		event.preventDefault();
		$(".menu-wrapper").removeClass("is-visible");
		$("#ham").removeClass("open");
		$(".gradient").css("top", "0rem");
		$("#logo, #phone").removeClass("translucent");
	});
});
