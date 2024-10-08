<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" class="site-header container">
        <div class="navbar">
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <div class="site-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
                <p class="site-description"><?php bloginfo('description'); ?></p>
            </div><!-- .site-branding -->
            <nav id="site-navigation" class="main-navigation">
                <?php wp_nav_menu(array('menu' => 'primary')); ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->
    <?php wp_footer(); ?>
</body>
</html>
