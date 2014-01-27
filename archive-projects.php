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
		<h1>Projects we're proud to have been a part of.</h1>
		<hr>
	</div>

	<div class="medium-3 columns product-column">
		<?php
$taxonomyName = "project_categories";
$terms = get_terms($taxonomyName,array('parent' => 0));
foreach($terms as $term) {
	echo '<ul>';
    echo '<li><a href="'.get_term_link($term->slug,$taxonomyName).'">'.$term->name.'<i class="fa fa-angle-right"></i></a></li>';
    echo '</ul>';
}
?>

		<div class="panel">
			<i class="fa fa-search-plus"></i> 
			<h4>View More Projects by Selection a Category Above</h4>
		</div>
	</div>

	<div class="medium-9 columns page-main-content">
	  	
		<div class="row product-item">

				<div class="columns medium-12 project-content">
					<div class="row">
						<a href="<?php the_permalink(); ?>"><div class="panel">
							<h2>PBR Arena Wraps</h2>
							<p class="client">Client: Professional Bull Ride World Tour</p>
							<img src="
								<?php $image = get_field('project_featured_image');
								echo $image['sizes']['large']; ?>
							" alt="<?php the_title(); ?>" class="featured-image"/>
						</div></a>

						<div class="panel">
							<h2>PBR Arena Wraps</h2>
							<p class="client">Client: Professional Bull Ride World Tour</p>
							<img src="
								<?php $image = get_field('project_featured_image');
								echo $image['sizes']['large']; ?>
							" alt="<?php the_title(); ?>" class="featured-image"/>
						</div>

						<div class="panel">
							<h2>PBR Arena Wraps</h2>
							<p class="client">Client: Professional Bull Ride World Tour</p>
							<img src="
								<?php $image = get_field('project_featured_image');
								echo $image['sizes']['large']; ?>
							" alt="<?php the_title(); ?>" class="featured-image"/>
						</div>

						<div class="panel">
							<h2>PBR Arena Wraps</h2>
							<p class="client">Client: Professional Bull Ride World Tour</p>
							<img src="
								<?php $image = get_field('project_featured_image');
								echo $image['sizes']['large']; ?>
							" alt="<?php the_title(); ?>" class="featured-image"/>
						</div>
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
