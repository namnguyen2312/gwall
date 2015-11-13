(function() {

	/*toogle menu*/
	var bodyEl = document.body,
		content = document.querySelector( '.content-wrap' ),
		openbtn = document.getElementById( 'menu-navicon' ),
		closebtn = document.getElementById( 'close-button' ),
		isOpen = false;

	function init() {
		initEvents();
	}

	function initEvents() {
		openbtn.addEventListener( 'click', toggleMenu );
		
		if( closebtn ) {
			closebtn.addEventListener( 'click', toggleMenu );
		}

		// close the menu element if the target it´s not the menu element or one of its descendants..
		content.addEventListener( 'click', function(ev) {
			var target = ev.target;
			if( isOpen && target !== openbtn ) {
				toggleMenu();
			}
		} );
	}

	function toggleMenu() {
		if( isOpen ) {
			classie.remove( bodyEl, 'show-menu' );
		}
		else {
			classie.add( bodyEl, 'show-menu' );
		}
		isOpen = !isOpen;
	}

	init();

	/*show/hide the portfolio description*/
    $.fn.showHide = function (options) {
        var defaults = {
            speed: 1000,
            easing: '',
            changeText: 0,
            showText: 'Show',
            hideText: 'Hide'
        };
        var options = $.extend(defaults, options);
        $(this).click(function () {
            $('.toggleDiv').slideUp(options.speed, options.easing);
            var toggleClick = $(this);
            var toggleDiv = $(this).attr('rel');
            $(toggleDiv).slideToggle(options.speed, options.easing, function () {
                if (options.changeText == 1) {
                    $(toggleDiv).is(":visible") ? toggleClick.text(options.hideText) : toggleClick.text(options.showText);
                }
            });
            return false;
        });
    };

	/*Show/Hide the portfolio*/
	$('div.toggleDiv').hide();
	$('.show-hide').showHide({
        speed: 500,
        changeText: 0,
        showText: 'View',
        hideText: 'Close'
    });

	/*Aminiated*/

	//item animated
	 $('.item-background').bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass('animated fadeInDown');
        } else {
            $(this).removeClass('animated fadeOutUp');
        }
    });

	//benefit animated 

	$('.bannercontainerbenefit').bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass('animated fadeInRight');
        } else {
            $(this).removeClass('animated fadeOutUp');
        }
    });
    //service animated 
    $('.maintenance').bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass('animated fadeInDown');
        } else {
            $(this).removeClass('animated fadeOutUp');
        }
    });
    $('.consulting').bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass('animated fadeInDown');
        } else {
            $(this).removeClass('animated fadeOutUp');
        }
    });

    //slider
   jQuery('.banner').revolution(
    {
        delay:5000,
        startwidth:1170,
        startheight:500,
        onHoverStop:"on",
        //hideThumbs:1000,
        navigationType:"none",
        stopAtSlide:1,
        stopAfterLoops:0,
    });
    //benefit
    jQuery('.bannerbenefit').revolution(
    {
        delay:5000,
        startwidth:370,
        startheight:220,
        onHoverStop:"off",
        //hideThumbs:1000,
        navigationType:"bullet",
        navigationArrows:"none",
        stopAtSlide:0,
        stopAfterLoops:0,
    });
    //portfolio
    var $container = $('.portfolioContainer');
    $container.isotope({
            filter: '*',
    });
    $('.filters').on('click','button',function(){
        var filterValue = $(this).attr('data-filter');
        $container.isotope({filter:filterValue});
    })

    //slider
       $('.main-title h2').bind('inview', function (event, visible) {
            if (visible) {
                $(this).addClass('animated fadeInDown');
            } else {
                $(this).removeClass('animated fadeOutUp');
            }
        });
        $('.product-img').bind('inview', function (event, visible) {
            if (visible) {
                $(this).addClass('animated fadeInLeft');
            } else {
                $(this).removeClass('animated fadeOutUp');
            }
        });

          $('.product-info').bind('inview', function (event, visible) {
            if (visible) {
                $(this).addClass('animated fadeInRight');
            } else {
                $(this).removeClass('animated fadeOutUp');
            }
        });
                    
})();