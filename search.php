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
	<li><a>Search</a></li>

</ul>

<section class="top-bar-section right">
    <!-- Right Nav Section -->
    <ul>
    </ul>
</section>
</nav>
</div>	



<div class="row content-row">
	<div class="columns medium-12 page-title">
		<h1>Search Results For: <?php printf( __( '%s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<hr>
	</div>

<?php if ( have_posts() ) : ?>                
 
<?php while ( have_posts() ) : the_post() ?>

	<div class="columns medium-12 page-main-content">
		
		<div class="search-item">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<h3><a href="<?php the_permalink(); ?>"><?php the_field('full_title'); ?></a></h3>
			<p><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>
			<p><?php the_excerpt(); ?></p>
			<a class="support_button"><?php echo get_post_type( get_the_ID() ); ?></a>
		</div>

		<hr>

	</div>

<?php endwhile; ?>
<?php endif; ?>

</div>
</div>

<div class="footer-wrapper">


<?php get_footer(); ?>
