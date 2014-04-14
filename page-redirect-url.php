<?php
/**
 * Template Name: Redirect to URL
 * 
 * @package This_is_a_test
 */

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		if ( get_field('url') ) :
			$redirecturl = get_field('url');
			wp_redirect( $redirecturl );
			exit;
		else :
			_e('Your theme is not set up to use this template, or you have not specified a URL.', 'this-is-a-test');
		endif;
	endwhile;
endif; 
?>