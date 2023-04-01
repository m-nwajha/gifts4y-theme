<?php get_header(); ?>
<?php
	require_once (TEMPLATEPATH . '/products.php');

if (is_singular('products')) {
	require_once (TEMPLATEPATH . '/products.php');
} else {
}
?>

<?php get_footer(); ?>