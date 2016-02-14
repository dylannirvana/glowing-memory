<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package millerweiner
 */
get_header('blog'); ?>
<section class="scene news container"> 

		<h1>News & Blog</h1>
<!-- THIS IS INDEX.PHP -->
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
