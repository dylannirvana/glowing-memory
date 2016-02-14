<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package millerweiner
 */

get_header('blog'); ?>
<section class="scene news container"> 

<!-- THIS IS ARCHIVE -->
<div id="primary" class="content">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<article class="blogmain"> <!-- BLOG MAIN -->
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php endwhile; // end of the loop. ?>
		</article>

			<!-- <?php the_posts_navigation(); ?> -->

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


<aside class="blogside"> <!-- THE SIDEBAR -->
			<?php get_sidebar(); ?>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
