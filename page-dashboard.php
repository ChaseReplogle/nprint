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


<div class="row content-row">

	<div class="columns medium-8 page-sidebar save-quotes">
		<h2>Welcome Chase.</h2>

		<hr>

		<h5>Your Company Inforation</h5>
		<img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/logo.png" alt="nPrint Graphix" width="386" height="190" />
		<h4>Chase's Print Shop</h4>
		<p>2023 S Saratoga Ave</br>
		Springfirld, MO 65804</p>

		<p>(573)680-7902</p>
		<p>ChaseReplogle@gmail.com</p>
	</div>

	<div class="columns medium-8 page-sidebar save-quotes">
		<h2>My Saved Quotes</h2>

		<hr>

		<ul>

		<?php $user_ID = get_current_user_id(); ?> 

		<?php $args = array(
			'author' 	 => $user_ID,
			'post_type'  => 'quotes',
			'orderby' 	 => 'date',
			'order'      => 'DESC'
		);

		query_posts( $args ); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <?php $postid = get_the_ID(); ?> 
			 <?php $calcType = get_field("product"); ?>

			<li>
				<a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>" class="quote-title"><?php the_title(); ?></a>
				<span class="quote-actions">
					<a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>" class="quote-edit">Edit</a> |
					<a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>&style=print" class="quote-print">Print</a> |
					<a href="#" data-dropdown="delete" class="quote-delete">Delete</a>
						<div id="delete" class="f-dropdown" data-dropdown-content>
							<p>You are about to delete this quote. You won't be able to undo this action.</p>
							<?php if ($post->post_author == $current_user->ID) { ?><p><a href="<?php echo get_delete_post_link( $post->ID ) ?>" class="delete" >Confirm Delete</a></p><?php } ?>
						</div>
					<a href="#" class="quote-cart secondary_button">Add to Cart</a>
				</span>
			</li>

			


		<?php endwhile; endif; ?>

		</ul>	

		<hr>

		<a href="#" class="view-all">View All</a>	
	</div>


	<div class="columns medium-4 page-main-content">
		<a href="/calculators">
			<div class="calculator-button">
				<i class="fa fa-table"></i>
				<h3>Start a Quote</h3>
				<p>Use our online project calculator to create and save quotes.</p>
				<a href="/calculators" class="secondary_button">Let's Get Started</a>
			</div>
		</a>
	</div>


</div>

<hr>

<div class="footer-wrapper">


<?php get_footer(); ?>
