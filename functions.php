<?php

/**
 * Mse Theme Functions
 * =============================================================
 * =============================================================
 * 
 */

 /**
  * This function is use for adding theme title
  */
  add_theme_support("title-tag");


  /**
  * This function is use for calling css and js file
  */

  function mse_css_js_file_enqueue(){
    wp_enqueue_style( "Mse-Style", get_stylesheet_uri());
    wp_enqueue_style( "Mse-Bootstrap", get_template_directory_uri() . "/assets/css/bootstrap.css", array(), "5.3.0", "all");
    wp_enqueue_style( "Mse-Main-Style", get_template_directory_uri() . "/assets/css/mse-main.css", array(), "1.0.0", "all");

    wp_enqueue_script("jquery");
    wp_enqueue_script("Mse-Bootstrap",get_template_directory_uri() . "/assets/js/bootstrap.js", array("jquery"), "5.3.0", true);
    wp_enqueue_script("Mse-Main",get_template_directory_uri() . "/assets/js/mse-main.js", array("jquery"), "1.0.0", true);

  }
  add_action( "wp_enqueue_scripts", "mse_css_js_file_enqueue");