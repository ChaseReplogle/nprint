	$ = jQuery;
	$('.percent input').attr('type', 'range');
	$('.percent input').attr('min', '0');
	$('.percent input').attr('max', '100');
	$('.percent input').attr('onchange', 'rangevalue.value=value');
	$('.percent').after('<output class="cost" id="rangevalue">0</output>');
	$('.percent').after('<div class="clear"></div>');

	$(".cost").prependTo("#cost-total");

	$(".top-icon").prepend('<i class="fa fa-caret-square-o-up"></i>');
	$(".bottom-icon").prepend('<i class="fa fa-caret-square-o-down"></i>');
	$(".left-icon").prepend('<i class="fa fa-caret-square-o-left"></i>');
	$(".right-icon").prepend('<i class="fa fa-caret-square-o-right"></i>');
	$(".specs-icon").prepend('<i class="fa fa-pencil-square-o"></i>');

	$(function(){ // document ready
 
  if (!!$('#cost').offset()) { // make sure ".sticky" element exists
 
    var stickyTop = $('#cost').offset().top; // returns number 
 
    $(window).scroll(function(){ // scroll event
 
      var windowTop = $(window).scrollTop(); // returns number 
 
      if (stickyTop < windowTop){
        $('#cost').css({ position: 'fixed', top: 20});
      }
      else {
        $('#cost').css({ position: 'static',});
      }
 
    });
 
  }
 
});

$('#cost').width($('.sidebar span').outerWidth());
