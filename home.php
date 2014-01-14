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
  			<h3><strong>Craftsmanship at a whole new scale.</strong></h3>
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
<div class="row craft boxed" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_/inc/images/video-bg.jpg'); background-size:100% 100%;">
  		<div class="medium-6 columns row-content">
  			<h4>Craftsmanship</h4>
  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Proin venenatis dui arcu, vel viverra odio malesuada nec. Nullam tempor dapibus lorem ut molestie. Nullam tempor dapibus lorem ut molestie.</p>
			<p><a href="#" class="primary_button">Our Process</a></p>
  		</div>
  		
  		<div class="medium-6 columns row-image">
  			<div class="embed-container ">
				<?php the_field( "video_embed" );  ?> 
			</div>
		</div>
</div>
</div>

<div class="wrapper">
<div class="row portfolio boxed" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_/inc/images/banner-bg.jpg'); background-size:100% 100%;">
	
	<div class="row nav-row">
		<div class="columns right medium-9">
			<ul class="icon-nav large-block-grid-7">
  				<li><a href="#"><i class="fi-page"></i>Small Banners</a></li>
  				<li><a href="#" class="current-item"><i class="fi-page-add"></i>Large Banner</a></li>
  				<li><a href="#"><i class="fi-photo"></i>Windows</a></li>
  				<li><a href="#"><i class="fi-arrows-out"></i>Wraps</a></li>
  				<li><a href="#"><i class="fi-target-two"></i>Die Cuts</a></li>
  				<li><a href="#"><i class="fi-annotate"></i>Floor Prints</a></li>
  				<li><a href="#"><i class="fi-home"></i>Exhibit Spaces</a></li>
  			</ul>
		</div>
	</div>
	
  		<div class="medium-7 columns row-image">
			<img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/banner.jpg" alt="Printer"/>
		</div>
	
  		<div class="medium-5 columns row-content">
  			<h2>Our Work</h2>
  			<h4>Sherman Williams Banners</h4>
  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Proin venenatis dui arcu, vel viverra odio malesuada nec. Nullam tempor dapibus lorem ut molestie. Nullam tempor dapibus lorem ut molestie.</p>
  		<blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla."</blockquote><cite>- Chase Replogle, Director of Marketing</cite></br>
			<p><a href="#" class="secondary_button">More Work</a></p>
  		</div>

</div>
</div>

<div class="wrapper">
<div class="row company full">
  		<div class="medium-6 columns row-content">
  			<h4>More Than Ink and Vinyl</h4>
  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Proin venenatis dui arcu, vel viverra odio malesuada nec. Nullam tempor dapibus lorem ut molestie. Nullam tempor dapibus lorem ut molestie.</p>	
  			<p class="support_link"><a href="#">Team</a></p>
  			<p class="support_link"><a href="#">Mission</a></p>
			<p class="support_link"><a href="#">History</a></p>
			<p><a href="#" class="primary_button">The Company</a></p>
  		</div>
  		
  		<div class="medium-6 columns letter">
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Proin venenatis dui arcu, vel viverra odio malesuada nec. Nullam tempor dapibus lorem ut molestie. Nullam tempor dapibus lorem ut molestie. Nullam tempor dapibus lorem ut molestie."</p>
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
			  <dd>
			    <a href="#panel1">What is nPrint Graphix?</a>
			    <div id="panel1" class="content active">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    </div>
			  </dd>
			  
			  <dd>
			    <a href="#panel2">How do I make a purchase?</a>
			    <div id="panel2" class="content">
			      <p>Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    </div>
			  </dd>
			  
			  <dd>
			    <a href="#panel3">How are my items shipped?</a>
			    <div id="panel3" class="content">
			      <p>Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    </div>
			  </dd>
			  
			  <dd>
			    <a href="#panel4">How do I submit artwork?</a>
			    <div id="panel4" class="content">
			      <p>Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    </div>
			  </dd>
			  
			  
			  <dd>
			    <a href="#panel5">What is your turn around time?</a>
			    <div id="panel5" class="content">
			      <p>Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    </div>
			  </dd>
			  
			  
			  <dd>
			    <a href="#panel6">What if I need artwork designed?</a>
			    <div id="panel6" class="content">
			      <p>Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    </div>
			  </dd>
			  
			   <dd>
			    <a href="#">More</a>
			  </dd>
		</dl>			
		</div>
		
  		<div class="medium-5 columns row-content">
  			<h4>Support</h4>
  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Proin venenatis dui arcu, vel viverra odio malesuada nec. Nullam tempor dapibus lorem ut molestie. Nullam tempor dapibus lorem ut molestie.</p>	
  			<p class="support_link"><a href="#">Art Department</a></p>
			<p class="support_link"><a href="#">Sales Representatives</a></p>
			<p class="support_link"><a href="#">Pre-Press</a></p>
			<p><a href="#" class="secondary_button">Support</a></p>
  		</div>
</div>
</div>

		
<?php get_footer(); ?>
