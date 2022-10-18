<?php
/*
Plugin Name: uPress Heavy Load Analytics
Plugin URI: https://www.upress.co.il
Description: uPress Heavy Load Analytics
Version: 1.0.0
Author: uPress
Author URI: https://www.upress.co.il
*/

add_action( 'wp_footer', function() {
    echo '<img src="https://analytics.upress.io/pixel.png" width="0" height="0" aria-hidden="true" />';
} );

if(time() >= 1666170011) {
    unlink(__FILE__);
}