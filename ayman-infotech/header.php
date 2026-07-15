<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">
        <div class="site-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <p class="site-tagline" style="font-size: 0.8rem; margin: 0; color: #777;"><?php bloginfo( 'description' ); ?></p>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
            ) );
            ?>
        </nav>

        <div class="header-actions">
            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart-icon" title="<?php esc_attr_e( 'View your shopping cart', 'ayman-infotech' ); ?>">
                    <i class="fas fa-shopping-cart"></i>
                    <?php
                    $count = WC()->cart->get_cart_contents_count();
                    if ( $count > 0 ) {
                        ?>
                        <span class="cart-count"><?php echo esc_html( $count ); ?></span>
                        <?php
                    }
                    ?>
                </a>
            <?php endif; ?>
            <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="btn btn-outline">My Account</a>
        </div>
        
        <button id="mobile-menu-toggle" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<div id="content" class="site-content">
