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

	<div class="columns medium-12">
		 <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div class="search-form">
				<input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search"/>
				<button type="submit" id="searchsubmit" class="btn btn-success">
                	<i class="fa fa-search"></i>
            	</button>
			</div>
		</form>
	</div>
</div>

	<div class="row content-row support-row">
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
			<h3>Artwork</h3>
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
					<li><a href="#">Do you have a return?</a></li>
				</ul>
		</div>

	</div>
	<div class="row content-row support-row">
		<div class="columns medium-4">
			<h3>Shipping</h3>	
				<ul>
					<li><a href="#">What times of shipping do you offer?</a></li>
					<li><a href="#">Do you provide installation services?</a></li>
					<li><a href="#">Can I rush shipping?</a></li>
					<li><a href="#">Do you ship internationally?</a></li>
				</ul>
		</div>

		<div class="columns medium-4">
			<h3>Finishes</h3>
			<ul>
					<li><a href="#">How can I determine the number of grommets I'll need?</a></li>
					<li><a href="#">What are pole-pockets used for?</a></li>
					<li><a href="#">Whats the best way to attatch a banner to a building?</a></li>
					<li><a href="#">Can I print a double sided banner?</a></li>
					<li><a href="#">While my banner fade in the sunlight?</a></li>
					<li><a href="#">What is the best type of velcro to use with vinyl banners?</a></li>
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
				<p>Online, on the phone, or in person, our team of experts can help move your project from idea to finished perfection. <a href="/contact">How can we help?</a></p>
			</div>
			<div class="columns large-11 large-centered">
				<img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/team.png" alt="nPrint Team"/>
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
