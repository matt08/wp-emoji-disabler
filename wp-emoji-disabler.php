<?php
/**
 * Plugin Name: WordPress Emoji Disabler
 * Plugin URI:
 * Description: Disable WordPress Emoji
 * Version: 1.0
 * Author: Mateusz Mazurek
 * Author URI: https://mateuszmazurek.pl
 */

//* prevent directly access
if (!defined('ABSPATH')) die();

//* Disable wp emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
