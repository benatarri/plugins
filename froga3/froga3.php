<?php
/*
Plugin Name: Froga3
Description: Orain bai.
Version: 1.0.2
Author: Benat
*/
// add_action('admin notices', 'myFunction');
// add_action('wp_head', 'myFunction');
add_shortcode("Froga3", "datuakIkusi");

function datuakIkusi()
{
    wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.7.1.min.js");
    wp_enqueue_script("app", plugin_dir_url[__FILE__] . "./js/app.js");
}
?>