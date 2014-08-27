<?php
/**
 * Template Name: Two Collumn Page
 * Template Description: A two collumn page with a fixed sidebar.
 * @package Business Starter
 */

get_header(); ?>

	<?php the_field( "jumbotron_content" ); ?>

	<div id="primary" class="content-area container two-collumn">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
