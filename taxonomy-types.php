<?php
/**
 * @package WordPress
 *
 * The Template for displaying 'staff' custom post type by taxonomy
 *
 * @package WordPress
 * @subpackage agriflex
 * @since agriflex 1.0
 */


get_header(); ?>

	<div id="wrap">
	  	<div id="content" role="main">
	  	
	  		<h1 class="page-title"><?php
				printf( __( 'Staff: %s', 'agriflex' ), '<span>' . $wp_query->queried_object->name . '</span>' );
			?></h1>
	
			<?php
				$category_description = $wp_query->queried_object->description;
				if ( ! empty( $category_description ) )
					echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-staff.php and that will be used instead.
				 */
				query_posts( $query_string . '&posts_per_page=-1&meta_key=als_last-name&orderby=meta_value&order=ASC' ); 
				include( STAFF_PLUGIN_DIR_PATH . 'loop-staff.php' );
				?>	
	
	   </div><!-- #content -->
	
	</div><!-- #wrap -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

