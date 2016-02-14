<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package millerweiner
 */

get_header('blog'); ?>
<section class="scene news container"> 

<!-- THIS IS PAGE.PHP -->
	<div id="primary" class="content">
      
	    <article class="blogmain"> <!-- BLOG MAIN -->
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php endwhile; // end of the loop. ?>
		</article>

	    <aside class="blogside"> <!-- THE SIDEBAR -->
			<?php get_sidebar(); ?>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
