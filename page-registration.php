<?php
/*
Template Name: Registration
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
<div class="contain-to-grid page-nav-warpper">
	<nav class="top-bar page-nav" data-topbar>
		<ul class="title-area">
			<li><a href="#">Become a Member</a></li>
		</ul>
	</nav>
</div>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-8 page-main-content">
		
		<?php the_content(); ?>

	</div>

	<div class="columns medium-4 page-sidebar">

		<h3>Benefits of a Membership</h3>
		<ul>
			<li>Explanation of Quotes</li>
			<li>Explanation of Free Shipping</li>
			<li>Explanation of Calculators</li>
		</ul>
	</div>
</div>

<?php endwhile; endif; ?>



<div class="footer-wrapper">

<hr>

<?php get_footer(); ?>
