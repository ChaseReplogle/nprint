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
	jQuery(".cost").prependTo("#cost-total");

	jQuery(function() {
		var fixadent = jQuery("#cost-total"), pos = fixadent.offset();
		jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() > (pos.top + 10) && fixadent.css('position') == 'static') { fixadent.addClass('fixed'); }
		else if(jQuery(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')){ fixadent.removeClass('fixed'); }
		})
	});
</script>

<div class="footer-wrapper">


<?php get_footer(); ?>
