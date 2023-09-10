<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Montserrat:wght@400;500&family=Noto+Serif+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600;700&family=Montserrat:wght@400;500&family=Noto+Serif+JP:wght@400;500;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/isin-logo.JPG" type="image/x-icon">
    
</head>

<body>
    <header>
        <div class="inner">
            <div class="header-content">
                <a href="<?php echo esc_url( home_url('/') ); ?>" class="header-left">
                    <div class="header-logo"><img src="<?php echo get_template_directory_uri() ?>/img/isin-logo.JPG" alt="ISIN KOGYO Co.Ltd"></div>
                    <h1 class="header-title"><?php bloginfo('name'); ?></h1>
                </a>
                <nav class="header-center">
                    <?php
                        wp_nav_menu(
                            //.header-navを置き換えててPC用メニューを動的に表示する
                            array(
                                'depth' => 1,
                                'theme_location' => 'global', //グローバルグローバルメニューをここに表示すると指定
                                'container' => 'false',
                                'menu_class' => 'header-nav',
                            )
                        );
                    ?>
                </nav>
                <div class="header-right">
                    <a href="mailto:ishinkougyou0802&#64;gmail.com" class="header-email-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/header-email-image.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="drawer-icon">
        <div class="drawer-icon_bars">
            <div class="drawer-icon_bar1"></div>
            <div class="drawer-icon_bar2"></div>
            <div class="drawer-icon_bar3"></div>
        </div>
    </div>

    <div class="drawer-content">
        <div class="drawer-content_items">
            <?php
                //.drawer-navを置き換えて、スマホ用メニューを動的に表示する
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
                        'container' => 'nav',
                        'container_class' => 'drawer-nav',
                        'menu_class' => 'drawer-list',
                    )
                );
            ?>
        </div>
    </div>

    <div class="drawer-background"></div>
