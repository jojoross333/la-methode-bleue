<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header_content">
            <div class="logo">
                <a href="<?php echo home_url( '/' ); ?>" aria-label="page d'accueil">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_Methode_Bleue.png" alt="Logo">
                </a>
            </div>
        </div>
            
        <nav class="main-nav">
            <?php wp_nav_menu(array('theme_location' => 'header')); ?>
        </nav>
    </header>
</body>