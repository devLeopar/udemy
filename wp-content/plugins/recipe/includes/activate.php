<?php 

function r_activate_plugin(){
    if( version_compare( get_bloginfo( 'version' ), '5.0','<' ) ){
        wp_die( __('You must update Wordpress to join the lightside','recipe') );
    }

    global $wpdb;
    $createSQL          = "
    CREATE TABLE `". $wpdb->prefix ."recipe_ratings` (
        `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `recipe_id` BIGINT(20) UNSIGNED NOT NULL DEFAULT '0',
        `rating` FLOAT(3,2) UNSIGNED NOT NULL DEFAULT '0.00',
        `user_ip` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
        PRIMARY KEY (`ID`) USING BTREE
    )
    ENGINE=InnoDB " . $wpdb->get_charset_collate() .";";

    require( ABSPATH . "/wp-admin/includes/upgrade.php" );
    dbDelta( $createSQL );

}


?>