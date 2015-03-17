jQuery(document).ready(function($){
	$this = $(this);

	$(".fancybox").fancybox();
	$( "#accordion" ).accordion();

	$(function(){
		$('#burger').click(function(){
			$('#mobileNav').toggleClass('toggled');
		});
	});

});