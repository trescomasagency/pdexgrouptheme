<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <!-- Desktop -->
    <?php if(str_contains( $_SERVER["REQUEST_URI"], "inicio") || str_contains( $_SERVER["REQUEST_URI"], "nosotros") || str_contains( $_SERVER["REQUEST_URI"], "servicios") || str_contains( $_SERVER["REQUEST_URI"], "contacto") || str_contains( $_SERVER["REQUEST_URI"], "productos") || str_contains( $_SERVER["REQUEST_URI"], "aviacion")): ?>
    <header class="pdexgroup__desktop-header">
        <div class="pdexgroup__desktop-header-content">
            <div class="pdexgroup__desktop-header-content-logo">
                <?= the_custom_logo(); ?>
            </div>
            <?php 
                wp_nav_menu(array(
                    'theme_location'    => 'menu_desktop_spanish',
                    'container'         => 'nav',
                    'container_class'   => 'pdexgroup__desktop-header-content-nav',
                    'menu_class'        => 'pdexgroup__desktop-header-content-nav-menu'
                ));
            ?>
            <div class="pdexgroup__desktop-header-content-phone">
                <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/icons/flags/usa.png" alt=""></a>
                <a href="<?= home_url('inicio'); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/icons/flags/spain.png" alt=""></a>
            </div>
        </div>
    </header>
    <?php else: ?>
    <header class="pdexgroup__desktop-header">
        <div class="pdexgroup__desktop-header-content">
            <div class="pdexgroup__desktop-header-content-logo">
                <?= the_custom_logo(); ?>
            </div>
            <?php 
                wp_nav_menu(array(
                    'theme_location'    => 'menu_desktop',
                    'container'         => 'nav',
                    'container_class'   => 'pdexgroup__desktop-header-content-nav',
                    'menu_class'        => 'pdexgroup__desktop-header-content-nav-menu'
                ));
            ?>
            <div class="pdexgroup__desktop-header-content-phone">
                <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/icons/flags/usa.png" alt=""></a>
                <a href="<?= home_url('inicio'); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/icons/flags/spain.png" alt=""></a>
            </div>
        </div>
    </header>
    <?php endif; ?>
    <main class="pdexgroup">