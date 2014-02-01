<?php
/*
Template Name: Dashboard
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

	<div class="columns medium-5 page-main-content">
		<div class="calculator-button">
			<i class="fa fa-table"></i>
			<h3>Calculate a Quote</h3>
			<p>Use our online project calculator to create and save quotes.</p>
			<a href="#" class="secondary-button">Let's Get Started</a>
		</div>

	</div>

	<div class="columns medium-7 page-sidebar">

		
	</div>
</div>

<?php endwhile; endif; ?>

<div class="footer-wrapper">


<?php get_footer(); ?>
