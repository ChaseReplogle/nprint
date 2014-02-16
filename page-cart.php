<?php
/*
Template Name: Cart
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

<div class="contain-to-grid page-nav-warpper dash-nav-wrapper">
	<nav class="top-bar page-nav" data-topbar>
			<li class="columns dash-nav past option"><a href="/dashboard">Dashboard</a></li>
			<li class="columns dash-nav past option"><a href="/dashboard/calculators"><span><i class="fa fa-check-square-o"></i></span> Calculators</a></li>
			<li class="columns dash-nav past option"><a href="#"><span><i class="fa fa-check-square-o"></i></span> Reivew</a></li>
			<li class="columns dash-nav current"><a href="/cart"><span><i class="fa fa-minus-square-o"></i></span> Cart</a></li>
			<li class="columns dash-nav disabled"><a href="/checkout"><span><i class="fa fa-square-o"></i></span> Checkout</a></li>
	</nav>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">
	<div class="columns medium-12 page-title">
		<h1><?php the_field('full_title'); ?></h1>
		<hr>
	</div>

	<div class="columns medium-8 page-main-content">
		
		<?php the_content(); ?>

	</div>

	<div class="columns medium-4 page-sidebar">

		<?php 
 
		$posts = get_field('related_marketing');
		 
		if( $posts ): ?>
		    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		        <?php setup_postdata($post); ?>
		        <div class="ad banner" style="background-image: url('<?php $backgroundimage = get_field('marketing_background_image');
							echo $backgroundimage['sizes']['large']; ?>');">
					<img src="
							<?php $image = get_field('marketing_featured_image');
							echo $image['sizes']['large']; ?>
						" alt="<?php the_title(); ?>"/>
					<h3><?php the_title(); ?></h3>
					<p><?php the_field('marketing_content'); ?></p>
					<a href="<?php the_field('marketing_link_location'); ?>" class="secondary_button"><?php the_field('marketing_link_text'); ?></a>
				</div>
		    <?php endforeach; ?>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>


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
