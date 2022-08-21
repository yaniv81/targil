<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package imagen
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="icon" type="image/png" href="<?= get_template_directory_uri() ?>/assets/img/fav.png">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="page" class="site">

            <header class="site-header">
                <div class="site-header-inner">

                    <div id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" />
                    </div>
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id' => 'primary-menu',
                                )
                        );
                        ?>
                    </nav> 
                    <div class="btn-wrappeer">
                        <button class="button">
                            Download
                        </button>
                    </div>
                </div>
            </header> 
