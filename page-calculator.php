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
		<div id="cost-total">


		</div>

	</div>

	<hr>

</div>

<?php endwhile; endif; ?>

<script>
	$ = jQuery;

	jQuery(".cost").prependTo("#cost-total");

	var top = $("#cost-total").offset().top - parseFloat($("#cost-total").css("marginTop").replace(/auto/, 0));
 
	$(window).scroll(function (event) {
	     var y = $(this).scrollTop();
		  
	     if (y >= (top-20)) {
	          $("#cost-total").addClass("fixed");
	     } else {
	          $("#cost-total").removeClass("fixed");
	     }
	});
</script>

<div class="footer-wrapper">


<?php get_footer(); ?>
