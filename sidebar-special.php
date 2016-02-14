<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package millerweiner
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!-- THIS IS SIDEBAR-SPECIAL.PHP -->
<div id="secondary" class="widget-area" role="complementary">
	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
