<?php 

function r_get_random_recipe(){
    global $wpdb;

    return $wpdb->get_var($wpdb->prepare("SELECT `ID` FROM %d
    WHERE post_status='publish' AND post_type='recipe'
    ORDER BY rand() LIMIT 1",$wpdb->posts));
}


?>