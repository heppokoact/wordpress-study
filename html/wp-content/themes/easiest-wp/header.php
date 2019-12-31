<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easiest WP</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="page-header">
        <div class="header-area">
            <div class="panel-site-title">
                <p class="site-title"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></p>
                <p class="site-subtitle"><?php bloginfo('description'); ?></p>
            </div>

            <?php if (has_nav_menu('global')) { ?>
                <?php wp_nav_menu(array(
                        'theme_location' => 'global',
                        'menu_id' => 'global-menu',
                        'container' => 'nav',
                        'container_class' => 'global-nav',
                    )); ?>
            <?php } ?>

        </div>
    </header>