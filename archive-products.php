<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<?php include 'nav-account.php'; ?>
<?php include 'nav-main.php'; ?>
<?php include 'nav-page.php'; ?>

<div class="row content-row">
	<div class="columns medium-12 page-title">
		<h1>Products to Help Make Your Ideas a Reality</h1>
		<hr>
	</div>

	<div class="columns medium-3 product-column">
		<ul>
			<li><a href="#">Banners</a></li>
			<li><a href="#">Wraps</a></li>
			<li><a href="#">Die Cust</a></li>
			<li><a href="#">Exhibits</a></li>
			<li><a href="#">Vehicles</a></li>
			<li><a href="#">Buildings</a></li>
		</ul>
		<ul>
			<li><a href="#">Graphic Design</a></li>
			<li><a href="#">Proofing</a></li>
			<li><a href="#">Consultation</a></li>
			<li><a href="#">Instillation</a></li>
		</ul>
	</div>

	<div class="columns medium-9 page-main-content">
	test
	</div>
</div>


<div class="case-study">
	<div class="row">
		<div class="columns medium-9 medium-centered">
			<h5>Case Study</h5>
			<h2>Sherman Williams Banners</h2>
			<p>Lorem ipsum dolor sit amet ipsum malesuada.</p>
			<a href="#" class="image-hover"><img src="http://nprintgraphix.wpengine.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-16-at-4.26.50-PM.png" /></a>
		</div>
	</div>
</div>

<div class="footer-wrapper">
	<div class="g7">
		<div class="row">
			<div class="large-centered large-11 columns">
				<div class="columns medium-5 ">
					<img class="right" src="<?php echo get_template_directory_uri(); ?>/_/inc/images/g7.jpg" alt="G7"/>
				</div>
				
				<div class="columns medium-7">
					<h3>G7 Certified Printer</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. </p>
					<a href="#">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
