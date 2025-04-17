<?php

/*
* Plugin name: My custom CSS & JS
*/

function custom_load_css_and_js()
{
  wp_enqueue_script('custom_js', plugins_url('custom_js.js', __FILE__), [], false, [
    'strategy' => 'defer'
  ]);
  wp_enqueue_style('custom_css', plugins_url('custom_css.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'custom_load_css_and_js');

// define('', plugin_dir_path(__FILE__));

// function enqueue_css_n_js()
// {

//   wp_enqueue_style('custom_css', './custom_css.css');

//   wp_enqueue_script('custom_css', './custom_css.js');
// }
// add_action('wp_enqueue_scripts', 'enqueue_css_n_js');
