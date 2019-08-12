<?php

// Write output to WordPress debug log
if ( !function_exists( 'jp_write_log' ) ) {
  function jp_write_log( $log )  {
    if ( true === WP_DEBUG ) {
      if ( is_array( $log ) || is_object( $log ) ) {
        error_log( print_r( $log, true ) );
      } else {
        error_log( $log );
      }
    }
  }
}

// Quick array/object display
if ( !function_exists( 'jp_pre' ) ) {
  function jp_pre( $content, $echo = true ) {
    if ( $echo == true ) {
      echo '<pre>';
      print_r( $content );
      echo '</pre>';
    } else {
      return '<pre>' . print_r( $content, true ) . '</pre>';
    }
  }
}

// Create dummy images
if ( !function_exists( 'jp_dummy_image' ) ) {
  function jp_dummy_image( $width = 100, $height = 100, $background = '000', $color = 'fff', $text = '' ) {
    $text = $text != '' ? '&text=' . $text : $text;
    echo '<img src="https://dummyimage.com/' . $width . 'x' . $height . '/' . $background . '/' . $color . '.png' . $text . '" />';
  }
}

// Images path
if ( !function_exists( 'jp_image_path' ) ) :
  function jp_image_path( $file ) {
    return get_stylesheet_directory_uri() . '/assets/images/' . $file;
  }
endif;

?>