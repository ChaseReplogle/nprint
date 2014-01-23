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

	<div class="columns medium-5">

		<div class="columns medium-6">
			<h3>Payment and Orders</h3>
			<ul>
					<li><a href="#">How can I pay for my purchase?</a></li>
					<li><a href="#">What is the typical turn around?</a></li>
					<li><a href="#">Can I order in person?</a></li>
					<li><a href="#">Can you come on site?</a></li>
				</ul>
		</div>

	</div>

	<div class="columns medium-7">	
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