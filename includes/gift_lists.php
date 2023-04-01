<?php

function gift_lists_custom_post() {
	$labels = array(
		'name'               => _x( 'قوائم الهدايا', 'post type general name' ),
		'singular_name'      => _x( 'قوائم الهدايا', 'post type singular name' ),
		'add_new'            => _x( 'أضف جديد', 'gift_lists' ),
		'add_new_item'       => __( 'أضف  قائمة هدايا جديدة' ),
		'edit_item'          => __( 'تعديل  قائمة هدايا' ),
		'new_item'           => __( ' قائمة هدايا جديدة' ),
		'all_items'          => __( 'كل قوائم الهدايا' ),
		'view_item'          => __( 'عرض قوائم الهدايا' ),
		'search_items'       => __( 'البحث في قوائم الهدايا' ),
		'not_found'          => __( 'لا يوجد  قائمة هدايا' ),
		'not_found_in_trash' => __( 'لا يوجد قوائم الهدايا في سلة المهملات' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'قوائم الهدايا'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => '',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'thumbnail','editor','excerpt' ),
		'taxonomies'    => array( 'category' ),
		'has_archive'   => true,
		'exclude_from_search'   => false,
		'show_in_menu'   => true,
		'show_in_nav_menus'   => false
	);
	register_post_type( 'gift_lists', $args );	
}
add_action( 'init', 'gift_lists_custom_post' );

function gift_lists_updated_messages( $messages ) {
	global $post, $post_ID;
	$messages['gift_lists'] = array(
		0 => '', 
		1 => sprintf( __('تم التحديث. <a href="%s">عرض  قائمة الهدايا</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('تم تحديث العنصر.'),
		3 => __('تم حذف العنصر.'),
		4 => __('تم تحديث  قائمة الهدايا.'),
		5 => isset($_GET['revision']) ? sprintf( __('تم استعادة  قائمة الهدايا، من %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('تم النشر. <a href="%s">عرض  قائمة الهدايا</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('تم حفظ  قائمة الهدايا.'),
		8 => sprintf( __('تم ارسال  قائمة الهدايا. <a target="_blank" href="%s">عرض  قائمة الهدايا</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('تم تأريخ  قائمة الهدايا للنشر: <strong>%1$s</strong>. <a target="_blank" href="%2$s">عرض  قائمة الهدايا</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('تم تحديث  قائمة الهدايا كمسوده. <a target="_blank" href="%s">عرض  قائمة الهدايا</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);
	return $messages;
}
add_filter( 'gift_lists_post_updated_messages', 'gift_lists_updated_messages' );

?>