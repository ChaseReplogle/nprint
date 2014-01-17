<aside class="right-off-canvas-menu">
        <a class="exit-off-canvas">Close</a>
        <hr>
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
				<input type="submit" id="searchsubmit" value="Search" class="btn" />
			</div>
		</form>
</aside>