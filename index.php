<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="content">
				<?php the_title(); ?>
				<?php the_content(); ?>
			</div>
	
	  
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
