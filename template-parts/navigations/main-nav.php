<nav class="nav-bar">
    <div class="container">
        <div class="nav-bar__row">
            <a href="/" class="nav-bar__loggo-link">
                <img class="nav-bar__loggo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/loggo.png" alt="<?php echo get_bloginfo( 'name' ); ?>" width="200" height="55">
            </a>

            <?php if(has_nav_menu('main-menu')) : ?>
                <?php wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'nav-bar__menu',
                    'container' => false,
                    'depth' => 1,
                )); ?>
            <?php endif; ?>

            <?php if($cta_link = get_field('nav_cta', 'option')) : ?>
                <a href="<?php echo esc_url($cta_link['url']); ?>" class="button button--primary"><?php echo esc_html($cta_link['title']); ?></a>
            <?php endif; ?>

            <div class="nav-bar__mobile-menu">
                <button class="nav-bar__mobile-menu-button"><svg><use href="#menu"></use></svg></button>
            </div>
        </div>
    </div>
</nav>
