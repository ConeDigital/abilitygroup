<?php
/**
 * The template for displaying the header
 *
 * @package cone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-58LRTK2');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo esc_url(home_url( '/wp-content/themes/abilitygroup/assets/images/ability-group.png' ) ); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
    <script src="https://use.typekit.net/udg1aih.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>

    <?php cone_og_meta_tags(); ?>

    <?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58LRTK2"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="load-overlay"></div>
<div class="header header-height">
    <a href="<?php echo home_url(); ?>" class="header-logo" title="XCounter">
        <img src="<?php echo esc_url(home_url( '/wp-content/themes/abilitygroup/assets/images/ability-group.png' ) ); ?>">
        <span>Abilty Group</span>
    </a>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu-right' ) ); ?>
    <i class="material-icons hamburger">menu</i>
</div>
<div class="mobile-menu">
    <i class="material-icons closeHamburger is-active">close</i>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'mobile-menu-content' ) ); ?>
    <div class="mobile-menu-info">
        <a href="mailto:info@abilitygroup.se">info@abilitygroup.se</a>
        <p>+46 73-544 88 88</p>
    </div>
</div>