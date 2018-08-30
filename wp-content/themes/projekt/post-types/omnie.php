<?php

/**
 * Registers the `omnie` post type.
 */
function omnie_init() {
	register_post_type( 'omnie', array(
		'labels'                => array(
			'name'                  => __( 'Omnies', 'cl' ),
			'singular_name'         => __( 'Omnie', 'cl' ),
			'all_items'             => __( 'All Omnies', 'cl' ),
			'archives'              => __( 'Omnie Archives', 'cl' ),
			'attributes'            => __( 'Omnie Attributes', 'cl' ),
			'insert_into_item'      => __( 'Insert into omnie', 'cl' ),
			'uploaded_to_this_item' => __( 'Uploaded to this omnie', 'cl' ),
			'featured_image'        => _x( 'Featured Image', 'omnie', 'cl' ),
			'set_featured_image'    => _x( 'Set featured image', 'omnie', 'cl' ),
			'remove_featured_image' => _x( 'Remove featured image', 'omnie', 'cl' ),
			'use_featured_image'    => _x( 'Use as featured image', 'omnie', 'cl' ),
			'filter_items_list'     => __( 'Filter omnies list', 'cl' ),
			'items_list_navigation' => __( 'Omnies list navigation', 'cl' ),
			'items_list'            => __( 'Omnies list', 'cl' ),
			'new_item'              => __( 'New Omnie', 'cl' ),
			'add_new'               => __( 'Add New', 'cl' ),
			'add_new_item'          => __( 'Add New Omnie', 'cl' ),
			'edit_item'             => __( 'Edit Omnie', 'cl' ),
			'view_item'             => __( 'View Omnie', 'cl' ),
			'view_items'            => __( 'View Omnies', 'cl' ),
			'search_items'          => __( 'Search omnies', 'cl' ),
			'not_found'             => __( 'No omnies found', 'cl' ),
			'not_found_in_trash'    => __( 'No omnies found in trash', 'cl' ),
			'parent_item_colon'     => __( 'Parent Omnie:', 'cl' ),
			'menu_name'             => __( 'Omnies', 'cl' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'omnie',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'omnie_init' );

/**
 * Sets the post updated messages for the `omnie` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `omnie` post type.
 */
function omnie_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['omnie'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Omnie updated. <a target="_blank" href="%s">View omnie</a>', 'cl' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'cl' ),
		3  => __( 'Custom field deleted.', 'cl' ),
		4  => __( 'Omnie updated.', 'cl' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Omnie restored to revision from %s', 'cl' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Omnie published. <a href="%s">View omnie</a>', 'cl' ), esc_url( $permalink ) ),
		7  => __( 'Omnie saved.', 'cl' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Omnie submitted. <a target="_blank" href="%s">Preview omnie</a>', 'cl' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Omnie scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview omnie</a>', 'cl' ),
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Omnie draft updated. <a target="_blank" href="%s">Preview omnie</a>', 'cl' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'omnie_updated_messages' );
