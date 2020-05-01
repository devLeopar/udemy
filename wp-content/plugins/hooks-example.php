<?php 
/*
* Plugin Name: Hooks Example
*
*/


// function ju_title( $title ){
//     return 'Hooked '. $title;
// }
// function ju_footer_shouthout(){
//    echo 'Hooked Example plugin was here.<br>';
// }
// function ju_footer_shouthout_v2(){
//    echo 'Hooked Example plugin was here. Version 2 <br>';
// }

// add_filter('the_title','ju_title');
// add_action('wp_footer','ju_footer_shouthout');
// add_action('wp_footer','ju_footer_shouthout_v2', 5 );

function ju_footer(){
    do_action( 'ju_custom_footer' );
}

function ju_kill_wp(){
    echo 'HEllo';
}


add_action('wp_footer','ju_footer');
add_action('ju_custom_footer','ju_kill_wp');

?>