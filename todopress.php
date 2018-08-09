<?php
  /*
   Plugin Name: todopress
   Plugin URI: http://github.com/dariubs/todopress
   description: >-
    To-do list for wordpress.
   Version: 0.1
   Author: Dariush Abbasi
   Author URI: http://dariush.in
   License: MIT
   */

   define('TODOPRESS_PLUGIN_DIR', plugin_dir_path(__FILE__));

   require_once 'include/init.php';
   require_once 'include/shortcodes.php';
   require_once 'include/menu.php';

?>
