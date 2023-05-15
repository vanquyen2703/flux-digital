<?php

// define
define('FLUX_DIR_ASSETS', get_stylesheet_directory_uri() . '/assets');
function flux_theme_enqueue_styles() {

   $parent_style = 'parent-style';

   wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
   );
   // vanquyen icon
   wp_enqueue_style(
	'vanquyen-icon',
		FLUX_DIR_ASSETS . '/css/vanquyen-icon.min.css', array(),wp_get_theme()->get('Version')
	);

	// style guide
	wp_enqueue_style(
		'style-guide',
		FLUX_DIR_ASSETS . '/css/style-guide.min.css',
		array(),
		wp_get_theme()->get('Version')
	);


	//home
	if (is_front_page() || is_single() || is_page()) {
		wp_enqueue_style(
			'homepage',
			FLUX_DIR_ASSETS . '/css/homepage.min.css',
			array(),
			wp_get_theme()->get('Version')
		);
		// Css Slick
		wp_enqueue_style(
			'flux-slick',
			FLUX_DIR_ASSETS . '/css/slick.min.css',
			array(),
			wp_get_theme()->get('Version')
		);
	}

	// Other page styles
	if (!is_front_page()) {
		wp_enqueue_style(
			'flux-other-page',
			FLUX_DIR_ASSETS . '/css/other-page.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
	
	//script
	wp_enqueue_script('jquery', FLUX_DIR_ASSETS .'/js/jquery.min.js');

	// Slick
	wp_enqueue_script('slick', FLUX_DIR_ASSETS .'/js/slick.min.js');

	// truevera js
	wp_enqueue_script('theme-js', FLUX_DIR_ASSETS .'/js/theme-function.min.js');

}
// Add SVG to allowed file uploads
function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );

add_action( 'wp_enqueue_scripts', 'flux_theme_enqueue_styles' );
?>


