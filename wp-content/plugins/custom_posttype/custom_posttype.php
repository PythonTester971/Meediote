<?php
/*
* Plugin Name: Custom PostType
*/




// add_action('init', 'movielibrary_register_movie_post_type');
// function movielibrary_register_movie_post_type()
// {
//   $args = array(
//     'labels' => array(
//       'name'          => 'Movies',
//       'singular_name' => 'Movie',
//       'menu_name'     => 'Movies',
//       'add_new'       => 'Add New Movie',
//       'add_new_item'  => 'Add New Movie',
//       'new_item'      => 'New Movie',
//       'edit_item'     => 'Edit Movie',
//       'view_item'     => 'View Movie',
//       'all_items'     => 'All Movies',
//     ),
//     'public' => true,
//     'has_archive' => true,
//     'show_in_rest' => true,
//     'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
//   );

//   register_post_type('movie', $args);
// }

// add_action('init','movie_custom_post_type');
// function movie_custom_post_type()
// {
//   register_post_type('movie', 
//   array(
//     'labels'=> array(
//       'name' => ('Movies','textdomain'),
//       'singular_name' => ('Movie','textdomain'),
//       ),
//           'public' => true,
//           'hierarchical' => false,
//           'has_archive' => true,
//       )
//     );
// }
