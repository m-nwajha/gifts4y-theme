<?php get_header(); ?>
<!--Content-->
<div class="container">
<div class="row justify-content-center">
<?php
$query_gift_lists = new WP_Query(
	array(
		'post_type' => 'gift_lists',
		'posts_per_page' => '1',
		)
);
?>
<?php if ( $query_gift_lists->have_posts() ) { ?>
<div class="col-12 text-center mt-5">
<?php while($query_gift_lists->have_posts()) : $query_gift_lists->the_post(); ?>  
<h2><?php the_title(); ?></h2>
</div>

<div class="col-10 text-right mt-3">
<div><?php the_post_thumbnail(' image-6-classic '); ?></div>
<div class="card-body ">
<p class="card-text"><?php echo wp_trim_words( get_the_content(), 40); ?> </p>
</div>
</div>
</div>
</div>
<?php endwhile; ?>
<?php
	}
	wp_reset_postdata();
?>
<div style="background: #fff;">
<div class="container">
<?php if ( have_posts(
		array(
			'post_type' => '',
		)
) ) { 
while(have_posts()){ the_post(); ?>
<div class="row justify-content-center">
<div class="col-6 col-md-3 align-self-center  text-center">
<h5 class="card-title m-2"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
<div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(' image-6-classic '); ?></a> </div>
</div>
<div class="col-12 col-md-6 align-self-center ">
<div class="card-body">
<p class="card-text"><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>
<?php $search_text = get_the_excerpt();
$tags = array("<p>", "</p>");
$url_excerpt = str_replace($tags, "", $search_text); ?>
<div class="button-2 w-button mt-2"><a href="<?php echo $url_excerpt; ?>">صفحة المنتج على موقع علي اكسبريس</a></div>
</div>
</div>
<div class="col-10"><hr class="dropdown-divider"></div>
</div>
<?php } } ?>


</div>
</div>




<?php get_footer(); ?>
