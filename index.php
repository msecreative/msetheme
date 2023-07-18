<?php
/*
* This templete for displaying the header
*/

?>
<!DOCTYPE html>
<html lang="<?php language_attributes()?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href=""><img src="<?=get_theme_mod("mse_logo") ?>" alt="logo"></a>
                </div>
                <div class="col-md-9">
                    <div class="mse-nav">
                        <?php wp_nav_menu(array(
                                "theme_location" => "main_menu",
                                "menu_class"     => "mse-nav-menu",
                                "container"       =>false
                                )); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>