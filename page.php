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
			        	    <div class="label label-info">
			        	    	<span><?php the_date(); ?></span>
								<span>Posted by <?php the_author_posts_link(); ?> at <?php the_time( 'F j, Y g:i a'); ?></span>
								<span>Taged by: <?php the_tags( '', ', ', '<br />' ); ?> </span>
								<span>Catergory of: <?php the_category(' ,'); ?></span>
							</div>
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