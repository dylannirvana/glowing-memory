<?php
/**
 * @package millerweiner
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- THIS IS CONTENT-SINGLE.PHP -->
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<!-- <h2><?php the_title(); ?></h2> -->
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer">
		<?php millerweiner_entry_footer(); ?>
	</footer>-->
</article><!-- #post-## -->
