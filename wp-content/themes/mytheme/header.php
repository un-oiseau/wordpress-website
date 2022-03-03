<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP Anyway</title>

    <?php wp_head();?>
</head>
<body>
    
<header>
    <div class="container">
        <?php 
            wp_nav_menu(
                array(
                    'menu' => 'top-menu',
                    'menu_class' => 'top-bar',
                    'menu_id' => 'top-bar',
                    
                )
            );
        ?>
    </div>


    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'top-menu',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
        </div>
    </nav>

</header>

