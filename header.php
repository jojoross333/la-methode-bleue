<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>

    <!-- Ajouter le fichier CSS de AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Ajoutez le lien vers le CSS de AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

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