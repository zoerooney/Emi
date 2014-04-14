<?php
/**
 * The default template for displaying content
 *
 * @package This_is_a_test
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'this-is-a-test' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<span class="entry-date"><?php echo get_the_date(); ?></span>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'this-is-a-test' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
		<?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'this-is-a-test' ) , ', ', '</div>' ); ?>
		
		<div class="comments-link">
			<?php comments_popup_link( 
				 __( 'Leave a comment', 'this-is-a-test' ), 
				 __( '1 comment', 'this-is-a-test' ), 
				 __( '% comments', 'this-is-a-test' ) ); 
			?>
		</div>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->