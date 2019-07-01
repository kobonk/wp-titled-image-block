<?php
/**
 * Plugin Name: WP Titled Image Block
 * Author: Kobonk
 * Version: 1.0.0
 */
  
function loadBlock() {
    wp_enqueue_script(
        'wp-titled-image-block',
        plugin_dir_url(__FILE__) . 'wp-titled-image-block.js',
        array('wp-blocks','wp-editor'),
        true
    );
}
   
add_action('enqueue_block_editor_assets', 'loadBlock');
