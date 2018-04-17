<?php

// enqueue the child theme stylesheet

Function _action_wellnesscenter_child_enqueue_scripts() {
wp_register_style( 'wellnesscenter_childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'wellnesscenter_childstyle' );
}
add_action( 'wp_enqueue_scripts', '_action_wellnesscenter_child_enqueue_scripts',11);
