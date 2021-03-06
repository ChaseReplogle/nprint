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
</div>

<?php wp_footer(); ?>



<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/foundation.min.js"></script>

<script>
  $(document).foundation();
</script>




<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/imagesloaded.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/video.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/bigvideo.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/calculator.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/sort-table.js"></script>

<!-- this is where we put our custom functions -->

<script src="<?php echo get_template_directory_uri(); ?>/_/inc/js/vender/print.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>


<link rel="stylesheet" id="print-css" href="<?php echo get_template_directory_uri(); ?>/_/inc/css/print.css" />
<script>

	$ = jQuery;

	$.urlParam = function(name){
	    var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
	    if (results===null){
	       return null;
	    }
	    else{
	       return results[1] || 0;
	    }
	};

	$.urlParam('style');

	var style = $.urlParam('style');
	  

	if (style==="print")
	  	{
	  	  jQuery('#main-css').remove();
	  	}
	else
  		{
		jQuery('#print-css').remove();
		jQuery('.for-print').remove();
	}
</script>

<script>
	$ = jQuery;
	$("#quote-table").tablesorter(); 
</script>

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
	
<?php include 'nav-search.php'; ?>

</div>
</div>



</body>

</html>
