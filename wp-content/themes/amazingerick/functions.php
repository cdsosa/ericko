<?php
///////////////////////////////////
// Scripts
///////////////////////////////////


///////////////////////////////////
// Excerpt
///////////////////////////////////

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

///////////////////////////////////
// Featured Image Support
///////////////////////////////////

add_theme_support( 'post-thumbnails' );

///////////////////////////////////
// WP Menu
///////////////////////////////////
register_nav_menus(array(
    'main_menu'  => 'Main Menu',
));
///////////////////////////////////
// CPT: Services
///////////////////////////////////
function setup_services () {
    //POST TYPE

    $servicesLabels = array(
        'name'                => __( 'Services', 'AmazingErick' ),
        'singular_name'       => __( 'Service', 'AmazingErick' )
    );

    $servicesOptions = array(
        'labels'              => $servicesLabels,
        'public'              => false,
        'publicly_queryable'  => false,
        'exclude_from_search' => false,
        'show_ui'             => true,
        'query_var'           => true,
        'menu_position'       => 20,
        'rewrite'             => array( 'slug' => 'services', 'with_front' => false ),
        'has_archive'         => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor')
    );
    register_post_type( 'services', $servicesOptions);
}
add_action('init', 'setup_services');

///////////////////////////////////
// CPT: Clients
///////////////////////////////////
function setup_clients () {
    //POST TYPE

    $clientsLabels = array(
        'name'                => __( 'Clients', 'AmazingErick' ),
        'singular_name'       => __( 'Client', 'AmazingErick' )
    );

    $clientsOptions = array(
        'labels'              => $clientsLabels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_ui'             => true,
        'query_var'           => true,
        'menu_position'       => 20,
        'rewrite'             => array( 'slug' => 'clients', 'with_front' => false ),
        'has_archive'         => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title','page','template')
    );
    register_post_type( 'clients', $clientsOptions);
}
add_action('init', 'setup_clients');

///////////////////////////////////
// CPT: Teams
///////////////////////////////////
function setup_team () {
    //POST TYPE

    $teamsLabels = array(
        'name'                => __( 'Teams', 'AmazingErick' ),
        'singular_name'       => __( 'Team', 'AmazingErick' )
    );

    $teamsOptions = array(
        'labels'              => $teamsLabels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_ui'             => true,
        'query_var'           => true,
        'menu_position'       => 20,
        'rewrite'             => array( 'slug' => 'team', 'with_front' => false ),
        'has_archive'         => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title','page','template', 'editor')
    );
    register_post_type( 'team', $teamsOptions);
}
add_action('init', 'setup_team');



///////////////////////////////////
// CPT: Portfolio
///////////////////////////////////
function setup_portfolio () {
    //POST TYPE

    $portfolioLabels = array(
        'name'                => __( 'Portfolio', 'AmazingErick' ),
        'singular_name'       => __( 'Portfolio Piece', 'AmazingErick' )
    );

    $portfolioOptions = array(
        'labels'              => $portfolioLabels,
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_ui'             => true,
        'query_var'           => true,
        'menu_position'       => 20,
        'rewrite'             => array( 'slug' => 'portfolio', 'with_front' => false ),
        'has_archive'         => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title','page', 'thumbnail')
    );
    register_post_type( 'portfolio', $portfolioOptions);
}
add_action('init', 'setup_portfolio');

///////////////////////////////////
// CPT: Quotes
///////////////////////////////////
function setup_quotes () {
    //POST TYPE

    $quotesLabels = array(
        'name'                => __( 'Quotes', 'AmazingErick' ),
        'singular_name'       => __( 'Quote', 'AmazingErick' )
    );

    $quotesOptions = array(
        'labels'              => $quotesLabels,
        'public'              => false,
        'publicly_queryable'  => false,
        'exclude_from_search' => false,
        'show_ui'             => true,
        'query_var'           => true,
        'menu_position'       => 20,
        'rewrite'             => array( 'slug' => 'quotes', 'with_front' => false ),
        'has_archive'         => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title')
    );
    register_post_type( 'quotes', $quotesOptions);
}
add_action('init', 'setup_quotes');


add_filter('admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction($content)
{
    return $content .= '<p>Thumbnail Dimensions <br />W: 400px x H: 400px</p>';
}


?>