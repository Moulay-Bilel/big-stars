<!DOCTYPE html>

<html lang='fr'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); // Le titre du blog ?></title>

    <?php wp_head(); ?>


    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

</head>
<body>
    <header>
        <img src="<?=bloginfo('template_url'); ?>/img/logo.png" />
        <h1><?php bloginfo('name'); // Le titre du blog ?></h1>
        <h2><?php bloginfo('description'); // Le titre du blog ?></h2>
        <div>
            <a href="<?php bloginfo('url'); // Le titre du blog ?>">Accueil</a> | Futur Menu
        </div>
    </header>
    
    <main>

