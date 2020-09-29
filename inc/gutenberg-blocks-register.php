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
           // register slider-about block.
        acf_register_block_type(array(
            'name'              => 'slider-about',
            'title'             => __('Slider-about'),
            'description'       => __('Slider-about block.'),
            'render_template'   => '/partials/slider-about.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about-page-slider', 'custom-block' ),
        ));
 // register inner-page-banner block.
        acf_register_block_type(array(
            'name'              => 'inner-page-banner',
            'title'             => __('Inner page banner'),
            'description'       => __('inner page banner block.'),
            'render_template'   => '/partials/inner-page-banner.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'inner-page-banner', 'custom-block' ),
        ));
// register our-team block.
        acf_register_block_type(array(
            'name'              => 'our-team',
            'title'             => __('Our team'),
            'description'       => __('Our team block.'),
            'render_template'   => '/partials/our-team.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'our-team', 'custom-block' ),
        ));
// register about-summary block.
        acf_register_block_type(array(
            'name'              => 'about-summary',
            'title'             => __('About summary'),
            'description'       => __('About summary block.'),
            'render_template'   => '/partials/about-summary.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about-summary', 'custom-block' ),
        ));
// register advantages-contact block.
        acf_register_block_type(array(
            'name'              => 'advantages-contact',
            'title'             => __('Advantages contact'),
            'description'       => __('Advantages contact block.'),
            'render_template'   => '/partials/advantages-contact.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'advantages-contact', 'custom-block' ),
        ));
// register advantages-services block.
        acf_register_block_type(array(
            'name'              => 'advantages-services',
            'title'             => __('Advantages services'),
            'description'       => __('Advantages services block.'),
            'render_template'   => '/partials/advantages-services.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'advantages-services', 'custom-block' ),
        ));
        // register our-project-black block.
        acf_register_block_type(array(
            'name'              => 'our-project-black',
            'title'             => __('Our project black'),
            'description'       => __('Our project black block.'),
            'render_template'   => '/partials/our-projects-black.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'our-project-black', 'custom-block' ),
        ));
        // register our-project-black block.
        acf_register_block_type(array(
            'name'              => 'experience-section',
            'title'             => __('Experience section'),
            'description'       => __('Experience section block.'),
            'render_template'   => '/partials/experience-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'experience-section', 'custom-block' ),
        ));
        // register contact-section block.
        acf_register_block_type(array(
            'name'              => 'contact-section',
            'title'             => __('Contact section'),
            'description'       => __('Contact section block.'),
            'render_template'   => '/partials/contact-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact-section', 'custom-block' ),
        ));
        // register all-projects block.
        acf_register_block_type(array(
            'name'              => 'all-projects',
            'title'             => __('All projects'),
            'description'       => __('All projects block.'),
            'render_template'   => '/partials/all-projects.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'all-projects', 'custom-block' ),
        ));
    }
}