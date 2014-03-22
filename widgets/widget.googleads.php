<?php
/*
Plugin Name: Google Ads plugin
Plugin URI: http://www.wellrootedmedia.com/wordpress-plugins/
Description: Blah.
Version: 0.1
Author: Well Rooted Media
Author URI: http://www.wellrootedmedia.com/
*/
class GoogleAd_Widget extends WP_Widget {

    /**
     * Sets up the widgets name etc
     */
    public function __construct($id_base, $name, $widget_options = array(), $control_options = array()) {
        // widget actual processes
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget
        echo 'hello world';
    }

    /**
     * Ouputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
        echo 'hello world';
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
}