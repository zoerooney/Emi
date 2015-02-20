<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to themeFunction_comment() which is
 * located in the functions.php file.
 *
 * @package themeHandle
 */
?>
<div id="comments" class="row">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'themeTextDomain' ); ?></p>
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

		<ol class="commentlist">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * See themeFunction_comment() in inc/functions/comments.php for more.
				 */
				wp_list_comments( array( 'callback' => 'themeFunction_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'themeTextDomain' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'themeTextDomain' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'themeTextDomain' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'themeTextDomain' ); ?></p>
	<?php endif; ?>
	
	<?php 
	$fields = array (
		'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /><label for="author">Name (Required)</label></p>',
		'email' => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /><label for="email">Email (Required)</label></p>',
		'url' => '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /><label for="url">URL</label></p>',
	);
	comment_form( 
		array(
			 'title_reply' => '<div class="comment-form-title">Leave a Comment</div>',
			 'comment_notes_before' => '',
			 'label_submit' => 'SUBMIT',
			 'comment_field' => '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
			 'fields' => $fields
		 ) 
	); ?>
	      	

</div><!-- #comments -->
