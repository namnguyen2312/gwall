$(document).ready(function(){
			 
			var mainEl = $('#mainContent');
			var transitionDuration = 800;
			var columnWidth = 390;
			 
			mainEl.isotope({
			    animationEngine: 'best-available', //CSS3 if browser supports it, jQuery otherwise
			    /*animationOptions: {
			        duration: transitionDuration
			    },*/
			    containerStyle: {
			        position: 'relative',
			        overflow: 'visible'
			    },
			    masonry: {
			        columnWidth: columnWidth
			    }
			});

			function setSizes(){
			    var availableSpace = $(window).width();
			    var potentialColumns = availableSpace/columnWidth;
			    potentialColumns = Math.floor(potentialColumns);
			     
			    var newWidth = potentialColumns * columnWidth;
			    $('.container').width(newWidth);
			}
			setSizes();

			function layoutTimer(){
			 
			        setTimeout(function(){
			        mainEl.isotope('layout');
			    }, transitionDuration);
			     
			}
			 
			layoutTimer();

			$(window).resize(function(){
			    setSizes();
			    layoutTimer();
			});
		});