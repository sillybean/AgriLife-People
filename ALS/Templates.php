<?php

class ALS_Templates {

	private static $instance;

	public function __construct() {

		add_filter( 'archive_template', array( $this, 'get_archive_template' ) );
		add_filter( 'search_template', array( $this, 'get_search_template' ) );
		add_filter( 'single_template', array( $this, 'get_single_template' ) );

	}

	public function get_archive_template( $archive_template ) {

		global $post;

		if ( is_post_type_archive( 'staff' ) ) {
			$archive_template = STAFF_PLUGIN_DIR_PATH . '/archive-staff.php';
		}

		return $archive_template;

	} 

	public function get_search_template( $search_template ) {

		global $post;

		if ( get_query_var( 'post_type' ) == 'staff' ) {
			$search_template = STAFF_PLUGIN_DIR_PATH . '/search-staff.php';
		}

		return $search_template;

	} 

	public function get_single_template( $single_template ) {

		global $post;

		if ( get_query_var( 'post_type' ) == 'staff' ) {
			$single_template = STAFF_PLUGIN_DIR_PATH . '/single-staff.php';
		}

		return $single_template;

	} 

}