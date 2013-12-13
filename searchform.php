<?php
/**
 * The template for displaying search forms in Emi Theme
 *
 * @package WordPress
 * @subpackage emi_theme
 * @since Emi Theme 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'emitheme' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( '&nbsp;', 'emitheme' ); ?>" />
	</form>
