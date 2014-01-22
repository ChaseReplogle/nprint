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

				<div class="columns medium-12 project-content">

					<h2>PBR Arena Wraps</h2>
					<p>Client: Professional Bull Ride World Tour</p>
					<p>nPrint was happy to partner with the PBR World Tour to provide wraps for the area and building signage. Its proof, some big sheets of vinyl and big time installation can transform a college baseketball court into a world cass bull riding, rodeo, arena.</p>
					<hr>

					<img src="
						<?php $image = get_field('project_featured_image');
						echo $image['sizes']['large']; ?>
					" alt="<?php the_title(); ?>" class="featured-image"/>

					<ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-6" data-clearing>

					<?php while(has_sub_field("project_images")): ?>
 
						<?php if(get_row_layout() == "project_image"): // layout: Content ?>
 
							<li>
								<?php $subImage = get_sub_field("image"); ?>
								<a href="<?php echo $subImage['sizes']['large']; ?>"><img src="<?php echo $subImage['sizes']['thumbnail']; ?>"></a>
								
							</li>
						<?php endif; ?>

					<?php endwhile; ?>

					</ul>

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
