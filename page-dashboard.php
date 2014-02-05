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
		<a href="/calculators">
			<div class="calculator-button">
				<i class="fa fa-table"></i>
				<h3>Calculate a Quote</h3>
				<p>Use our online project calculator to create and save quotes.</p>
				<a href="/calculators" class="secondary_button">Let's Get Started</a>
			</div>
		</a>
	</div>


	<div class="columns medium-8 page-sidebar save-quotes">
		<h2>Saved Quotes</h2>

		<hr>

		<ul>

		<?php $user_ID = get_current_user_id(); ?>

		<?php $args = array(
			'author'     => $user_ID,
			'post_type'  => 'quotes',
			'orderby' 	 => 'date',
			'order'      => 'ASC'
		);
		query_posts( $args ); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<li>
				<a href="#" class="quote-title"><?php the_title(); ?></a>
				<span class="quote-actions">
					<a href="#" class="quote-edit">Edit</a> |
					<a href="#" class="quote-print">Print</a> |
					<a href="#" class="quote-delete">Delete</a>
					<a href="#" class="quote-cart secondary_button">Add to Cart</a>
				</span>
			</li>

		<?php endwhile; endif; ?>

		</ul>	

		<hr>

		<a href="#" class="view-all">View All</a>	
	</div>

</div>

<hr>

<?php endwhile; endif; ?>

<div class="footer-wrapper">


<?php get_footer(); ?>
