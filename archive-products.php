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
			<?php

			$pagename = get_the_title();
			$args = array(
		   'post_type' => 'products',
		   'posts_per_page' => -1,
		   'post_status' => 'publish',
		   'orderby' => 'menu_order',
		   'order' => 'ASC'
		);

		$nav_query = new WP_Query($args);

	if ( $nav_query->have_posts() ) : ?>

		<?php while ( $nav_query->have_posts() ) : $nav_query->the_post(); ?>

			<?php $queryName = get_the_title(); ?>

			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><i class="fa fa-angle-right"></i></a></li>

		<?php wp_reset_postdata(); ?>

	<?php endwhile; endif; ?>
		</ul>
	</div>

	<div class="columns medium-9 page-main-content">
	  	<div class="flex-video">
		  <iframe src="//player.vimeo.com/video/25509119?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>

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
