<?php
function site_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js', [], FALSE, TRUE);
	wp_enqueue_script('jquery');

	wp_enqueue_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', [], FALSE, TRUE);

	// Main
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), null, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), null, true );
}
add_action('wp_enqueue_scripts', 'site_scripts');


function enqueue_theme_css() {
    wp_enqueue_style('default', get_template_directory_uri() . '/dist/css/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_css');

/*
 * jk - Add a Global Settings page for address, phone, fax, and 'Work With Us' content sections
 *
 * All the API functions can be used with the “Options Page’s” fields.
 * However, a second parameter is required to target the options page.
 * This is similar to passing through a $post_id to target a specific post object.
 * This example demonstrates how to load a value from an options page.
 * the_field('header_title', 'option');
 *
 */
if(function_exists('acf_add_options_page')) {
	acf_add_options_page([
		'page_title'	=> 'Global Settings',
		'menu_title' 	=> 'Global Settings',
		'menu_slug'		=> 'global-settings',
	]);
}

/*
 * jk - Register custom menus
 */
function jk_register_menus() {
	register_nav_menus([
		'header-primary' 	=> 'Header Primary Menu',
	]);
}
add_action('init', 'jk_register_menus');

/*
 * jk - Register custom post types
 */
function jk_create_post_types() {
	register_post_type('beginning-video', [
		'label' 	=> 'Beginning Videos',
		[
			'name' 			=> 'Beginning Videos',
			'singular_name' => 'Beginning Video',
		],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            =>  false,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies' 		 => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon' => 'dashicons-controls-play',
	]);
		register_post_type('intermediate-video', [
		'label' 	=> 'Intermediate Videos',
		[
			'name' 			=> 'Intermediate Videos',
			'singular_name' => 'Intermediate Video',
		],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            =>  false,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies' 		 => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon' => 'dashicons-controls-play',
	]);

	register_post_type('advanced-video', [
		'label' 	=> 'Advanced Videos',
		[
			'name' 			=> 'Intermediate Videos',
			'singular_name' => 'Advanced Video',
		],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            =>  false,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
		'menu_position'      => null,
		'taxonomies' 		 => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon' => 'dashicons-controls-play',
	]);


}
add_action('init', 'jk_create_post_types');

/*
 * jk - Register taxonomies
 */
function jk_create_taxonomies() {
	register_taxonomy('beginning-videos', 'beginning-video', [
		'label'			=> 'Beginning Video Terms',
		'labels'		=> [
			'name'			=> 'Beginning Video Terms',
			'singular_name'	=> 'Beginning Video Term',
		],
		'show_ui' 		=> TRUE,
		'hierarchical' 	=> TRUE,
		'public'		=> TRUE,
	]);

	register_taxonomy('intermediate-videos', 'intermediate-video', [
		'label'			=> 'Intermediate Video Terms',
		'labels'		=> [
			'name'			=> 'Intermediate Video Terms',
			'singular_name'	=> 'Intermediate Video Term',
		],
		'show_ui' 		=> TRUE,
		'hierarchical' 	=> TRUE,
		'public'		=> TRUE,
	]);
	register_taxonomy('advanced-videos', 'advanced-video', [
		'label'			=> 'Advanced Video Terms',
		'labels'		=> [
			'name'			=> 'Advanced Video Terms',
			'singular_name'	=> 'Advanced Video Term',
		],
		'show_ui' 		=> TRUE,
		'hierarchical' 	=> TRUE,
		'public'		=> TRUE,
	]);
}
add_action('init', 'jk_create_taxonomies');

/*
 * jk - Return most recently published posts
 */
function get_latest_posts($post_type, $num) {
	$posts = new WP_Query([
		'post_type' 		=> $post_type,
		'orderby'			=> 'date',
		'posts_per_page' 	=> $num,
	]);

	if(is_wp_error($posts)) {
		return NULL;
	}

	return $posts;
}

/*
 * jk - Return related posts based on terms
 */
function get_related_posts($post_id, $tax_name, $ppp, $post_type) {
	
	// get post terms
	$terms = wp_get_object_terms($post_id, $tax_name, ['fields' => 'ids']);

	// get posts with same terms that aren't the same post
	$posts = new WP_Query([
		'tax_query'	=> [[
				'taxonomy' => $tax_name,
				'field' => 'term_id',
				'terms' => $terms,
			]
		],
		'posts_per_page' 	=> $ppp,
		'post__not_in'		=> [$post_id],
		'post_type' 		=> $post_type,
	]);

	if(is_wp_error($posts)) {
		return NULL;
	}

	return $posts;
}

/*
 * jk - Return formatted post terms separated by commas
 */
function jk_get_post_terms($post_id, $tax_name) {
	// eg: Categories: Beginner, Expert
	$terms = wp_get_post_terms(
		$post_id,
		$tax_name,
		[
			'fields' => 'names',
		]
	);

	if(is_wp_error($terms)) {
		return NULL;
	}

	$terms = 'Categories: ' . implode(', ', $terms);

	return $terms;
}

/*
 * jk - Return next_post_link with css applied
 */
function post_link_attributes($output) {
	$class = 'bold red';

	$output = str_replace('<a href=', '<a class="' . $class .'" href=', $output);
	$output = str_replace('</a>', '&nbsp;&rarr;</a>', $output);

	return $output;
}
add_filter('previous_post_link', 'post_link_attributes');

/*
 * jk - Returns the first term ID of a post
 * or NULL if there isn't one
 */
function get_post_term_id($post_id, $tax_name) {
	$terms = get_the_terms($post_id, $tax_name);
	
	if(!empty($terms) && !is_wp_error($terms)) {
		foreach($terms as $term) {
			$term_ids[] = $term->term_id;
		}

		return $term_ids[0];
	}

	return NULL;
}

/*
 * jk - Return taxonomy term names or an empty array
 */
function get_taxonomy_term_names($taxonomy) {
	$terms = get_terms([
		'taxonomy'		=> $taxonomy,
		'hide_empty'	=> TRUE,
		'fields'		=> 'all',
	]);

	if(!empty($terms) && !is_wp_error($terms)) {
		return $terms;
	}

	return [];
}
