
<?php get_header(); ?>
<!--Content-->
<div class="container">
<div class="row justify-content-center">
<div class="col-12 text-center mt-5">
<h1>أفكار وهداية لك ولمن تحب</h1>
<p class="alert fs-3 mt-1 mb-2"><a href="<?php echo home_url( '/gift_idea_lists.php' ); ?>">لتصفح قوائم هدايا مخصصة اضغط هنا</a></p>
</div>
<?php if (have_posts()) : ?>
<div class="col-6 text-center">
<h3 class="alert alert-info"><a>نتائج البحث عن: <?php echo the_search_query(); ?></a></h3>
</div>
</div>


<div class="card-group row justify-content-center">
<?php while (have_posts()) : the_post(); ?>
<div class="col-6 col-md-4 col-lg-3 m-0 p-1">
<div class="card" style="border-radius: 7px;">
<div class="div-block-5">
<a href="<?php the_permalink(); ?>">
<div><?php the_post_thumbnail(' image-3-classic '); ?></div>
<div class="title-classic"><?php the_title(); ?></div></a></div>
</div>
</div>
</div>
<?php endwhile; ?>
</div>



<div class="container">
<?php else: ?>
<div class="row justify-content-center">
<div class="col-12 text-center mt-3">
<h3 class="text-danger"><a>لا يوجد محتوى لعملية البحث المطلوبة</a></h3>
<p class="alert alert-warning fs-4 mt-1 mb-2">
نعتذر لك، ولكن لابد ان ما تبحث عنه غير موجود بالموقع..</p>
</div>
<div class="col-5 text-center m-3">
<!--search-->
<form class="search d-flex" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
<input type="text" value="" name="s" id="s" placeholder="كلمة البحث..." aria-label="Search">
<button type="submit"id="searchsubmit" value="Search">بحث</button>
</form>
</div>
</div>
<?php endif; ?>
</div>

	
<div class="row justify-content-center m-3">
 <div class="col-12 text-center">
 <h4 class="card-title m-4">منتجات آخرى قد تثير اهتمامك</h4>
 </div>
 <?php
 $query_Products = new WP_Query(
     array(
         'post_type' => '',
         'posts_per_page' => '8',
     )
 );
 ?>
 <?php if ( $query_Products->have_posts() ) { ?>
 <div class="col-10">
 <div class="row justify-content-center ps-5 pe-5">
 <?php while($query_Products->have_posts()) : $query_Products->the_post(); ?>    
 <div class="col-12 col-sm-6 col-md-3 m-0 p-2">
<a href="<?php the_permalink(); ?>">
 <?php the_post_thumbnail(' image-4-classic ' . ' div-block-7 '); ?></a>
 </div>
 
 <?php endwhile; ?>
 <?php
     }
     wp_reset_postdata();
 ?>
 
 </div>
 </div>   
 </div>


<?php get_footer(); ?>