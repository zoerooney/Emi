<?php
/**
 * Template Name: Full Width Page
 *
 * @package Emi_Starter_Theme
 */

get_header(); ?>

		<div id="primary" class="full-width">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>