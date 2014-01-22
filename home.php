<?php
/*
Template Name: Home
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
 
<div class="video_screen"> </div> 
<div class="big_video"></div>

<script>
var $ = jQuery;
$(function() {
    var BV = new $.BigVideo();
    BV.init();
    if (Modernizr.touch) {
    BV.show();
	} else {
    BV.show('<?php echo get_template_directory_uri(); ?>/_/inc/videos/npg_test_clips_1280x720.mp4',{ambient:true});
    }
});
</script>

<?php include 'nav-account.php'; ?>

<div class="main-header">	
	
	<div class="row header-info full">
		<div class="medium-5 columns about-block">
			<img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/logo.png" alt="nPrint Graphix" width="386" height="190" />
			<h2><strong>Toll Free:</strong> <a href="tel:+18885187344"> 888-518-7344 </a> | <a href="#" >Contact</a></h2>
		</div>
  		<div class="medium-7 columns about-block">
  			<h3><strong><?php echo get_bloginfo ( 'description' );  ?></strong></h3>
			<p><?php the_field( "header_text" );  ?> </p>
			<a href="#" class="clear_button">Become a Client</a>
			<a href="#" class="clear_button">Log In</a>
  		</div>
	</div>
</div> 

<?php include 'nav-main.php'; ?>

<div class="wrapper">

<?php $ids = get_field('featured_message', false, false); ?>



<div class="row print boxed" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_/inc/images/print-bg.jpg'); background-size:100% 100%;">
		
	<div class="marketing-navigation columns right medium-5">	
		<ul class="icon-nav medium-block-grid-4" >
				<?php $posts = get_field('select_message'); ?>
				<?php $i == 0; ?>
 			<?php foreach($posts as $post_object): ?>
 				<?php $i++; ?>
 				<?php $icon_name = get_field('marketing_icon_label', $post_object->ID ); ?>
 				<?php $icon = get_field('marketing_icon', $post_object->ID ); ?>

				<li><a href="#" class="
				<?php if ($i == 1 ) { echo 'current-item'; }; ?>
				">
				<?php echo "<i class='fa $icon'></i>"; ?>
				<?php echo $icon_name; ?><span style="display: none;"><?php echo $post_object->ID  ?></span>
				</a></li>

			<?php endforeach; ?>
		</ul>
	</div>

				<?php $i = 0; ?>
					<?php foreach($posts as $post_object): ?>
						<?php $i++; ?>
					<?php if($i==2) break; ?>

	<div class="marketing-ajax">
		<div class="medium-5 medium-push-7 columns row-content">

				<div class="marketing-content">
					<h4><?php echo $post_object->post_title; ?></h4>
		  			<p><?php echo get_field('marketing_content', $post_object->ID ); ?></p>
					<p><a href="<?php echo get_field('marketing_link_location', $post_object->ID ); ?>" class="secondary_button"><?php echo get_field('marketing_link_text', $post_object->ID ); ?></a></p>
				</div>
  		</div>


		<div class="medium-7 medium-pull-5 columns row-image not-mobile left">
			<img src="
				<?php $image = get_field('marketing_featured_image', $post_object->ID);
				echo $image['sizes']['large']; ?>
			" alt="<?php the_title(); ?>"/>
		</div>
	</div>


		<?php endforeach; ?>

		<script>
			var $ = jQuery;

			$('.marketing-navigation .icon-nav a').click(function() {  
				var id = $(this).find( 'span' ).text();
					$.get("<?php echo get_template_directory_uri(); ?>/ajax/ajax-marketing.php?name=<?php echo $category_name; ?>", {post_id : id }, marketsuccessFn)
			});


			$('.marketing-navigation .icon-nav a').click(
			    function(e) {
			        $(this).closest('ul').find('.current-item').removeClass('current-item');
			        $(this).addClass('current-item');
			});

			$(".marketing-navigation .icon-nav a").removeAttr('href');

			function marketsuccessFn(result) {
				$('.marketing-ajax').fadeOut( 100 , function() {
		    		$(this).html( result);
				}).fadeIn( 1000 );

				console.log("Setting result");
			}

			function marketerrorFn(xhr, status, strErr) {
				alert(strErr);
			}
		</script>

		<?php wp_reset_postdata(); ?>
</div>
</div>


<div class="wrapper">
<div class="row craft full" >
  		<div class="medium-5 columns row-content">
  			<h4><?php the_field( "video_title" );  ?> </h4>
  			<p><?php the_field( "video_text" );  ?> </p>
			<p><a href="<?php the_field( "video_link_location" );  ?> " class="primary_button"><?php the_field( "video_link_text" );  ?> </a></p>
  		</div>
  		
  		<div class="medium-7 columns row-image">
  			<div class="embed-container ">
				<?php the_field( "video_embed" );  ?> 
			</div>
		</div>
</div>
</div>

<div class="wrapper">
<div class="row full">
	
	<div class="row nav-row">
		<div class="columns medium-centered medium-12 portfolio-nav">
			<ul class="icon-nav large-block-grid-9">
  				
  				<?php $post_objects = get_field('portfolio_categories');
					if( $post_objects ): ?>
							<?php $i = 0; ?>
					    	<?php foreach( $post_objects as $post): ?>
					    	<?php  $i++; ?>
					    	<?php if( $i < 9) { ?>
					        <?php setup_postdata($post); ?>
					        <?php $icon_cat = $taxonomy.'_'.$term_taxonomy_id; ?>
					        <?php $icon = get_field('category_icon', 'project_categories_'.$post->term_taxonomy_id); ?>
  								<li><a href="#" class="<?php if ($i == 1 ) { echo 'current-item'; }; ?>"><i class="fa <?php echo $icon; ?>"></i><?php echo $post->name; ?></a></li>
  							<?php } ?>
					    <?php endforeach; ?>
					    	<li class="more-work" ><a href="/more"><i class="fa fa-briefcase"></i>More Work</a></li>

					    <script>
								var $ = jQuery;

								$('.portfolio-nav .icon-nav a').click(function() {  
									var category_name = $(this).text();
									$.get("<?php echo get_template_directory_uri(); ?>/ajax/ajax-portfolio.php?name=<?php echo $category_name; ?>", {category : category_name }, successFn)
								});

								$('.portfolio-nav .icon-nav a').click(
								    function(e) {
								        $(this).closest('ul').find('.current-item').removeClass('current-item');
								        $(this).addClass('current-item');
								});

								$(".portfolio-nav .icon-nav a").removeAttr('href');

								function successFn(result) {
									$(".portfolio-ajax").fadeOut( 100 , function() {
							    		$(this).html( result);
									}).fadeIn( 1000 );

									console.log("Setting result");
								}

								function errorFn(xhr, status, strErr) {
									alert(strErr);
								}
							</script>
					    
					<?php endif;?>
  			</ul>
		</div>
	</div>


		<?php wp_reset_query(); // reset the query ?>
	
	<div class="portfolio-ajax portfolio boxed row">

		<?php $post_objects = get_field('portfolio_categories'); ?>
				<?php $i = 0; ?>
				<?php foreach( $post_objects as $post): ?>
					    <?php  $i++; ?>

					    	<?php if( $i < 2) { ?>
					        <?php setup_postdata($post); ?>

  		<?php query_posts('post_type=projects&posts_per_page=1&project_categories='. $post->slug ); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="medium-8 columns row-image">
						<a href="<?php the_permalink(); ?>" class='image-hover'><img src="
							<?php $image = get_field('project_featured_image');
							echo $image['sizes']['large']; ?>
						" alt="<?php the_title(); ?>"/></a>
					</div>
				
			  		<div class="medium-4 columns row-content">
			  			<h4><?php the_title(); ?></h4>
			  			<p><?php echo excerpt(55); ?></p>
						<p><a href="#" class="secondary_button">View Full Portfolo</a></p>
			  		</div>

			<?php endwhile; ?>

		<?php endif; ?>

  		<?php } ?>

		<?php endforeach; ?>
		<?php wp_reset_query(); // reset the query ?>
  	</div>

</div>
</div>

<div class="wrapper">
<div class="row company full">
  		<div class="medium-6 columns row-content">
  			<h4><?php the_field( "company_title" );  ?> </h4>
  			<p><?php the_field( "company_text" );  ?> </p>	

  			<?php $post_objects = get_field('company_links');
				if( $post_objects ): ?>
				    <?php foreach( $post_objects as $post): ?>
				        <?php setup_postdata($post); ?>
				            <p class="support_link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); ?>
				<?php endif; 
			?>

			<p><a href="<?php the_field( "company_link_location" );  ?> " class="primary_button"><?php the_field( "company_link_text" );  ?> </a></p>
  		</div>
  		
  		<div class="medium-6 columns letter">
			<p>"<?php the_field( "letter_text" );  ?> "</p>
			<img class="avatar left" src="<?php echo get_template_directory_uri(); ?>/_/inc/images/john.jpg" height="50px" width="50px"/>
			<div class="cite-author">
				<p><strong>John Fuiget</strong></p>	
				<p>CEO, nPrint Graphix</p>
			</div>	
		
	</div>
</div>
</div>


<div class="wrapper">
<div class="row support boxed">
  		<div class="medium-7 columns">
			<dl class="accordion" data-accordion>
				 <?php $post_objects = get_field('featured_articles');
					if( $post_objects ): ?>
					    <?php $i = 0; ?>
					    	<?php foreach( $post_objects as $post): ?>
					    	<?php  $i++; ?>
					        <?php setup_postdata($post); ?>
					           <dd>
								    <a href="#panel<?php echo $i; ?>"><i class="fa <?php if($i == 1) { echo "fa-angle-down";} else {echo "fa-angle-right";}  ?>"></i><?php the_title(); ?></a>
								    <div id="panel<?php echo $i; ?>" class="content 
								    	<?php if($i == 1)  echo "active";  ?>">
										<p><?php the_excerpt(); ?></p>
								    </div>
								 </dd>
					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); ?>
					<?php endif; 
				?>
			</dl>			
		</div>

			<script>
				jQuery('.accordion dd > a').click(function() {  
					jQuery(this).find('i').addClass('fa-angle-down') // add this line
					jQuery(this).find('i').removeClass('fa-angle-right') // add this line
					jQuery('.accordion dd > a i').removeClass('fa-angle-down') // add this line
				});
			</script>
		
  		<div class="medium-5 columns row-content">
  			<h4>Support</h4>
  			<p><?php the_field( "support_text" );  ?></p>
  				<?php $post_objects = get_field('featured_categories');
					if( $post_objects ): ?>
					    	<?php foreach( $post_objects as $post): ?>
					        <?php setup_postdata($post); ?>
  								<p class="support_link"><a href="/support_categories<?php echo $post->slug; ?>"><?php echo $post->name; ?></a></p>	
  							<?php $category_name = $cat->name; ?>
					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); ?>
					<?php endif; 
				?>

			<p><a href="/support" class="secondary_button">Support Articles</a></p>
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

	<div class="team">
		<div class="row">
			<div class="columns large-11 large-centered">
				<h3>We've built a team to help execute and supper your ideas.</h3>
			</div>
			<div class="columns large-7 large-centered">
				<p>Online, on the phone, or in person, our team of experts can help move your project from idea to finished perfection.</p>
			</div>
			<div class="columns large-11 large-centered">
				<img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/team.png" alt="nPrint Team"/>
			</div>
		</div>
	</div>
		
<?php get_footer(); ?>
