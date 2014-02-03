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
	$('#input_2_31').attr('type', 'range');
	$('#input_2_31').attr('min', '0');
	$('#input_2_31').attr('max', '100');
	$('#input_2_31').attr('onchange', 'rangevalue.value=value');
	$('#input_2_31').after('<output id="rangevalue">0</output>');

	$(".gform_footer").prepend("#cost");

	$(".cost").add("#cost-total");

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
