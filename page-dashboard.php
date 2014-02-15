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
<div class="contain-to-grid page-nav-warpper dash-nav-wrapper">
	<nav class="top-bar page-nav" data-topbar>
			<li class="columns dash-nav current"><a href="/dashboard">Dashboard</a></li>
			<li class="columns dash-nav option"><a href="/dashboard/calculators"><span>1.</span> Calculators</a></li>
			<li class="columns dash-nav"><a href="#"><span>2.</span> Reivew</a></li>
			<li class="columns dash-nav option"><a href="/cart"><span>3.</span> Cart</a></li>
			<li class="columns dash-nav option"><a href="/checkout"><span>4.</span> Checkout</a></li>
	</nav>
</div>	


<div class="row content-row">
	<div class="columns medium-3 page-main-content">
		<a href="/calculators">
			<div class="calculator-button">
				<i class="fa fa-table"></i>
				<h3>Start a Quote</h3>
				<p>Use our online project calculator to create and save quotes.</p>
				<a href="/calculators" class="secondary_button">Let's Get Started</a>
			</div>
		</a>
	</div>

	<div class="columns medium-7 page-sidebar save-quotes">

	<div class="quotes">
		<div class="columns medium-12 saved-quotes">

			<h2>Recent Quotes</h2>

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
					<div class="columns medium-4">
						<a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>" class="quote-title"><?php the_title(); ?></a>
					</div>

					<div class="columns medium-2">
						<p><?php the_field('client-name'); ?></p>
					</div>

					<div class="columns medium-6 actions">
						<span class="quote-actions">
							<a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>" class="quote-edit">Edit</a> |
							<a href="<?php echo site_url(); ?>/calculators/<?php echo $calcType; ?>/?gform_post_id=<?php echo $postid; ?>&style=print" class="quote-print">Print</a> |
							<a href="#" data-dropdown="delete" class="quote-delete">Delete</a>
								<div id="delete" class="f-dropdown" data-dropdown-content>
									<p>You are about to delete this quote. You won't be able to undo this action.</p>
									<?php if ($post->post_author == $current_user->ID) { ?><p><a href="<?php echo get_delete_post_link( $post->ID ) ?>" class="delete" >Confirm Delete</a></p><?php } ?>
								</div>
						</span>
					</div>
				</li>

				


			<?php endwhile; endif; ?>

			</ul>	

			<hr>

			<a href="#" class="view-all">View All Quotes</a>	
		</div>
	</div>
</div>


	<div class="columns medium-2 company-info">
			<div class="company-logo">
				<img src="http://nprintgraphix.wpengine.com/wp-content/uploads/2014/02/Screen-Shot-2014-02-07-at-10.43.46-AM.png" alt="nPrint Graphix" width="386" height="190" />
			</div>

			<div class="columns medium-12 company-contact">

				<h4>Beyond Creative</h4>
				<p>Adam Deviza</p>
				<p>2023 S Saratoga Ave</br>
				Springfirld, MO 65804</p>

				<p>(573) 680-7902</p>
				<p>adam@breakbeyond.com</p>

				<a href="#" class="small-link">Edit</a>
			</div>
			<div class="clear"></div>
		</div>


</div>

<hr>

<div class="footer-wrapper">


<?php get_footer(); ?>
