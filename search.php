<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="box">
			<div class="col-md-12">						
				<h1>YOUR Search Results...</h1>
				<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<a href="<?php echo the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<p><?php the_excerpt(); ?></p>
				<?php endwhile; else : ?>
					<h2>Not Found</h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>