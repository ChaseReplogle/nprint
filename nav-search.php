<aside class="right-off-canvas-menu">
        <div class="close"><a class="exit-off-canvas"><i class="fa fa-minus-square-o"></i></a></div>
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div class="search-form">
				<input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search"/>
				<button type="submit" id="searchsubmit" class="btn btn-success">
                	<i class="fa fa-search"></i>
            	</button>
			</div>
		</form>

		<div class="search-results">
		</div>



<script>
(document).ready(function(){
	var $ = jQuery;
	$( "#searchform" ).submit(function( event ) {
		return false;
  		alert( "Handler for .submit() called." );
  		
	}); 
});
</script>

</aside>