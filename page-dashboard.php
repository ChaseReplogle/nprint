<?php
/*
Template Name: Dashboard
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
<?php include 'nav-dashboard.php'; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-5 page-main-content">
		

	</div>

	<div class="columns medium-7 page-sidebar">

		
	</div>
</div>

<?php endwhile; endif; ?>

<div class="footer-wrapper">


<?php get_footer(); ?>
