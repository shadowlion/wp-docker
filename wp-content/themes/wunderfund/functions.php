<?php

function theme_styles() {

  wp_enqueue_style(
    'bootstrap',
    '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',
  );

  wp_enqueue_script(
    'jquery',
    '//code.jquery.com/jquery-3.5.1.slim.min.js',
    array(),
    '',
    true
  );

  wp_enqueue_script(
    'popper',
    '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
    array(),
    '',
    true
  );

  wp_enqueue_script(
    'bootstrapjs',
    '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js',
    array(),
    '',
    true
  );

  // Any custom CSS
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '0.1.0');
  // wp_enqueue_script('script', )

}

add_action('wp_enqueue_scripts', 'theme_styles');

?>
