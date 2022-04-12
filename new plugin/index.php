<?php
/**
 * Plugin Name: frontend-users
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Musa Osuman
 */
// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/script.php');
require_once(plugin_dir_path(__FILE__).'/list.php');


require_once(plugin_dir_path(__FILE__).'/show.php');


