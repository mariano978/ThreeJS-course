<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <!-- <div class="logo">
                <a href="<?php echo site_url("/"); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_black.png" alt="logotipo">
                </a>
            </div>
            <div class="burguer-menu">
                <i class="fa-solid fa-bars"></i>
            </div> -->
            <?php
            $args = [
                "theme_location" => "menu-principal",
                "container" => "nav",
                "container_class" => "menu-principal"
            ];
            wp_nav_menu($args); ?>
        </div>
    </header>