<aside class="right-off-canvas-menu">
        <!-- <a class="exit-off-canvas">Close</a> -->
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div class="search-form"><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search"/>
				<button type="submit" id="searchsubmit" class="btn btn-success">
                	<i class="fa fa-search"></i>
            	</button>
			</div>
		</form>
</aside>