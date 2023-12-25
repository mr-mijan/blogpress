<?php
function blogpress_customizer($wp_customize){

    $wp_customize->add_panel( 'blogpress_theme_options', 
    array(
        //'priority'       => 100,
        'title'            => __( 'Theme Options', 'blogpress' ),
        'priority'   => 10,
    ) 
    );

    // Header Button Text
    $wp_customize->add_section( 'header_topbar_customizer' , array(
        'title'      => __( 'Top Bar', 'blogpress' ),
        'panel'      => 'blogpress_theme_options',
    ) );

    $wp_customize->add_setting( 'header_topabar_button_text' , array(
        'default'    => __('Latest News' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('header_topabar_button_text_control', array(
        'label'      => __( 'Button Text', 'blogpress' ),
        'type'       => 'text',
        'description' => 'Change your button text from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_button_text',
    ) ) ;

    // Social Icon Facebook Checkbox (Facebook)
    $wp_customize->add_setting( 'header_topabar_social_fb_Checkbox' , array(
        'default'    => __('1' , 'blogpress'),
        // 

    ) );

    $wp_customize->add_control('header_topabar_social_fb_Checkbox_control', array(
        'label'      => __( 'Facebook Icon', 'blogpress' ),
        'type'       => 'checkbox',
        //'description' => 'Change your content from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_social_fb_Checkbox',
    ) ) ;

    // Icon Url
    $wp_customize->add_setting( 'header_topabar_social_fb_url' , array(
        'default'    => __('https://www.facebook.com/' , 'blogpress'),
        // 

    ) );

    $wp_customize->add_control('header_topabar_social_fb_url_control', array(
        // 'label'      => __( 'Social Url', 'blogpress' ),
        'type'       => 'text',
        //'description' => 'Change your content from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_social_fb_url',
    ) ) ;


    // Social Icon Twitter Checkbox (Twitter)
    $wp_customize->add_setting( 'header_topabar_social_tw_Checkbox' , array(
        'default'    => __('1' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('header_topabar_social_tw_Checkbox_control', array(
        'label'      => __( 'Twitter Icon', 'blogpress' ),
        'type'       => 'checkbox',
        //'description' => 'Change your content from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_social_tw_Checkbox',
    ) ) ;

    // Icon Url
    $wp_customize->add_setting( 'header_topabar_social_tw_url' , array(
        'default'    => __('https://www.twitter.com/' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('header_topabar_social_tw_url_control', array(
        // 'label'      => __( 'Social Url', 'blogpress' ),
        'type'       => 'text',
        //'description' => 'Change your content from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_social_tw_url',
    ) ) ;
    
    // Social Icon Instgram Checkbox (Instgram)
    $wp_customize->add_setting( 'header_topabar_social_in_Checkbox' , array(
        'default'    => __('1' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('header_topabar_social_in_Checkbox_control', array(
        'label'      => __( 'Instagram Icon', 'blogpress' ),
        'type'       => 'checkbox',
        //'description' => 'Change your content from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_social_in_Checkbox',
    ) ) ;

    // Icon Url
    $wp_customize->add_setting( 'header_topabar_social_in_url' , array(
        'default'    => __('https://www.instagram.com/' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('header_topabar_social_in_url_control', array(
        // 'label'      => __( 'Social Url', 'blogpress' ),
        'type'       => 'text',
        //'description' => 'Change your content from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_social_in_url',
    ) ) ;

    // Social Icon Google Checkbox (Google)
    $wp_customize->add_setting( 'header_topabar_social_google_Checkbox' , array(
        'default'    => __('1' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('header_topabar_social_google_Checkbox_control', array(
        'label'      => __( 'Google Icon', 'blogpress' ),
        'type'       => 'checkbox',
        //'description' => 'Change your content from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_social_google_Checkbox',
    ) ) ;

    // Icon Url
    $wp_customize->add_setting( 'header_topabar_social_google_url' , array(
        'default'    => __('https://www.google.com/' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('header_topabar_social_google_url_control', array(
        // 'label'      => __( 'Social Url', 'blogpress' ),
        'type'       => 'text',
        //'description' => 'Change your content from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_topabar_social_google_url',
    ) ) ;
    





    //=========================================================//

    // Page Header Images
    $wp_customize->add_section( 'page_header_img_customizer' , array(
        'title'      => __( 'Page Header', 'blogpress' ),
        'panel'      => 'blogpress_theme_options',
    ) );

    $wp_customize->add_setting( 'page_header_customizer' , array(
        'default'    => get_template_directory_uri() .'/assets/images/page-title.jpg',
        

    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'page_header_customizer_crt', array(
        'label'      => __( 'Page Header Image', 'blogpress' ),
        'description' => 'Upload your page image form here',
        'section'    => 'page_header_img_customizer',
        'settings'   => 'page_header_customizer',
    ) ) );


    //=========================================================//

    // Off Canvas Contact Info

    $wp_customize->add_section( 'offcanvas_section' , array(
        'title'      => __( 'Off Canvas Section', 'blogpress' ),
        'panel'      => 'blogpress_theme_options',
    ) );
    // Post Title
    $wp_customize->add_setting( 'offcanvas_contact_post_title_customizer' , array(
        'default'    => __('Out Latest News' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('offcanvas_contact_post_title_customizer_control', array(
        'label'      => __( 'Post Title', 'blogpress' ),
        'type'         => 'text',
        'description' => 'Change your contact info text from here',
        'section'    => 'offcanvas_section',
        'settings'   => 'offcanvas_contact_post_title_customizer',
    ) ) ;;

    // Post per page
    $wp_customize->add_setting( 'offcanvas_post_per_customizer' , array(
        'default'    => __('3' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('ooffcanvas_post_per_customizer_control', array(
        'label'      => __( 'Post Limit', 'blogpress' ),
        'type'         => 'text',
        'description' => 'Change your contact info text from here',
        'section'    => 'offcanvas_section',
        'settings'   => 'offcanvas_post_per_customizer',
    ) ) ;;

    // Contact Section Title
    $wp_customize->add_setting( 'offcanvas_contact_title_customizer' , array(
        'default'    => __('Contact Us' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('offcanvas_contact_title_customizer_control', array(
        'label'      => __( 'Title', 'blogpress' ),
        'type'         => 'text',
        'description' => 'Change your contact info text from here',
        'section'    => 'offcanvas_section',
        'settings'   => 'offcanvas_contact_title_customizer',
    ) ) ;;

    // Contact Text area

    $wp_customize->add_setting( 'offcanvas_header_customizer' , array(
        'default'    => __('Content' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('offcanvas_header_customizer_control', array(
        'label'      => __( 'Information', 'blogpress' ),
        'type'         => 'textarea',
        'description' => 'Change your contact info text from here',
        'section'    => 'offcanvas_section',
        'settings'   => 'offcanvas_header_customizer',
    ) ) ;;
//=================================================================//









//=================================================================//

    // Footer
    $wp_customize->add_section( 'footer_customizer' , array(
        'title'      => __( 'Footer', 'blogpress' ),
        'panel'      => 'blogpress_theme_options',
    ) );

    // Copyright Text
    $wp_customize->add_setting( 'footer_copyright' , array(
        'default'    => __('Copyright & Design By Flexitheme - 2023' , 'blogpress'),
        

    ) );

    $wp_customize->add_control('footer_copyrigt_control', array(
        'label'      => __( 'Copyright Text', 'blogpress' ),
        'type'         => 'textarea',
        'description' => 'Change your copyright text from here',
        'section'    => 'footer_customizer',
        'settings'   => 'footer_copyright',
    ) ) ;

}
add_action('customize_register', 'blogpress_customizer' );
