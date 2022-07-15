/* //////// Hide Navbar on scroll //////// */
$(function () {

	"use strict";

	var lastScrollTop = 0;

	var $navbar = $('header');

	$(window).on("scroll", function () {

		var st = $(this).scrollTop();

		if (st > lastScrollTop) { // scroll down

			// use this is jQuery full is used
			$navbar.fadeOut()

			// use this to use CSS3 animation $navbar.addClass("fade-out");
			// $navbar.removeClass("fade-in"); use this if no effect is required
			// $navbar.hide();
		} else { // scroll up

			// use this is jQuery full is used
			$navbar.fadeIn()

			// use this to use CSS3 animation $navbar.addClass("fade-in");
			// $navbar.removeClass("fade-out"); use this if no effect is required
			// $navbar.show();
		}
		lastScrollTop = st;
    });
    
});


$(function () {

    'use strict';

    $('#container').imagesLoaded(function () {

        // filter items on button click
        $('.filter-button-group').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({filter: filterValue});
        });

        var $grid = $('.grid').isotope({
            // options options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });

        // images have loaded

    });

    //Image Light Box Popup
    $('.image-link').magnificPopup({type:'image'});

    //Counter Up
    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });

});