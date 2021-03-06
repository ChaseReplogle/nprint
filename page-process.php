<?php
/*
Template Name: Process
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
<?php include 'nav-page.php'; ?>

<div class="row content-row">
	<div class="columns medium-12 page-title">
		<h1><?php the_field('full_title'); ?></h1>
		<hr>
	</div>

	<div class="columns medium-8 page-main-content">
		
		<?php the_content(); ?>

	</div>

	<div class="columns medium-4 page-sidebar">

		<div class="ad banner" style="background-image: url('http://nprintgraphix.wpengine.com/wp-content/uploads/2014/01/Screen-Shot-2014-01-16-at-6.28.47-PM.png');">
			<img src="http://nprintgraphix.wpengine.com/wp-content/uploads/2014/01/printer.png" />
			<h3>Title for an Ad Section</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada.</p>
			<a href="#" class="secondary_button">Link to Page</a>
		</div>

		<div class="ad">
			<h3>Title for an Ad Section</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Etiam porta velit non tincidunt tempor.</p>
			<a href="#" class="primary_button">Link to Page</a>
		</div>

		<div class="contact">
			<div class="side-logo"><img class="left" src="http://nprintgraphix.wpengine.com/wp-content/themes/nprint/_/inc/images/footer-logo.png" alt="Logo" style="width: 100%;"></div>
			<p><strong>Local: </strong>(417) 882-SIGN (7446)
				<br><strong>Toll Free: </strong>1-888-518-7344
				<br><strong>Fax: </strong>(417) 877-7523</p>
			<p><strong>nPrint Graphix</strong>
				<br>1943 West Sunset
				<br>Springfield, Missouri 65807</p>
			<p><strong>Business Hours</strong>
				<br>Monday - Friday: 8:00 am - 5:00 pm</p>
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
