<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Emi_Starter_Theme
 */

get_header(); ?>

<section id="primary" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'emi-starter-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				get_template_part( 'content');
			?>

		<?php endwhile; ?>

		<?php get_template_part( 'inc/pagination' ); ?>

	<?php else : ?>

		<article id="post-0" class="post no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'Nothing Found', 'emi-starter-theme' ); ?></h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'emi-starter-theme' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-0 -->

	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>