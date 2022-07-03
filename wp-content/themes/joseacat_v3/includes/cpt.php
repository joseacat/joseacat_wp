<?php
// Aquí todos los CPTs


/**
 * Crea el CPT portfolio
 */
function crear_cpt_portfolio(){
    $labels = array(
        'name'           	=> _x( 'Portfolios', 'post type general name', 'wordpycat' ),
        'singular_name'  	=> _x( 'Portfolio', 'post type singular name', 'wordpycat' ),
        'menu_name'      	=> _x( 'Portfolio', 'admin menu', 'wordpycat' ),
        'name_admin_bar' 	=> _x( 'Portfolio', 'add new on admin bar', 'wordpycat' ),
        'add_new'        	=> _x( 'Añadir portfolio', 'cheque_regalo', 'wordpycat' ),
        'add_new_item'   	=> __( 'Añadir nuevo portfolio', 'wordpycat' ),
        'new_item'       	=> __( 'Nuevo portfolio', 'wordpycat' ),
        'edit_item'      	=> __( 'Editar portfolio', 'wordpycat' ),
        'view_item'      	=> __( 'Ver portfolio', 'wordpycat' ),
        'all_items'      	=> __( 'Todos los portfolios', 'wordpycat' ),
        'search_items'   	=> __( 'Buscar portfolio', 'wordpycat' ),
        'parent_item_colon'  => __( 'Padre portfolio:', 'wordpycat' ),
        'not_found'      	=> __( 'No se han encontrado portfolio', 'wordpycat' ),
        'not_found_in_trash' => __( 'Papelera vacía', 'wordpycat' )
    );
    $args = array(
        'labels'         	=> $labels,
        'description'    	=> __( 'Portfolio.', 'wordpycat' ),
        'public'         	=> true,
        'publicly_queryable' => true,
        'show_ui'        	=> true,
        'show_in_menu'   	=> true,
        'query_var'      	=> true,
        'rewrite'        	=> array( 'slug' => 'portfolio' ),
        'capability_type'	=> 'post',
        'has_archive'    	=> true,
        'hierarchical'   	=> false,
        'menu_position'  	=> null,
        'supports'       	=> array( 'title', 'thumbnail', 'editor','page-attributes' ),
        'menu_position'  	=> 4,
        'menu_icon'       => 'dashicons-universal-access',
        'show_in_rest'    => true,
        'rest_base'       => 'portfolio',
    );
    register_post_type( 'portfolio', $args );
  }
  add_action( 'init', 'crear_cpt_portfolio');
  
  
  
  /**
   * Registrar un nuevo tipo de post: Cliente
   */
  function registro_tipo_cliente() {
      $labels = array(
          'name'           	=> _x( 'Clientes', 'post type general name', 'joseacat' ),
          'singular_name'  	=> _x( 'Cliente', 'post type singular name', 'joseacat' ),
          'menu_name'      	=> _x( 'Clientes', 'admin menu', 'joseacat' ),
          'name_admin_bar' 	=> _x( 'Cliente', 'add new on admin bar', 'joseacat' ),
          'add_new'        	=> _x( 'Añadir nuevo', 'book', 'joseacat' ),
          'add_new_item'   	=> __( 'Añadir nuevo cliente', 'joseacat' ),
          'new_item'       	=> __( 'Nuevo cliente', 'joseacat' ),
          'edit_item'      	=> __( 'Editar cliente', 'joseacat' ),
          'view_item'      	=> __( 'Ver cliente', 'joseacat' ),
          'all_items'      	=> __( 'Todos los clientes', 'joseacat' ),
          'search_items'   	=> __( 'Buscar clientes', 'joseacat' ),
          'parent_item_colon'  => __( 'Cliente padre:', 'joseacat' ),
          'not_found'      	=> __( 'No se han encontrado clientes.', 'joseacat' ),
          'not_found_in_trash' => __( 'No hay clientes en la papelera.', 'joseacat' )
      );
  
  
      $args = array(
          'labels'         	=> $labels,
          'description'    	=> __( 'Descripción.', 'joseacat' ),
          'public'         	=> true,
          'publicly_queryable' => true,
          'show_ui'        	=> true,
          'show_in_menu'   	=> true,
          'query_var'      	=> true,
          'rewrite'        	=> array( 'slug' => 'cliente' ),
          'capability_type'	=> 'post',
          'has_archive'    	=> false,
          'hierarchical'   	=> false,
          'menu_position'  	=> 5,
          'menu_icon'       => 'dashicons-desktop',
          'supports'       	=> array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
          'show_in_rest'    => true,
          'rest_base'       => 'cliente',
      );
  
      register_post_type( 'cliente', $args );
      flush_rewrite_rules();
  }
  add_action( 'init', 'registro_tipo_cliente' );