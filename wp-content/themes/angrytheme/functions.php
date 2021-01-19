<?php

//----------- Deactivate Gutenberg editor ---------

// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// -------------------------------------------------


//----------reservations.php---------
//--------------- Navbar by Bootstrap --------------
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'angryTheme' ),
) );
// -------------------------------------------------

// NEW PICTURE SIZE

add_image_size('card-article', 800, 200, true);
