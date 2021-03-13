<?php
/**
*newstimes functions and definitions
*@package newstimes
*@link https://developer.wordpress.org/theme/theme-functions
*/

/**
*registering menu support
*/

function newstimes_register_nav_menu(){
        register_nav_menus( array(
            'header_menu' => __( 'Header Menu', 'news-times' ),
            'footer_menu'  => __( 'Footer Menu', 'news-times' ),
        ) );
    }
    add_action( 'after_setup_theme', 'newstimes_register_nav_menu', 0 );




/**
*
Main slider
*registering custom post for main slider
*/

add_action('init','main_slider');
function main_slider(){
register_post_type('slider-item',array(
'labels'        =>array(
'name'          =>('Slider'),
'singular_name' =>('Slider'),
'menu_name'     =>('Main Slider'),
'name_admin_bar'=>('Add New'),
'all_items'     =>('All Slider'),
'add_new'       =>('Add New'),
'add_new_item'  =>('All Slider'),
'edit_item'     =>('Edit Slider'),
'view_item'     =>('View Slider'),
'search_items'     =>('Search Slider')
),
'public'       =>true,
'has_archive'  =>true,
'rewrite'      =>array('slug'=>'slider-item'),
'menu_position'=>9,
'menu_icon'    =>'dashicons-video-alt',
'supports'     =>array('title','thumbnail','editor')
)
);
}

/**
*Enabling custom post taxonomy for Main slider
*/
function main_slider_taxonomy(){
	register_taxonomy(
'main_slider_cat',
'slider-item',
array(
'hierarchical'=>true,
'label'			=>'Slider Category',
'query_var'		=>true,
'rewrite'		=>array(
'slug'			=>'Slider-Category',
'with_fornt'		=>true
)
)

	);
}
add_action('init','main_slider_taxonomy');

/**
*Featured Image Support
*/
add_theme_support('post-thumbnails',array('post','page','slider-item'));
set_post_thumbnail_size(300,200,true);

add_image_size('slider-item','1300','530',true);
add_image_size('slider-item-featured','80','71',true);  

//specific post category
add_image_size('spc_post_cat','200','200',true);
//single page image
add_image_size('single-page-image','700','500',true);
//thumbnail post image
add_image_size('home-thumb-image','90','70',true);