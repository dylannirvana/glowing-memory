<?php
/**
 * The template for displaying all single posts.
 *
 * @package millerweiner
 */

get_header('blog'); ?>
<section class="scene news container"> 

<!-- THIS IS SINGLE.PHP -->
	<div id="primary" class="content">
      
	    <article class="blogmain"> <!-- BLOG MAIN -->

			<?php 
			while ( have_posts() ) : the_post(); 
				get_template_part( 'template-parts/content', 'single' ); 

				 // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			
			endwhile; // end of the loop. ?>

		</article>

	    <aside class="blogside"> <!-- THE SIDEBAR -->
			<?php get_sidebar(); ?>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
