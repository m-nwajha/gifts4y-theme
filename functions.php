<?php
// Custom Panel
//

require_once (TEMPLATEPATH . '/includes/category_thumb.php');
require_once (TEMPLATEPATH . '/includes/gift_lists.php');




//
// Custom logo.
$logo_width  = 120;
$logo_height = 90;

// If the retina setting is active, double the recommended width and height.
if ( get_theme_mod( 'retina_logo', false ) ) {
    $logo_width  = floor( $logo_width * 2 );
    $logo_height = floor( $logo_height * 2 );
}

add_theme_support(
    'custom-logo',
    array(
        'height'      => $logo_height,
        'width'       => $logo_width,
        'flex-height' => true,
        'flex-width'  => true,
    )
);


if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'mainmenu'	=> 'القائمة الرئيسية',
		  'so_menu'	=> 'مواقع التواصل الاجتماعي',
		  'shortlinks'	=> 'روابط فوتر 2',
		)
	);
}


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 825, 510, true );


// Custom Thumbnail
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches[1][0];

	if(empty($first_img)) {
	$first_img = "http://placehold.it/370x400/FAFAFA/333333&text=THUMBNAIL";
	}
	return $first_img;
}


function get_my_thumbnail_me($post_id){
	 echo '<img src="';
	 echo catch_that_image();
	 echo '" alt="" />';
}


?>







