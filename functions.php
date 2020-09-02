<?php
/**
 * functions.php
 * Ce fichier permet de définir les fonctionnalités de notre thème
 * 
 */

// activer la fonctionnalité 'image de mise en avant' (post thumbnail) pour notre thème
// écrivez ci-dessous le code permettant d'activer cette fonctionnalité 
add_theme_support('post-thumbnails');



// activer la gestion des widgets
// Rechercher: "wordpress register_sidebar" ou "wordpress add widget support" dans un moteur de recherche

/**
 * bigstars_sidebars
 * Déclaration de nos "sidebar".
 * Une sidebar" contient des widgets
 * Une fois qu'une sidebar (ou plus) est délcarée, on peut y ajouter des widgets
 * Direction le back-office sous le menu "Apparence -> widgets"
 */
function bigstars_sidebars() {

    // Déclaration d'une sidebar dont l'identifiant (id) est bigstars-principal
    register_sidebar([
        'name' => 'Principal',
        'id' => 'bigstars-principal',
        'description' => 'Ma sidebar principale',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',

    ]);

    // Déclaration d'une sidebar dont l'identifiant (id) est bigstars-secondaire
    register_sidebar([
        'name' => 'Secondaire',
        'id' => 'bigstars-secondaire',
        'description' => 'Ma sidebar secondaire',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',

    ]);

}

// add_action permet d'exécuter des fonction à un instant T du chargement de wordpress
// https://codex.wordpress.org/Plugin_API/Action_Reference
// Notre fonction bigstars_sidebars() sera exécutée au moment de l'initialisation des widgets
add_action('widgets_init', 'bigstars_sidebars');


function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Galaxies', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Galaxie', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Galaxie'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les glaxies'),
		'view_item'           => __( 'Voir les galaxies'),
		'add_new_item'        => __( 'Ajouter une nouvelle galaxie'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la galaxie'),
		'update_item'         => __( 'Modifier la galaxie'),
		'search_items'        => __( 'Rechercher une galaxie'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );
    
    // On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Galaxies'),
		'description'         => __( 'Tous sur les Galaxies'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-admin-site-alt',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'Galaxie'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'seriestv', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );
