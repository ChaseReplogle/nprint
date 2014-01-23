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
	<div class="columns medium-10 page-title">
		<h1>How can we help?</h1>
	</div>

	<div class="columns medium-2">
		<a href="/contact" class="contact secondary_button">Contact Support</a>
	</div>

	<hr>

</div>

	<div class="columns medium-4">
			<h3>Shipping</h3>	
				<ul>
					<li class="current-page-item"><a href="http://nprintgraphix.wpengine.com/support/how-are-my-items-shipped/">What times of shipping do you offer?</a></li>
					<li><a href="#">Do you provide installation services?</a></li>
					<li><a href="#">Can I rush shipping?</a></li>
					<li><a href="#">Do you ship internationally?</a></li>
				</ul>
	</div>

	<div class="columns medium-8">	
		<div class="support-answer">
			<h2><?php the_title(); ?></h2>
			<p>Customer Service Office</p>
			<p><?php the_content(); ?></p>
		</div>
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
