<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="angular-shape">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="wpo-site-header">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9 col-sm-12 col-12">
                            <div class="contact-intro mt-2">
                                <ul>
                                    <li class="update"><span><?php echo esc_html( get_theme_mod('header_topabar_button_text')); ?></span></li>
                                    <!-- <li>Betting against meme stocks could get you seriously burned</li> -->
                                    <div class="marquee-container mt-3">
                                        <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                                            <?php
                                            // Query to retrieve recent blog posts
                                            $args = array(
                                                'post_type'      => 'post',
                                                'posts_per_page' => 10, // Adjust the number of posts to display
                                                'order'          => 'DESC',
                                            );

                                            $query = new WP_Query($args);

                                            // Loop through posts
                                            while ($query->have_posts()) : $query->the_post();
                                                echo '<span class="marquee-item "><i class="ti-star"></i><i class="ti-star last_child_icon"></i>' . get_the_title() . '</span>';
                                            endwhile;

                                            // Reset post data
                                            wp_reset_postdata();
                                            ?>
                                        </marquee>
                                    </div>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-3 col-sm-12 col-12">
                            <div class="contact-info mt-2">
                                <ul>
                                    <?php
                                        if(get_theme_mod('header_topabar_social_fb_Checkbox')){
                                            ?>
                                            <li><a href="<?php echo esc_url(get_theme_mod('header_topabar_social_fb_url')); ?>" target="_blank"><i class="ti-facebook"></i></a></li>
                                            <?php
                                        }
                                        if(get_theme_mod('header_topabar_social_tw_Checkbox')){
                                            ?>
                                            <li><a href="<?php echo esc_url(get_theme_mod('header_topabar_social_tw_url')); ?>" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                            <?php
                                        }
                                        if(get_theme_mod('header_topabar_social_in_Checkbox')){
                                            ?>
                                            <li><a href="<?php echo esc_url(get_theme_mod('header_topabar_social_in_url')); ?>" target="_blank"><i class="ti-instagram"></i></a></li>
                                            <?php
                                        }
                                        if(get_theme_mod('header_topabar_social_google_Checkbox')){
                                            ?>
                                            <li><a href="<?php echo esc_url(get_theme_mod('header_topabar_social_google_url')); ?>" target="_blank"><i class="ti-google"></i></a></li>
                                            <?php
                                        }
                                    ?>
                                   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                            <div class="mobail-menu">
                                <button type="button" class="navbar-toggler open-btn">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first-angle"></span>
                                    <span class="icon-bar middle-angle"></span>
                                    <span class="icon-bar last-angle"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="navbar-header">
                                <?php if (has_custom_logo('custom-logo')){
                                    ?> <a class="navbar-brand"><?php the_custom_logo(); ?></a> <?php
                                    } else{ 
                                    ?><a href="<?php echo get_home_url(); ?>" class="text-logo"><?php bloginfo(); ?></a><?php
                                } ?>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-1 col-1">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'Primary_Menu',
                                        'container' => '',
                                        'menu_class' => 'nav navbar-nav mb-2 mb-lg-0',
                                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                        'items_wrap' => '<ul id="%1$s" class="  %2$s">%3$s</ul>',
                                        'depth' => 2,
                                        'walker' => new walker_nav_menu()
                                    ));
                                ?>
                            </div><!-- end of nav-collapse -->
                        </div>
                        <div class="col-lg-2 col-md-2 col-2">
                            <div class="header-right">
                                <div class="shopping-cart">
       
                                </div>


                                <div class="header-search-form-wrapper">
                                    <div class="cart-search-contact">
                                        <button class="search-toggle-btn">
                                            <i class="fi flaticon-magnifiying-glass"></i>
                                        </button>
                                        <div class="header-search-form">
                                            <form role="search" method="get" action="<?php echo esc_url (home_url( '/' )) ?>">
                                                <div>
                                                    <input type="search" class="form-control" placeholder="<?php echo esc_attr( 'Search here...', 'placeholder' ) ?>" value="<?php the_search_query(); ?>" name="s">
                                                        
                                                    <button type="submit" value="<?php echo esc_attr( 'Search', 'submit button' ) ?>"><i class="fi flaticon-magnifiying-glass"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="header-right-menu-wrapper">
                                    <div class="header-right-menu">
                                        <div class="right-menu-toggle-btn">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                        <div class="header-right-menu-wrap">
                                            <button class="right-menu-close"><i class="ti-close"></i></button>
                                                <a href="<?php echo get_home_url(); ?>" class="text-logo text-white"><?php bloginfo(); ?></a>
                                            <div class="header-right-sec">
                                                <div class="project-widget widget mt-3">
                                                    <h3><?php echo esc_html( get_theme_mod('offcanvas_contact_post_title_customizer') ); ?></h3>
                                                    <div class="posts">
                                                        <?php
                                                    $args = array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => get_theme_mod('offcanvas_post_per_customizer'),
                                                        );
                                                    $query = new WP_Query( $args );
                                                    
                                                    if ($query-> have_posts() ) : 
                                                        while($query-> have_posts()  ) : $query-> the_post();
                                                        ?>

                                                        <div class="post">
                                                            <div class="img-holder">
                                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                            </div>
                                                            <div class="details">
                                                                <span class="date"><?php the_date(); ?> </span>
                                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                            </div>
                                                        </div>
                                                        <?php endwhile; else: _e('No post found','blogpress') ;
                                                        endif; 
                                                        wp_reset_postdata();
                                                    ?>
                                                    </div>
                                                </div>
                                                <div class="widget wpo-contact-widget">
                                                    <div class="widget-title">
                                                        <h3><?php echo esc_html( get_theme_mod('offcanvas_contact_title_customizer') ); ?></h3>
                                                    </div>
                                                    <div class="contact-ft">
                                                        <?php echo esc_html(get_theme_mod('offcanvas_header_customizer')); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->