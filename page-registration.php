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
			<li><a href="#"><?php the_title();?></a></li>
		</ul>
	</nav>
</div>	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row content-row">

	<div class="columns medium-8 page-main-content">
		
		<?php the_content(); ?>

	</div>

	<div class="columns medium-4 page-sidebar">

		
	</div>
</div>

<?php endwhile; endif; ?>

<hr>


<div class="footer-wrapper">


<?php get_footer(); ?>
