  <!--Content-->
 <div class="container">
 <div class="row">
 <div class="col-12 text-center mt-5 mb-2">
 <h2><?php the_title(); ?></h2>
 </div>
 </div>
 <div class="row justify-content-center">
 <div class="col-12 col-md-5 p-4 pt-0">
 <div>
 <?php the_post_thumbnail(' image-4-classic '); ?></div>
 </div>
 <div class="col-12 col-md-5 mb-3">
<?php $search_text = get_the_excerpt();
$tags = array("<p>", "</p>");
$url_excerpt = str_replace($tags, "", $search_text); ?>
 <div class="button-2 w-button mt-2"><a href="<?php echo $url_excerpt; ?>">صفحة المنتج على موقع علي اكسبريس</a></div>
 <div class="card-body mb-3">
 <h5 class="card-title">ترغب بمعرفة المزيد؟</h5>
 <p class="card-text"><?php echo get_the_content() ?></p>
 </div>
 <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
 </div>
 </div>

 <div class="row justify-content-center m-3">
 <div class="col-12 text-center">
 <h4 class="card-title ">منتجات آخرى قد تثير اهتمامك</h4>
 </div>
 <?php
 $query_Products = new WP_Query(
     array(
         'post_type' => '',
         'posts_per_page' => '4',
     )
 );
 ?>
 <?php if ( $query_Products->have_posts() ) { ?>
 <div class="col-10">
 <div class="row justify-content-center ps-5 pe-5">
 <?php while($query_Products->have_posts()) : $query_Products->the_post(); ?>    
 <div class="col-12 col-sm-6 col-md-3 m-0 p-2">
 <div>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(' image-4-classic ' . ' div-block-7 '); ?></a></div>
 </div>
 
 <?php endwhile; ?>
 <?php
     }
     wp_reset_postdata();
 ?>
 
 </div>
 </div>   
 </div>
 
 </div>
