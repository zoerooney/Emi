<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package This_is_a_test
 */

get_header(); ?>

<section id="primary" role="main">

	<article id="post-0" class="post error404 not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( 'Uh oh!', 'this-is-a-test' ); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps a search would help?', 'this-is-a-test' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>?>