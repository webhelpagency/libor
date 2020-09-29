<?php
add_action('init', 'init_new_custom_post_type');
function init_new_custom_post_type(){
    register_post_type('services', array(
        'labels'             => array(
            'name'               => 'services',
            'singular_name'      => 'Service',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new service',
            'edit_item'          => 'Edit service',
            'new_item'           => 'New service',
            'view_item'          => 'View service',
            'search_items'       => 'Search service',
            'not_found'          =>  'Not found',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Services'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 23,
        'show_in_rest' => true,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
    register_post_type('projects', array(
        'labels'             => array(
            'name'               => 'projects',
            'singular_name'      => 'Project',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new project',
            'edit_item'          => 'Edit project',
            'new_item'           => 'New project',
            'view_item'          => 'View project',
            'search_items'       => 'Search project',
            'not_found'          =>  'Not found',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Projects'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 23,
        'show_in_rest' => true,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
    register_post_type('testimonials', array(
        'labels'             => array(
            'name'               => 'testimonials',
            'singular_name'      => 'Testimonial',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new testimonial',
            'edit_item'          => 'Edit testimonial',
            'new_item'           => 'New testimonial',
            'view_item'          => 'View testimonial',
            'search_items'       => 'Search testimonial',
            'not_found'          =>  'Not found',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Testimonials'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 27,
        'show_in_rest' => false,
        'supports'           => array('title','editor','thumbnail')
    ) );

    register_taxonomy( 'tax_services', [ 'services' ], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'service_types',
            'singular_name'     => 'Service type',
            'search_items'      => 'Search',
            'all_items'         => 'All',
            'view_item '        => 'View',
            'parent_item'       => 'Parent',
            'parent_item_colon' => 'Parent:',
            'edit_item'         => 'Edit',
            'update_item'       => 'Update',
            'add_new_item'      => 'Add New',
            'new_item_name'     => 'New service type Name',
            'menu_name'         => 'Service types',
        ],
        'description'           => '', // описание таксономии
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
        'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
        'show_in_rest'          => null, // добавить в REST API
        'rest_base'             => null, // $taxonomy
    ] );
    register_taxonomy( 'tax_projects', [ 'projects' ], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'project_types',
            'singular_name'     => 'Project type',
            'search_items'      => 'Search',
            'all_items'         => 'All',
            'view_item '        => 'View',
            'parent_item'       => 'Parent',
            'parent_item_colon' => 'Parent:',
            'edit_item'         => 'Edit',
            'update_item'       => 'Update',
            'add_new_item'      => 'Add New',
            'new_item_name'     => 'New project type Name',
            'menu_name'         => 'Project types',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'capabilities'          => array(),
        'meta_box_cb'           => null,
        'show_admin_column'     => true,
        'show_in_rest'          => null,
        'rest_base'             => null,
    ] );
}


