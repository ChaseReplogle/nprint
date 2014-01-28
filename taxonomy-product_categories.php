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

	<div class="medium-3 columns product-column">
		<ul>
		<?php
			$taxonomyName = "product_categories";
			$terms = get_terms($taxonomyName,array('parent' => 0));

			foreach($terms as $term) {
			    echo '<li class="'$term->slug;'"><a href="'.get_term_link($term->slug,$taxonomyName).'">'.$term->name.'<i class="fa fa-angle-right"></i></a></li>';
			}
		?>
		</ul>
	</div>

	<div class="medium-9 columns page-main-content">

	<?php if ( have_posts() ) :

	while ( have_posts() ) : the_post(); ?>
	  	
		<div class="row product-item">

				<div class="columns medium-12 project-content">

					<h2><?php the_title(); ?></h2>
					<p class="client">Client: <?php the_field('client'); ?></p>
					<p><?php the_content(); ?></p>
							<td width="25%">Project Specs</td>
							<td>Large vinyl Banners 24 oz., Outdoor Mesh Banners, Window Decals</td>
						</tr>
					</table>

					<hr>

					<img src="
						<?php $image = get_field('project_featured_image');
						echo $image['sizes']['large']; ?>
					" alt="<?php the_title(); ?>" class="featured-image"/>

					<ul class="block-grid medium-block-grid-4 large-block-grid-6" data-clearing>

					<?php while(has_sub_field("project_images")): ?>
 
						<?php if(get_row_layout() == "project_image"): // layout: Content ?>
 
							<li>
								<?php $subImage = get_sub_field("image"); ?>
								<a href="<?php echo $subImage['sizes']['large']; ?>"><img src="<?php echo $subImage['sizes']['thumbnail']; ?>"></a>
								
							</li>
						<?php endif; ?>

					<?php endwhile; ?>

					</ul>

					<hr>

					<table width="100%">
						<tr>
							<td width="25%"><a href="#">Larger Banners</a></td>
							<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur congue bibendum...</td>
						</tr>
						<tr>
							<td width="25%"><a href="#">Window Wraps</a></td>
							<td>Sit amet, consectetur adipiscing elit. Curabitur lorem isum dolor congue bibendum...</td>
						</tr>
					</table>



				</div>

		</div>

		<hr>

	<?php endwhile; endif; ?>
		

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
