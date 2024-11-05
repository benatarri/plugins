<?php
/*
Plugin Name: Froga1
Description: A por el boteeee oeeeee a por el bote oee oeee
Version: 1.0.0
Author: Benat
*/
// add_action('admin notices', 'myFunction');
// add_action('wp_head', 'myFunction');
add_shortcode("Froga1", "myFunction");
function myFunction()
{
    return "<h1>Plugin hau azalduko da [Froga1] jartzen dugun sarreretan</h1>";
}