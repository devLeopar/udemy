<?php 

function r_activate_plugin(){
    if( version_compare( get_bloginfo( 'version' ), '5.0','<' ) ){
        wp_die( __('You must update Wordpress to join the lightside','recipe') );
    }

    recipe_init();
    flush_rewrite_rules();

    global $wpdb;
    $tableName = "$wpdb->prefix"."recipe_ratings";
    $createSQL          = "
    CREATE TABLE `$tableName` (
        `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `recipe_id` BIGINT(20) UNSIGNED NOT NULL DEFAULT '0',
        `rating` FLOAT(3,2) UNSIGNED NOT NULL DEFAULT '0.00',
        `user_ip` VARCHAR(50) NOT NULL DEFAULT '' COLLATE 'utf8mb4_general_ci',
        PRIMARY KEY (`ID`) USING BTREE
    )
    ENGINE=InnoDB " . $wpdb->get_charset_collate() .";";

    require( ABSPATH . "/wp-admin/includes/upgrade.php" );

    // If that table already created do not run this creation algorithm again
    if( $wpdb->get_var("SHOW TABLES LIKE '$tableName'") != $tableName ){
    dbDelta( $createSQL );
    }

    wp_schedule_event( time(), 'daily', 'r_daily_recipe_hook' );
}


?>