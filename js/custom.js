	$(".js-height-full").height($(window).height());
	$(".js-height-parent").each(function() {
	    $(this).height($(this).parent().first().height());
	});


	
	
	


	// Fun Facts
	function count($this) {
	    var current = parseInt($this.html(), 10);
	    current = current + 1; /* Where 50 is increment */

	    $this.html(++current);
	    if (current > $this.data('count')) {
	        $this.html($this.data('count'));
	    } else {
	        setTimeout(function() {
	            count($this)
	        }, 50);
	    }
	}

	$(".stat-timer").each(function() {
	    $(this).data('count', parseInt($(this).html(), 10000));
		$(this).animate({
			
		}, 200, function(){

		});
	    $(this).html('0');
	    count($(this));
	});



	$('.header').affix({
	    offset: {
	        top: 100,
	        bottom: function() {
	            return (this.bottom = $('.footer').outerHeight(true))
	        }
	    }
	})

	$(window).load(function() {
	    $("#preloader").on(500).fadeOut();
	    $(".preloader").on(600).fadeOut("slow");
	});

	

   /* Preloader
    * -------------------------------------------------- */
   const ssPreloader = function() {

	const preloader = document.querySelector('#preloader');
	if (!preloader) return;

	document.querySelector('html').classList.add('ss-preload');
	
	window.addEventListener('load', function() {
		
		document.querySelector('html').classList.remove('ss-preload');
		document.querySelector('html').classList.add('ss-loaded');

		preloader.addEventListener('transitionend', function(e) {
			if (e.target.matches("#preloader")) {
				this.style.display = 'none';
			}
		});
	});

	(function ssInit() {

        ssPreloader();

    })();

	// force page scroll position to top at page refresh
	// window.addEventListener('beforeunload' , function () {
	//     window.scrollTo(0, 0);
	// });

}; // end ssPreloader


	//Counter 
	$(".counter").each(function () {
		$(this)
		  .prop("Counter", 0)
		  .animate(
			{
			  Counter: $(this).text(),
			},
			{
			  duration: 4000,
			  easing: "swing",
			  step: function (now) {
				now = Number(Math.ceil(now)).toLocaleString('en');
									  $(this).text(now);
			  },
			}
		  );
	  });
	  
	





