<?php
/**
 * Plugin Name: Boost for Bricks Builder
 * Description: This plugin improves the Bricks Builder
 * Version: 1.0.0
 * Author: Roy Groot Hulze
 * Author URI: https://codeblock.nl
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

function cb_bi_plugin_enqueue_scripts() {
    // Register the script
    wp_register_script('open-css-tab', plugins_url('/js/open-css-tab.js', __FILE__), null, true, true);

    // Enqueue the script
    wp_enqueue_script('open-css-tab');
}

add_action('wp_enqueue_scripts', 'cb_bi_plugin_enqueue_scripts');

function cb_bi_plugin_enqueue_styles() {
    // Register the style
    wp_register_style('open-css-tab', plugins_url('/css/open-css-tab.css', __FILE__), null, true);

    // Enqueue the style
    wp_enqueue_style('open-css-tab');
}

add_action('wp_enqueue_scripts', 'cb_bi_plugin_enqueue_styles');