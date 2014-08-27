<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Business Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div id="secondary" class="widget-area" role="complementary">
<div class="well">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
</div><!-- #secondary -->