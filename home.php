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
    BV.show('<?php echo get_template_directory_uri(); ?>/_/inc/images/lines.png');
	} else {
    BV.show('<?php echo get_template_directory_uri(); ?>/_/inc/videos/npg_test_clips_1280x720.mp4',{ambient:true});
    }
});
</script>
	
<nav class="top-bar account-nav" data-topbar>
<section class="top-bar-section right">
    <!-- Right Nav Section -->
    <ul>
	  	  <li><a class="active" href="#">Become a Member</a></li>
	  	  <li><a href="#">Log In</a></li>
    </ul>
</nav>

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

<nav class="top-bar main-nav" data-topbar>
  <ul class="title-area">
    <li class="name"></li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul>
    	  <li class="current-item"><a href="#">Home</a></li>
      	  <li class="has-dropdown">
        	<a href="#">Company</a>
        	<ul class="dropdown">
         		 <li><a href="#">Team</a></li>
         		 <li><a href="#">Mission</a></li>
         		 <li><a href="#">History</a></li>
        	</ul>
      	  </li>
	  	  <li><a href="#">Products</a></li>
	  	  <li><a href="#">Process</a></li>
	  	  <li><a href="#">Portfolio</a></li>
	  	  <li><a href="#">Support</a></li>
	  	  <li><a href="#">Contact</a></li>
    </ul>
</nav>


</div>

<div class="wrapper">
<div class="row print boxed" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_/inc/images/print-bg.jpg'); background-size:100% 100%;">
		<div class="medium-7 columns row-image not-mobile">
			<img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/printer.png" class="left-line" alt="Printer"/>
		</div>
		
  		<div class="medium-5 columns row-content">
  			<ul class="icon-nav medium-block-grid-4">
  				<li><a href="#" class="current-item"><i class="fi-print"></i>Commitment</a></li>
  				<li><a href="#"><i class="fi-lightbulb"></i>Your Ideas</a></li>
  				<li><a href="#"><i class="fi-wrench"></i>Art & Science</a></li>
  				<li><a href="#"><i class="fi-dollar-bill"></i>Affordability</a></li>
  			</ul>
  			<h4>Committed to Supporting You</h4>
  			<p>There are a lot of places you can print banners. But there will never be another nPrint Graphix. Craftsmen, dedicated to innovation and mastery, nPrint offers you more than ink and vinyl. With a wide range of services and products, just think of us as your own personal team of sign artisans—who just happen to have some of the most impressive printers on earth.</p>
			<p><a href="#" class="secondary_button">Become a Client</a></p>
  		</div>
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
<div class="row">
	
	<div class="row nav-row">
		<div class="columns medium-centered medium-12 portfolio-nav">
			<ul class="icon-nav large-block-grid-12">
  				
  				<?php $post_objects = get_field('portfolio_categories');
					if( $post_objects ): ?>
							<?php $i = 0; ?>
					    	<?php foreach( $post_objects as $post): ?>
					    	<?php  $i++; ?>
					    	<?php if( $i < 11) { ?>
					        <?php setup_postdata($post); ?>
  								<li><a href="#" class="<?php if ($i == 1)  echo "current-item";  ?>"><i class="fi-<?php echo $post->description; ?>"></i><?php echo $post->name; ?></a></li>
  								<?php $category_name = $post->name; ?>
  								<?php $cateogory_[$i] = $post->name; ?>
  							<?php } ?>
					    <?php endforeach; ?>
					    	<li><a href="/more"><i class="fi-pricetag-multiple"></i>More Work</a></li>

					    <script>
								var $ = jQuery;

								$('.icon-nav a').click(function() {  
									var category_name = $(this).text();
									$.get("<?php echo get_template_directory_uri(); ?>/ajax/ajax-portfolio.php?name=<?php echo $category_name; ?>", {category : category_name }, successFn)
								});

								$('.icon-nav a').click(
								    function(e) {
								        $(this).closest('ul').find('.current-item').removeClass('current-item');
								        $(this).addClass('current-item');
								});

								$(".icon-nav a").removeAttr('href');

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
					    <?php wp_reset_postdata(); ?>
					<?php endif; 
				?>
  			</ul>
		</div>
	</div>
	
	<div class="portfolio-ajax portfolio boxed row">
  		<?php 

	  		$title_slug = $category_0;
			$title_lower = strtolower($title_slug);
			$title_replaced = str_replace( " ", "-", $title_lower);

	  		query_posts('post_type=projects&posts_per_page=1&project_categories='.$title_replaced); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="medium-7 columns row-image">
						<img src="<?php the_field("project_featured_image"); ?>" alt="<?php the_title(); ?>"/>
					</div>
				
			  		<div class="medium-5 columns row-content">
			  			<h4><?php the_title(); ?></h4>
			  			<p><?php the_excerpt();?></p>
			  		<blockquote>"<?php the_field("client_quote"); ?>"</blockquote><cite><?php the_field("client_title"); ?></cite></br>
						<p><a href="#" class="secondary_button">View Full Portfolo</a></p>
			  		</div>

			<?php endwhile; ?>

		<?php endif; ?>

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
								    <a href="#panel<?php echo $i; ?>"><?php the_title(); ?></a>
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
		
<?php get_footer(); ?>
