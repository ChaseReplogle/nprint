<?php
/*
Template Name: Calculator
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<?php include 'nav-account.php'; ?>
<?php include 'nav-main.php'; ?>
<?php include 'nav-dashboard.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-8 page-main-content">
		
	<?php the_content(); ?>

	</div>

	<div class="columns medium-4 sidebar">
		<div id="cost">
			<div id="cost-total">

				<div class="container">

				</div>
				<div class="clear"></div>
			</div>

			<a href="/dashboard" class="support_button">Cancel</a>
			<a href="" class="secondary_button" id="submit_button">Save & Add to Cart</a>

		</div>

	</div>

	<hr>

</div>

<?php endwhile; endif; ?>

<script>
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

	$( "#submit_button" ).click(function() {
	  $( "input[type='submit']" ).trigger( "click" );
	});

	$(function(){ // document ready
 
  if (!!$('#cost').offset()) { // make sure ".sticky" element exists
 
    var stickyTop = $('#cost').offset().top; // returns number 
 
    $(window).scroll(function(){ // scroll event
 
      var windowTop = $(window).scrollTop(); // returns number 
 
      if (stickyTop < windowTop){
        $('#cost').css({ position: 'fixed', top: 20, width: '28%'});
      }
      else {
        $('#cost').css({ position: 'static', width: 'auto'});
      }
 
    });
 
  }
 
});
</script>

<div class="footer-wrapper">


<?php get_footer(); ?>
