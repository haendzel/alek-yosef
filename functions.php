function zwp_add_menu() {
    register_nav_menu( 'navigation', 'Menu główne' );
}

add_action('init','zwp_add_menu');