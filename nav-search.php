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
			var $ = jQuery;

			$('#searchsubmit').submit(function(e) { 
				return false;
				var search_val=jQuery("#s").val();
					$.get("<?php echo get_template_directory_uri(); ?>/earch.php," {search_string:search_val}, {search_string : search_val }, marketsuccessFn)
			});


			function marketsuccessFn(result) {
				$('.search-results').fadeOut( 100 , function() {
		    		$(this).html( result);
				}).fadeIn( 1000 );

				console.log("Setting result");
			}

			function marketerrorFn(xhr, status, strErr) {
				alert(strErr);
			}
		</script>

</aside>