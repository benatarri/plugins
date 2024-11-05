<?php
/*
 *
 * Add my new menu to the Admin Control Panel
 */
// Hook the 'admin-menu' action hook, run the function named 'nlp_Add_My_Admin_Link()'
add_action( 'admin_menu', 'nlp_Add_My_Admin_Link' );
// Add a new top level menu link to the ACP
function nlp_Add_My_Admin_Link()
{
    add_menu_page(
        'Nire lehen orrialdea', //Title of the page
        'Nire lehen plugina', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        //'../wp-content/plugins/froga2/includes/nlp-first-acp-page.php' // The 'slug'  file to display when clicking the link
        '../wp-content/plugins/froga2/php/nlp-first-acp-page.php'
    );
}