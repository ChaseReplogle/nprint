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
		<h1>How can we help?</h1>
		<hr>
	</div>


	<div class="row">

		<div class="columns medium-4">
			<h3>Products</h3>	
				<ul>
					<li><a href="#">Banners</a></li>
					<li><a href="#">Wraps</a></li>
					<li><a href="#">Vehicles</a></li>
					<li><a href="#">Exhibits</a></li>
					<li><a href="#">Decals</a></li>
				</ul>
		</div>

		<div class="columns medium-4">
			<h3>Art</h3>
			<ul>
					<li><a href="#">What is the best file format?</a></li>
					<li><a href="#">How do I upload files?</a></li>
					<li><a href="#">How should my files be set up?</a></li>
					<li><a href="#">What is bleed?</a></li>
					<li><a href="#">What is the best resolution for large banners?</a></li>
				</ul>
		</div>

		<div class="columns medium-4">
			<h3>Payment and Orders</h3>
			<ul>
					<li><a href="#">How can I pay for my purchase?</a></li>
					<li><a href="#">What is the typical turn around?</a></li>
					<li><a href="#">Can I order in person?</a></li>
					<li><a href="#">Can you come on site?</a></li>
				</ul>
		</div>

	</div>

	<hr>

	<div class="team">
		<div class="row">
			<div class="columns large-11 large-centered">
				<h3>We've built a team to help execute and supper your ideas.</h3>
			</div>
			<div class="columns large-7 large-centered">
				<p>Online, on the phone, or in person, our team of experts can help move your project from idea to finished perfection.</p>
			</div>
			<div class="columns large-11 large-centered">
				<img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/team.png" alt="nPrint Team"/>
			</div>
		</div>
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



<?php get_footer(); ?>
