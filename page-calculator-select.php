<?php
/*
Template Name: Calculators
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
	<nav class="top-bar page-nav" data-topbar>
			<li class="columns dash-nav past option"><a href="/dashboard">Dashboard</a></li>
			<li class="columns dash-nav current"><a href="/dashboard/calculators"><span><i class="fa fa-minus-square-o"></i></span> Calculators</a></li>
			<li class="columns dash-nav disabled"><a href="#"><span><i class="fa fa-square-o"></i></span> Reivew</a></li>
			<li class="columns dash-nav disabled"><a href="/cart"><span><i class="fa fa-square-o"></i></span> Cart</a></li>
			<li class="columns dash-nav disabled"><a href="/checkout"><span><i class="fa fa-square-o"></i></span> Checkout</a></li>
	</nav>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-12 page-main-content">
	
	<div class="medium-block-grid-3">

		<div class="columns medium-3">
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Vinyl Calculator</a>
			</div>
		</div>

		<div class="columns medium-3">
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-building-o fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Billboard Wraps</a>
			</div>
		</div>

		<div class="columns medium-3">
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Adhesive Decals</a>
			</div>
		</div>

		<div class="columns medium-3">
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-truck fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Vehical Wrap</a>
			</div>
		</div>

		<div class="columns medium-3">
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-sun-o fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Backlit and Awning</a>
			</div>
		</div>

		<div class="columns medium-3">
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-rocket fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Specialty Design</a>
			</div>
		</div>

		<div class="columns medium-3">
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-ticket fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Trade Show Displays</a>
			</div>
		</div>

	</div>

	</div>

	<hr>

</div>

<?php endwhile; endif; ?>

<div class="footer-wrapper">


<?php get_footer(); ?>
