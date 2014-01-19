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
	jQuery(document).ready(function(){

    jQuery("#searchsubmit").click(function(e){
        e.preventDefault();
        var search_val=jQuery("#s").val(); 
        jQuery.get(search.php,{search_string:search_val},function(data){
            if(data.length>0){
                jQuery(".search-results").append(data);
            }
        });
    });   
});

</script>

</aside>