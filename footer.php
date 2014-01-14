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

<div class=" team">
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

<div class="footer">
<div class="row">
	<div class="columns medium-2 small-6 logo">
		<div class="footer-logo"><img class="left" src="<?php echo get_template_directory_uri(); ?>/_/inc/images/footer-logo.png" alt="Logo" style="width: 100%;"/></div>
		<p>nPrint Graphix © 2014 | Privacy Policy | Terms Of Use | Links of Use</p>
	</div>
	
	
	<div class="columns medium-2 small-6 about">
		<h5>About</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed ipsum malesuada, eleifend massa quis, tincidunt nulla. Etiam porta velit non tincidunt tempor. Etiam porta velit non tincidunt tempor. </p>
	</div>
	
	
	<div class="columns medium-2 small-6">
		<h5>Contact</h5>
		<p>1943 West Sunset</br>
		Springfield, Missouri 65807</br>
		Local: (417) 882-SIGN (7446)</br>
		Toll Free: 1-888-518-7344</br>
		Fax: (417) 877-7523</p>
	</div>
	
	
	<div class="columns medium-2 small-6">
		<h5>Products and Services</h5>
		<p><a href="#">Banners</a></p>
		<p><a href="#">Decals</a></p>
		<p><a href="#">Wraps</a></p>
		<p><a href="#">Signs</a></p>
		<p><a href="#">Accessories</a></p>
		<p><a href="#">Design Services</a></p>
		<p><a href="#">Color Matching</a></p>
		<p><a href="#">Contour Cutting</a></p>
	</div>
	
	
	<div class="columns medium-2 small-6">
		<h5>Support</h5>
		<p><a href="#">Printing Specs</a></p>
		<p><a href="#">Materials</a></p>
		<p><a href="#">Sizing Guidelines</a></p>
		<p><a href="#">Finishes</a></p>
		<p><a href="#">Seems</a></p>
		<p><a href="#">Pole Pockets</a></p>
		<p><a href="#">Artwork</a></p>
		<p><a href="#">Proofs</a></p>
		<p><a href="#">More</a></p>
	</div>
	
	
	<div class="columns medium-2 small-6">
		<h5>Social</h5>
		<p><a href="#">Facebook</a></p>
		<p><a href="#">Twitter</a></p>
		<p><a href="#">YouTube</a></p>
	</div>
</div>
</div>

<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->


<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/foundation.min.js"></script>

<script>
  $(document).foundation();
</script>


<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/imagesloaded.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/video.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/bigvideo.js"></script>
	
</body>

</html>
