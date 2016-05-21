<form method="get" id="searchform" class="navbar-form navbar-right searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="form-inline">
		<input type="text" name="s" class="form-control" placeholder="Search Here.." value="<?php echo get_search_query(); ?>">
	</div>
	<button type="submit" id="searchsubmit" class="btn btn-primary">Submit</button>
</form> 