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

	<div class="columns medium-4 page-main-content">
		<a href="#">
			<div class="calculator-button">
				<i class="fa fa-table"></i>
				<h3>Calculate a Quote</h3>
				<p>Use our online project calculator to create and save quotes.</p>
				<a href="#" class="secondary_button">Let's Get Started</a>
			</div>
		</a>
	</div>


	<div class="columns medium-8 page-sidebar save-quotes">
		<h2>Saved Quotes</h2>

		<hr>

		<ul>

			<li>
				<a href="#" class="quote-title">Exhibit Backdrops</a>
				<span class="quote-actions">
					<a href="#" class="quote-edit">Edit</a>
					<a href="#" class="quote-print">Print</a>
					<a href="#" class="quote-delete">Delete</a>
					<a href="#" class="quote-cart secondary_button">Add to Cart</a>
				</span>
			</li>

			<li>
				<a href="#" class="quote-title">Lightpole Signs</a>
				<span class="quote-actions">
					<a href="#" class="quote-edit">Edit</a>
					<a href="#" class="quote-print">Print</a>
					<a href="#" class="quote-delete">Delete</a>
					<a href="#" class="quote-cart secondary_button">Add to Cart</a>
				</span>
			</li>

		</ul>		
	</div>

</div>

<?php endwhile; endif; ?>

<div class="footer-wrapper">


<?php get_footer(); ?>
