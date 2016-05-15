<?php get_header();?>
	<div class="container">
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
			            <?php
			        	if( have_posts() ){
			        	  
			        	  while( have_posts() ){
			        	    
			        	    the_post();
			        	    ?>
			        	    
			        	    <h2 class="intro-text text-center"><strong><?php the_title();?></strong></h2>
			        	    <span><?php the_date(); ?></span>
			        	    <hr class="visible-xs">
			        	    <?php the_content(); ?>
			        	    
			        	  <?php
			        	  }
			        	  
			        	}
			        	?>
                </div>   
            </div>
        </div>
    </div>
<?php get_footer(); ?>