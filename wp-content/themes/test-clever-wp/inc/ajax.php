<?php

function getPosts( $type = 'posts', $taxonomyId = -1, $page = -1, $count = -1, $exclude = -1 ) {

	$args = array (
		'post_type'  => $type,
		'paged' => $page,
		'posts_per_page' => $count,
		'fields' => 'ids',
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'suppress_filters' => true
	);

	if ( $taxonomyId !== -1 ){

		$taxQuery = array(
			array(
				'taxonomy' => 'places_type',
				'field' => 'term_id',
				'terms' => $taxonomyId,
				'operator' => 'IN'
			));

		$args['tax_query'] = $taxQuery;

	}

	if ($exclude !== -1) {
		$args['post__not_in'] = array($exclude);
	}

	return new WP_Query( $args );

}

function getSearchResult( $val ) {

	$args = array (
		'post_type'         => array( 'posts' ),
		'posts_per_page'    => -1,
		'orderby'           => 'date',
		'order'             => 'ASC',
		'post_status'       => 'publish',
		's'                 => $val
	);

	return new WP_Query( $args );
}

add_action('wp_ajax_get_search_result','get_search_result');
add_action('wp_ajax_nopriv_get_search_result', 'get_search_result');

//Ajax Search
function get_search_result() {

	$search_value = $_GET['search_value'];

	$posts = getSearchResult( $search_value );

	$result = [];

	foreach ($posts->posts as $post) {

		$postID = $post->ID;

		if ( get_post_status( $postID ) != 'publish' ){
			continue;
		}

		$postItem = [];

		$postItem['title'] = get_the_title($postID);
		$postItem['link'] = get_permalink($postID);

		$result['result'][] = $postItem;

	}

	$out = json_encode($result);

	echo $out;
	exit;

}
