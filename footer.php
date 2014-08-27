<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Business Starter
 */
?>
<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container clearfix">
			<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
				<div id="first" class="widget-area col-md-4">
					<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
				</div><!-- #first .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
				<div id="second" class="widget-area col-md-4">
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</div><!-- #second .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
				<div id="third" class="widget-area col-md-4">
						<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
				</div><!-- #third .widget-area -->
<?php endif; ?>
<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
						<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
<?php endif; ?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
