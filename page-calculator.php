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

		<script>
			jQuery( ".cost" ).after( "<div id='cost'>" );
			jQuery( ".gform_body" ).appeand( "</div>" );
			jQuery("#cost").prependTo("#cost-total");
		</script>

		</div>

	</div>

	<hr>

</div>

<?php endwhile; endif; ?>

<div class="footer-wrapper">


<?php get_footer(); ?>
