<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


    <div class="brand" id="big_title_home"><?php echo get_theme_mod('fuzzy_big_title'); ?></div>
    <div class="sub-title" id="sub_title"><?php echo get_theme_mod('fuzzy_set-sub-title'); ?></div>
    <div class="address-bar">3481 Melrose Place | <span id="e-mail"><?php echo get_theme_mod('fuzzy_email_adress'); ?></span> | <span id="phoneNo">123.456.7890</span></div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html"><?php echo get_option('current_theme'); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

               
                <?php /* Primary navigation */
                    wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'depth' => 0,
                    'container' =>true,
                    'menu_id' => 'menu-nav-menu',
                    'menu_class' => 'nav navbar-nav',
                    //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker())
                    );
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
