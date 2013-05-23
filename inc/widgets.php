<?php
/**
 * Makes a custom Widget for displaying Aside, Link, Status, and Quote Posts available with Twenty Eleven
 *
 * Learn more: http://codex.wordpress.org/Widgets_API#Developing_Widgets
 *
 * @package WordPress
 * @subpackage twenty_eleven
 * @since Twenty Eleven 1.0
 */
class twenty_eleven_Eye_Candy_Widget extends WP_Widget {

	/**
	 * Constructor
	 *
	 * @return void
	 **/
	function twenty_eleven_Eye_Candy_Widget() {
		$widget_ops = array( 'classname' => 'widget_twentyeleven_eyecandy', 'description' => __( 'Use this widget to display your Eye Candy items (which are added in the Options area of the admin).', 'twentyeleven' ) );
		$this->WP_Widget( 'widget_twentyeleven_eyecandy', __( 'Twenty Eleven Eye Candy', 'twentyeleven' ), $widget_ops );
		$this->alt_option_name = 'widget_twentyeleven_eyecandy';

		add_action( 'save_post', array(&$this, 'flush_widget_cache' ) );
		add_action( 'deleted_post', array(&$this, 'flush_widget_cache' ) );
	}

	/**
	 * Outputs the HTML for this widget.
	 *
	 * @param array An array of standard parameters for widgets in this theme
	 * @param array An array of settings for this widget instance
	 * @return void Echoes it's output
	 **/
	function widget( $args, $instance ) {
		$cache = wp_cache_get( 'widget_twentyeleven_eyecandy', 'widget' );

		if ( !is_array( $cache ) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = null;

		if ( isset( $cache[$args['widget_id']] ) ) {
			echo $cache[$args['widget_id']];
			return;
		}

		ob_start();
		extract( $args, EXTR_SKIP );

		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Ephemera', 'twentyeleven' ) : $instance['title'], $instance, $this->id_base);

		if ( ! isset( $instance['number'] ) )
			$instance['number'] = '10';

		if ( ! $number = absint( $instance['number'] ) )
 			$number = 10;

	
		echo $before_widget;
		echo $before_title;
		echo $title; // Can set this with a widget option, or omit altogether
		echo $after_title;
		

		echo $after_widget;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set( 'widget_twentyeleven_eyecandy', $cache, 'widget' );
	}

	
}