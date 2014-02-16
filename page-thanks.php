<?php
/*
Template Name: Thank You
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

<div class="contain-to-grid page-nav-warpper dash-nav-wrapper">
	<nav class="top-bar page-nav finished" data-topbar>
			<li class="columns dash-nav past option"><a href="/dashboard">Dashboard</a></li>
			<li class="columns dash-nav past option"><a href="/dashboard/calculators"><span><i class="fa fa-check-square-o"></i></span> Calculators</a></li>
			<li class="columns dash-nav past option"><a href="#"><span><i class="fa fa-check-square-o"></i></span> Reivew</a></li>
			<li class="columns dash-nav past option"><a href="/cart"><span><i class="fa fa-check-square-o"></i></span> Cart</a></li>
			<li class="columns dash-nav past option"><a href="/checkout"><span><i class="fa fa-check-square-o"></i></span> Checkout</a></li>
	</nav>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-12 page-main-content">
		
	<?php the_content(); ?>

	</div>

	<hr>

</div>

<?php endwhile; endif; ?>

<div class="footer-wrapper">


<?php get_footer(); ?>
