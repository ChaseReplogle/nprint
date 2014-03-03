<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 get_header(); ?>

<?php include 'nav-account.php'; ?>
<?php include 'nav-main.php'; ?>

<div class="row content-row">
	
	<div class="columns medium-12">
		<h2>Sorry, this page doesn't exist</h2>
		<p>It looks like the page you were looking for dosn't exist. The best thing to do is to start again from the <a href="/">homepage.</a> Feel free to contact us if the problem persists or if you definetly can't find what you're looking for.</p>
		<p><a class="support_button" href="/support/">Find Support Articles</a></p>
		<p><a class="support_button" href="/contact/">Contact Us</a></p>
	</div>

</div>

<div class="row">
	<hr>
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
