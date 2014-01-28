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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">
	<div class="columns medium-12 page-title">
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
		<hr>
	</div>

	<div class="columns medium-3 product-column">
		<ul>
			<li class="current-page-item"><a href="#">Banners<i class="fa fa-angle-right"></i></a></li>
			<li><a href="#">Wraps<i class="fa fa-angle-right"></i></a></li>
			<li><a href="#">Die Cust<i class="fa fa-angle-right"></i></a></li>
			<li><a href="#">Exhibits<i class="fa fa-angle-right"></i></a></li>
			<li><a href="#">Vehicles<i class="fa fa-angle-right"></i></a></li>
			<li><a href="#">Buildings<i class="fa fa-angle-right"></i></a></li>
		</ul>
		<ul>
			<li><a href="#">Graphic Design<i class="fa fa-angle-right"></i></a></li>
			<li><a href="#">Proofing<i class="fa fa-angle-right"></i></a></li>
			<li><a href="#">Consultation<i class="fa fa-angle-right"></i></a></li>
			<li><a href="#">Instillation<i class="fa fa-angle-right"></i></a></li>
		</ul>
	</div>

	<div class="columns medium-9 page-main-content">
	  	
		<div class="row product-item">

			<?php while(has_sub_field("related_products")): ?>
			 
				<?php if(get_row_layout() == "sub_product"): ?>

					<div class="columns medium-5 product-phot ">
						<img src="
						<?php $image = the_sub_field('related_product_image');
						echo $image['sizes']['large']; ?>
						" alt="<?php the_sub_field("related_product_title"); ?>" class="featured-image"/>
					</div>

					<div class="columns medium-7">

						<h3><?php the_sub_field("related_product_title"); ?></h3>

						<p><?php the_sub_field("related_product_description"); ?></p>

					</div>

					<hr>

				<?php endif; ?>

			<?php endwhile; ?>


<?php endwhile;  endif; ?>


		<div class="panel">
			<div class="row">

				<div class="columns medium-12">
					<h4>Looking for Pricing?</h4>
				</div>
				<div class="columns medium-8">
			  		<p>By signing up as an nPrint Member you'll have access to product prices as well as project calculators. You'll be able to place orders online and save quotes. You'll also have access to specials and membership discounts. Signing up for a membership is completely free.</p>
				</div>
				<div class="columns medium-4">
					<a href="" class="primary_button">Become a Member</a>
					<p><a href="#">Learn more about becomeing a member.</a></p>
				</div>
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
