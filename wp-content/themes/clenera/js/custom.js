jQuery(document).ready(function($){
	$this = $(this);

	$('.fancybox').fancybox();
	$('#accordion' ).accordion();
	$('.flexslider').flexslider({
		directionNav: true,
	});

	$(function(){
		$('#burger').click(function(){
			$('#mobileNav').toggleClass('toggled');
		});
	});

	$('.parallax').imageScroll({
		container: $('#cleneraDataWrap'),
		coverRatio: 0.50,
	});

	$('.count').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 2000,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(commaSeparateNumber(Math.round(now)));
	        }
	    });
	});

	function commaSeparateNumber(val){
		while (/(\d+)(\d{3})/.test(val.toString())){
		  val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		}
		return val;
	}

	$('body').flowtype({
		minimum   : 775,
		maximum   : 1200,
		minFont   : 8,
		maxFont   : 60,
		fontRatio : 60
	});

    var slide = function () {
        $("#homeSubTitle").fadeIn(1200, 'swing');
    }
    var more = function() {
    	$('.more-arrow').fadeIn(1200, 'swing');
    }
    window.setTimeout(slide, 7000);
    window.setTimeout(more, 8000);


    $(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

    $('.more-arrow').hover(function(){
		$(this).animate({
			bottom: "+=1%",
		}, 300);
	}, function(){
		$(this).animate({
			bottom: "-=1%",
		}, 300);
	});
});