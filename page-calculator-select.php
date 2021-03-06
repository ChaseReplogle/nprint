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
	
	<ul class="medium-block-grid-4">

		<li>
			<div class=" calc-item">
				<a href="/dashboard/calculators/vinyl-banner/">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banner/">Vinyl Calculator</a>
			</div>
		</li>

		<li>
			<div class=" calc-item">
				<a href="/dashboard/calculators/billboard-wrap/">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-building-o fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/billboard-wrap/">Billboard Wraps</a>
			</div>
		</li>

		<li>
			<div class=" calc-item">
				<a href="/dashboard/calculators/adhesive-decal/">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-pencil-square-o fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/adhesive-decal/">Adhesive Decals</a>
			</div>
		</li>

		<li>
			<div class=" calc-item">
				<a href="/dashboard/calculators/backlit-and-awning/">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-sun-o fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/backlit-and-awning/">Backlit and Awning</a>
			</div>
		</li>

		<li>
			<div class=" calc-item">
				<a href="/dashboard/calculators/vehicle-wrap/">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-truck fa-stack-1x fa-inverse"></i>
					</span>
				</a>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vehicle-wrap/">Vehical Wrap</a>
			</div>
		</li>

		<li>
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-rocket fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Specialty Design</a>
			</div>
		</li>

		<li>
			<div class=" calc-item">
				<span>
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-ticket fa-stack-1x fa-inverse"></i>
				</span>
				<div class="clear"></div>
				<a class="secondary_button" href="/dashboard/calculators/vinyl-banners/">Trade Show Displays</a>
			</div>
		</li>

	</ul>

	</div>

	<hr>

</div>

<?php endwhile; endif; ?>

<div class="footer-wrapper">


<?php get_footer(); ?>
