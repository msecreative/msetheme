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

  /**
  * This function is use for calling google font
  */

  function mse_google_fonts(){
    wp_enqueue_style( "mse-google-font", "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", false);
  }

  add_action( "wp_enqueue_scripts", "mse_google_fonts");


  /**
  * This function is use for create navigation menu
  */
  register_nav_menu("main_menu", __("Main Menu", "msetheme"));



  /**
  * This function is use for Customizer Register
  */

  function mse_customizer_register($wp_customize){

    $wp_customize->add_section("mse_header_section", array(
        "title"         => __("Header Section","msetheme"),
        "description"   => __("If you want to update your header area, you can use this section. Such as logo","msetheme"),
    ));

    $wp_customize->add_setting("mse_logo", array(
        "default" => get_bloginfo("templete_directory") . "/assets/img/logo-top-1.png",
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "mse_logo", array(
        "label" => __("Logo Upload", "msetheme"),
        "setting" => "mse_logo",
        "section" => "mse_header_section",
    )));

}
add_action( "customize_register", "mse_customizer_register" );