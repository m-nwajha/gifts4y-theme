<?php get_header(); ?>
<!--Content-->
<div class="container">
<div class="row">
<div class="col-12 text-center mt-5">
<h1>أفكار وهداية لك ولمن تحب</h1>
<p class="alert fs-3 mt-1"><a href="#">لتصفح قوائم هدايا مخصصة اضغط هنا</a></p>
</div>
</div>
<?php
$query_gift_lists = new WP_Query(
	array(
		'post_type' => 'gift_lists',
	)
);
?>
<?php if ( $query_gift_lists->have_posts() ) { ?>
<div class="card-group row justify-content-center pe-5 ps-5">
<?php while($query_gift_lists->have_posts()) : $query_gift_lists->the_post(); ?>  

<div class="col-6 col-md-4 col-lg-4 m-0 p-1 content">
<div class="card" style="border-radius: 7px; border: none;">
<div class="div-block-8">
<a href="<?php echo home_url( '/category' ); ?>/<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
<div>
<?php the_post_thumbnail(' image-5-classic '); ?></div>
</a></div>
<div class="card-body text-center">
<h5 class="card-title"> <a href="<?php echo home_url( '/category' ); ?>/<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>"><?php the_title(); ?></a></h5>
<p class="card-text"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?>

</p>
</div>
</div>
</div>

<?php endwhile; ?>
<?php
	}
	wp_reset_postdata();
?>

<div class="col-10 text-center m-2">
<a name="" id="loadMore" class="btn btn-secondary m-1" href="#" role="button"> مشاهدة المزيد <i class="fa fa-angle-left" aria-hidden="true"></i></a>
</div>
</div>
</div>


<?php get_footer(); ?>