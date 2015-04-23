<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="陈自新,Java,Flash,JavaScript,Python,计算机,软件,网络,硬件,数码" />
        <meta name="description" content="陈自新的个人博客,关注广告优化.从事Java,Flash,JavaScript,Python研发,分享计算机软件和项目管理经验,记录我在北京的工作,读书和生活." />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <!-- third-generation iPad with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/static/img/favicon144.png">
        <!-- iPhone with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/static/img/favicon114.png">
        <!-- first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/static/img/favicon72.png">
        <!-- non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="/static/img/favicon57.png">
 
        <!-- basic favicon -->
        <link rel="shortcut icon" href="/static/img/favicon.png">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( ); ?>>
        <div class="container">
            <div class="header row" id="header" role="banner">
                <header>
                    <div class="site-branding">
                        <h1 id="site-title">
                            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                        </h1>
                        <h2 id="site-description"><!--君子--><?php bloginfo('description'); ?></h2>
                    </div>
                </header>

                <div class="navi-wrap">
                        <?php $romangie_defaults = array(
                            'theme_location' => 'header-menu',
                            'container' => 'ol',
                            'menu_class' => 'flexnav'
                            );
                        
                        wp_nav_menu($romangie_defaults); ?>
                </div> <!-- /navi-wrap -->
                <br class="clear" />
            </div> <!-- /header -->
