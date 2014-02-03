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

	<div class="columns medium-4">
		<div id="cost">
			<div id="cost-total">
				<hr>

				<div class="container">

				</div>

			</div>

			<a href="#" class="support_button">Cancel</a>
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
	$('.percent').after('<output id="rangevalue">0%</output>');

	$(".cost").prependTo("#cost-total");

	$(".gform_footer").appendTo("#cost");

	$(function(){ // document ready
 
  if (!!$('#cost').offset()) { // make sure ".sticky" element exists
 
    var stickyTop = $('#cost').offset().top; // returns number 
 
    $(window).scroll(function(){ // scroll event
 
      var windowTop = $(window).scrollTop(); // returns number 
 
      if (stickyTop < windowTop){
        $('#cost').css({ position: 'fixed', top: 20, width: '27.5%'});
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
