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

	<a href="/dashboard" class="support_button">Cancel</a>

	</div>

	<div class="columns medium-4 sidebar">

		<span>width fix</span>

		<div id="cost">
			<h3>Cost and Markup</h3>

			<div id="cost-total">

				<div class="clear"></div>
			</div>

			<a href="#" data-reveal-id="myModal" data-reveal class="calculator-link"><i class="fa fa-table"></i> Calculator</a>

		</div>

	</div>

	<hr>

</div>


<div  id="myModal" class="reveal-modal calculator-modal" data-reveal>
   <div id="calculator">
		<!-- Screen and clear key -->
		<a class="close-reveal-modal">&#215;</a>
			 <div class="clear"></div>
		<div class="top">
			<span class="clear">C</span>
			<div class="screen"></div>
		</div>
		
		<div class="keys">
			<!-- operators and other keys -->
			<span>7</span>
			<span>8</span>
			<span>9</span>
			<span class="operator">+</span>
			<span>4</span>
			<span>5</span>
			<span>6</span>
			<span class="operator">-</span>
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span class="operator">÷</span>
			<span>0</span>
			<span>.</span>
			<span class="eval">=</span>
			<span class="operator">x</span>
		</div>
	</div>
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

	$(function(){ // document ready
 
  if (!!$('#cost').offset()) { // make sure ".sticky" element exists
 
    var stickyTop = $('#cost').offset().top; // returns number 
 
    $(window).scroll(function(){ // scroll event
 
      var windowTop = $(window).scrollTop(); // returns number 
 
      if (stickyTop < windowTop){
        $('#cost').css({ position: 'fixed', top: 20});
      }
      else {
        $('#cost').css({ position: 'static', width: 'auto'});
      }
 
    });
 
  }
 
});

$('#cost').width($('.sidebar').outerWidth());

</script>

<div class="footer-wrapper">


<?php get_footer(); ?>
