<?php
if ( ! function_exists('wpn_testimonios') ) {

// Register Custom Post Type Testimonios
function wpn_testimonios() {

	$labels = array(
		'name'                  => _x( 'Testimonios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonios', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonios', 'text_domain' ),
		'archives'              => __( 'Archivo de testimonios', 'text_domain' ),
		'attributes'            => __( 'Atributos de testimonio', 'text_domain' ),
		'parent_item_colon'     => __( 'Testimonio padre', 'text_domain' ),
		'all_items'             => __( 'Todos los testimonios', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo testimonio', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nievo testimonio', 'text_domain' ),
		'edit_item'             => __( 'Editar testimonio', 'text_domain' ),
		'update_item'           => __( 'Actualizar testimonio', 'text_domain' ),
		'view_item'             => __( 'Ver testimonio', 'text_domain' ),
		'view_items'            => __( 'Ver testimonios', 'text_domain' ),
		'search_items'          => __( 'Buscar testimonios', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el libro', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en este libro', 'text_domain' ),
		'items_list'            => __( 'Listado de libros', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de libros', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro lista de libros', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonio', 'text_domain' ),
		'description'           => __( 'Entradas de testimonios', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','excerpt', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);

	register_post_type( 'testimonios', $args );

}

add_action( 'init', 'wpn_testimonios', 0 );

}

if ( ! function_exists('wpn_areas') ) {

// Register Custom Post Type Areas
function wpn_areas() {

	$labels = array(
		'name'                  => _x( 'Areas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Area', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Áreas', 'text_domain' ),
		'name_admin_bar'        => __( 'Áreas', 'text_domain' ),
		'archives'              => __( 'Archivo de Áreas', 'text_domain' ),
		'attributes'            => __( 'Atributos de Área', 'text_domain' ),
		'parent_item_colon'     => __( 'Área padre', 'text_domain' ),
		'all_items'             => __( 'Todas las Áreas', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo Área', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nieva Área', 'text_domain' ),
		'edit_item'             => __( 'Editar Área', 'text_domain' ),
		'update_item'           => __( 'Actualizar Área', 'text_domain' ),
		'view_item'             => __( 'Ver Área', 'text_domain' ),
		'view_items'            => __( 'Ver Área', 'text_domain' ),
		'search_items'          => __( 'Buscar Áreas', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Área', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en esta Área', 'text_domain' ),
		'items_list'            => __( 'Listado de Áreas', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de Áreas', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro lista de Áreas', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Area', 'text_domain' ),
		'description'           => __( 'Entradas de Areas', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Areas', $args );

}
add_action( 'init', 'wpn_areas', 0 );

}

if ( ! function_exists('wpn_aliados') ) {

// Register Custom Post Type
function wpn_aliados() {

	$labels = array(
		'name'                  => _x( 'Aliados', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Aliado', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Aliados', 'text_domain' ),
		'name_admin_bar'        => __( 'Aliados', 'text_domain' ),
		'archives'              => __( 'Archivo de aliados', 'text_domain' ),
		'attributes'            => __( 'Atributos de aliados', 'text_domain' ),
		'parent_item_colon'     => __( 'Aliado padre', 'text_domain' ),
		'all_items'             => __( 'Todos los aliados', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo aliado', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo aliado', 'text_domain' ),
		'edit_item'             => __( 'Editar aliado', 'text_domain' ),
		'update_item'           => __( 'Actualizar aliado', 'text_domain' ),
		'view_item'             => __( 'Ver aliado', 'text_domain' ),
		'view_items'            => __( 'Ver aliados', 'text_domain' ),
		'search_items'          => __( 'Buscar aliados', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Quitar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar dentro del aliado', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en este aliado', 'text_domain' ),
		'items_list'            => __( 'Listado de aliados', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de aliados', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de aliados', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Aliado', 'text_domain' ),
		'description'           => __( 'Entradas de aliados', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Aliados', $args );

}
add_action( 'init', 'wpn_aliados', 0 );

}




// Custom post types creation
function create_posttype() {

	 ////////////////////
	// POST TYPES
	///////////////////


	//Post Type Videos

	register_post_type( 'videos',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Videos' ),
	            'singular_name' => __('Video')
	        ),
	        'rewrite' => array('slug' => 'video'),
	        'supports' => array( 'title', 'thumbnail', 'custom-fields'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 6,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => true,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	//Post Type Galería

	register_post_type( 'items-galeria',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Item Galería' ),
	            'singular_name' => __('Item Galería')
	        ),
	        'rewrite' => array('slug' => 'item-galeria'),
	        'supports' => array( 'title', 'thumbnail', 'custom-fields', 'revisions'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 7,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => true,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	////////////////////
	// TAXONOMIAS
	///////////////////


	flush_rewrite_rules();
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
