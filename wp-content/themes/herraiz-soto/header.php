<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= bloginfo('template_url') ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>Herraiz Soto</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header__logo">
            <img src="<?= bloginfo('template_url') ?>/img/LOGO.png" alt="Logo">
        </div>
        <div class="header__menu">
            <nav>
                <?php
                wp_nav_menu( array( 
                    'theme_location' => 'menu-principal', 
                    'container_class' => 'menu-principal' ) ); 
                ?>
            </nav>
        </div>
    </header>
    
