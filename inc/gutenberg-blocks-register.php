<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register slider block.
        acf_register_block_type(array(
            'name'              => 'welcome-slider',
            'title'             => __('Welcome slider'),
            'description'       => __('welcome-slider block.'),
            'render_template'   => '/partials/welcome-slider.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'slider', 'custom-block' ),
        ));

        // register about-company block.
        acf_register_block_type(array(
            'name'              => 'about-company',
            'title'             => __('About company'),
            'description'       => __('about-company block.'),
            'render_template'   => '/partials/about-company.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about', 'custom-block' ),
        ));

        // register call-us block.
        acf_register_block_type(array(
            'name'              => 'call-us',
            'title'             => __('Call us'),
            'description'       => __('call-us block.'),
            'render_template'   => '/partials/call-us.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Call-us', 'custom-block' ),
        ));
        // register logos block.
        acf_register_block_type(array(
            'name'              => 'logos',
            'title'             => __('Client logos'),
            'description'       => __('Client logos block.'),
            'render_template'   => '/partials/logos.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'logos', 'custom-block' ),
        ));
         // register our-project block.
        acf_register_block_type(array(
            'name'              => 'our-project',
            'title'             => __('Our projects'),
            'description'       => __('Our projects block.'),
            'render_template'   => '/partials/our-project.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'projects', 'custom-block' ),
        ));
         // register our-services block.
        acf_register_block_type(array(
            'name'              => 'our-services',
            'title'             => __('Our services'),
            'description'       => __('Our services block.'),
            'render_template'   => '/partials/our-services.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'services', 'custom-block' ),
        ));
         // register specialization block.
        acf_register_block_type(array(
            'name'              => 'specialization',
            'title'             => __('Specialization'),
            'description'       => __('Specialization block.'),
            'render_template'   => '/partials/specialization.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'specialization', 'custom-block' ),
        ));
          // register testimonials block.
        acf_register_block_type(array(
            'name'              => 'testimonials',
            'title'             => __('Testimonials'),
            'description'       => __('Testimonials block.'),
            'render_template'   => '/partials/testimonials.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonials', 'custom-block' ),
        ));

    }
}