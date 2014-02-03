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

				<div class="container">

				</div>
				<div class="clear"></div>
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
	$('.percent').after('<output class="cost" id="rangevalue">0</output>');
	$('.percent').after('<div class="clear"></div>');

	$(".cost").prependTo("#cost-total");

	$(".gform_footer").appendTo("#cost");

	$$(document).ready(function () {

	    var length = $('.medium-4').height() - $('#cost').height() + $('.medium-4').offset().top;

	    $(window).scroll(function () {

	        var scroll = $(this).scrollTop();
	        var height = $('#cost').height() + 'px';

	        if (scroll < $('.sidebar').offset().top) {

	            $('#cost').css({
	                'position': 'absolute',
	                'top': '0'
	            });

	        } else if (scroll > length) {

	            $('#cost').css({
	                'position': 'absolute',
	                'bottom': '0',
	                'top': 'auto'
	            });

	        } else {

	            $('#sidebar').css({
	                'position': 'fixed',
	                'top': '0',
	                'height': height
	            });
	        }
	    });
	});
</script>

<div class="footer-wrapper">


<?php get_footer(); ?>
