<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <link rel="apple-touch-icon" sizes="57x57" href="<?= DIRECT ?>favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= DIRECT ?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= DIRECT ?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= DIRECT ?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= DIRECT ?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= DIRECT ?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= DIRECT ?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= DIRECT ?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= DIRECT ?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= DIRECT ?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= DIRECT ?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= DIRECT ?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= DIRECT ?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= DIRECT ?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= DIRECT ?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php if ( is_front_page() ): ?>
        <title><?= get_bloginfo( 'name' ) .' - '. get_bloginfo( 'description' ); ?></title>
    <?php else:  ?>
        <title><?php wp_title(''); ?></title>
    <?php endif; ?>

    <?php wp_head();?>

</head>

<body data-action="<?= admin_url('admin-ajax.php'); ?>">

<!-- site__header -->
<header class="site-header">
    <div class="site-header__container">

        <div id="hamburger" class="hamburger"><span></span></div>
        <a class="logo" href="<?= home_url(); ?>"><img src="<?= DIRECT ?>img/logo.png" alt="logo"></a>
<?php $locations = get_nav_menu_locations();
    $menu_items = wp_get_nav_menu_items( $locations['menu'] ); ?>
        <nav id="menu" class="menu">
            <ul class="site-header__menu">
                <?php foreach ( (array) $menu_items as $key => $menu_item ):
                    if (get_the_title() === $menu_item->title) {
                        $active = 'is-active';
                    } else {
                        $active = '';
                    }
                    ?>
                <li class="<?= $active; ?>"><a href="<?= $menu_item->url; ?>"><?= $menu_item->title; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <a href="#" class="btn"><span>Contact Us</span></a>
        </nav>

    </div>
</header>
<!-- /site__header -->
