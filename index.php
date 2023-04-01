<?php
get_header(); ?>
<!--Content-->
<div class="container">
<div class="row">
<div class="col-12 text-center mt-5">
<h1>أفكار وهداية لك ولمن تحب</h1>
<p class="alert fs-3 mt-1 mb-2"><a href="#">لتصفح قوائم هدايا مخصصة اضغط هنا</a></p>
</div>
</div>
<?php
$query_Products = new WP_Query(
	array(
		'post_type' => '',
	)
);
?>
<?php if ( $query_Products->have_posts() ) { ?>
<div class="card-group row justify-content-center">
<?php while($query_Products->have_posts()) : $query_Products->the_post(); ?>  
<div class="col-6 col-md-4 col-lg-3 m-0 p-1 content">
<div class="card" style="border-radius: 7px;">
<div class="div-block-5">
<a href="<?php the_permalink(); ?>">
<div>
<?php the_post_thumbnail(' image-3-classic '); ?></div>
<div class="title-classic"><?php the_title(); ?></div></a></div>
<div class="card-body">
<p class="card-text text-classic"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
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

<?php
get_footer(); ?>