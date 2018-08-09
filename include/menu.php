<?php
 /** Step 2 (from text above). */
  add_action( 'admin_menu', 'todopress_settings' );

  /** Step 1. */
  function todopress_settings() {
    add_options_page( 'todopress', 'todopress', 'options', 'todopress_settings', 'todopress_opts' );
  }

  /** Step 3. */
  function todopress_opts() {
    if ( !current_user_can( 'options' ) )  {
      wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    echo '<div class="wrap">';
    echo '<p>Options</p>';
    echo '</div>';
  }

 ?>
