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
		<h1>Search Results</h1>
		<hr>
	</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="columns medium-12 page-main-content">
		
		<div class="search-item">
			<h2><?php the_title(); ?> <a class="support_button"><?php echo get_post_type( get_the_ID() ); ?></a></h2>
			<h3><?php the_field('full_title'); ?></h3>
			<p><?php the_permalink(); ?></p>
			<p><?php the_excerpt(); ?></p>
		</div>

	</div>

</div>

<?php endwhile; endif; ?>

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
