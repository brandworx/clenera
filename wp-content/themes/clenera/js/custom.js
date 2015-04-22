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


    var slide = function () {
        $("#homeSubTitle").fadeIn(1200, 'swing');
    }
    window.setTimeout(slide, 6000);
});