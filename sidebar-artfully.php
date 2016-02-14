<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package millerweiner
 */

if ( ! is_active_sidebar( 'sidebar-artfully' ) ) {
	return;
}
?>
<!-- THIS IS SIDEBAR ARTFULLY.PHP -->
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-artfully' ); ?>
</div><!-- #secondary -->
