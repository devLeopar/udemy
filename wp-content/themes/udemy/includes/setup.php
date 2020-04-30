<?php

function ju_setup_theme(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'starter-content', [
        'widgets'                           => [
            // Place three core-defined widgets in the sidebar area
            'ju_sidebar'                    => [
                'text_business_info', 'search', 'text_about',
                ]
            ],

            // Create the custom image attachments used as post thumbnails for pages
            'attachments'                    => [
                'image-about'                => [
                    'post_title'             => __('About','udemy'),
                    'file'                   => 'assets/images/about/1.jpg',
                    ],
            ],
            // Core tanımlı sayfaları ve postları hallet ulan
            'posts'                          => [
                'home'                       => [
                    'thumbnail'              => '{{image-about}}'
                    ], 
                'about'                      => [
                    'thumbnail'              => '{{image-about}}'
                    ], 
                'contact'                    => [
                    'thumbnail'              => '{{image-about}}'
                    ], 
                'blog'                       => [
                    'thumbnail'              => '{{image-about}}'
                    ], 
                'homepage-section'           => [
                    'thumbnail'              => '{{image-about}}'
                    ],
            ],
            'options'                        => [
                'show_on_front'              => 'page',
                'page_on_front'              => '{{home}}',
                'page_for_posts'             => '{{blog}}',
            ],
            'theme_mods'                     => [
                'ju_facebook_handle'         => 'udemy',
                'ju_twitter_handle'          => 'udemy',
                'ju_instagram_handle'        => 'udemy',
                'ju_email'                   => 'udemy',
                'ju_phone_number'            => 'udemy',
                'ju_header_show_search'      => 'yes',
                'ju_header_show_cart'        => 'yes',
            ],
            'nav_menus'                      => [
                //üste menü kaydet hade
                'primary'                    => array(
                    'name'                   => __('Primary Menu','udemy'),
                    'items'                  => array(
                        'link_home',
                        'page_about',
                        'page_block',
                        'page_contact',
                    ),
                ),
                //üste menü kaydet hade
                'secondary'                    => array(
                    'name'                   => __('Secondary Menu','udemy'),
                    'items'                  => array(
                        'link_home',
                        'page_about',
                        'page_block',
                        'page_contact',
                    ),
                ),
            ]
    ]);
    

    register_nav_menu( 'primary',__( 'Primary Menu' ,'udemy' ) );
    register_nav_menu( 'secondary',__( 'Secondary Menu' ,'udemy' ) );

     if (function_exists('quads_register_ad')){
        quads_register_ad( array(
            'location' => 'udemy_header', 
            'description' => 'Udemy Header position'            
            ));
        }
}
