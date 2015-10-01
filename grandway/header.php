<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <title><?php wp_title(); ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <meta content="<?php bloginfo('description'); ?>" name="description">
        <?php if (!function_exists('has_site_icon') || !has_site_icon()) echo PhoenixTeam_Utils::favicons(); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <div class="wrapper<?php echo PhoenixTeam_Utils::template_layout(); ?>">
        <header>
            <div class="top_line">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 pull-left"><?php echo PhoenixTeam_Utils::show_rss_feed(); ?></div>
                        <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                            <ul class="social-links">
                                <?php echo PhoenixTeam_Utils::show_top_socials(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="page_head">
            <div id="nav-container" class="nav-container" style="height: auto;">
                <nav role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 pull-left">
                                <div class="logo">
                                    <a href="/"><?php echo PhoenixTeam_Utils::show_logo(); ?></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-6 pull-right">
                                <div class="menu phoenixteam-menu-wrapper">
                                    <?php if (PhoenixTeam_Utils::dep_exists('megamenu')) : ?>
                                        <?php PhoenixTeam_Utils::create_nav('header-menu'); ?>
                                    <?php else : ?>
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
                                        <div class="navbar-collapse collapse">
                                            <?php PhoenixTeam_Utils::create_nav('header-menu', 3, 'menu', null, new PhoenixTeam_Navmenu_Walker()); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
