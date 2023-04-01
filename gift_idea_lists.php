<!--Content-->

<div class="container">
<div class="row">
<div class="col-12 text-center mt-5">
<h1>أفكار وهداية لك ولمن تحب</h1>
<p class="alert fs-3 mt-1"><a href="#">لتصفح قوائم هدايا مخصصة اضغط هنا</a></p>
</div>
</div>
<?php
$query_archive = new WP_Query();
?>
<?php if (is_archive()) { ?>

<div class="card-group row justify-content-center pe-5 ps-5">
<?php while($query_archive->is_archive()) : $query_archive->is_archive(); ?>    

<div class="col-6 col-md-4 col-lg-4 m-0 p-1">
<div class="card" style="border-radius: 7px; border: none;">
<div class="div-block-8">
<a href="<?php the_permalink(); ?>">
<img src="images/61e09d730e99b3f3ec3fa46e_duotone (2)-p-1080 (1).png" class="image-5-classic" width="100px" alt="...">
</a></div>
<div class="card-body text-center">
<h5 class="card-title"> <a href="#"> <?php the_archive_title(); ?>    </a></h5>
<p class="card-text"> نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا</p>
</div>
</div>
</div>
<?php endwhile; ?>
<?php
	}
	wp_reset_postdata();
?>

<div class="col-6 col-md-4 col-lg-4 m-0 p-1">
<div class="card" style="border-radius: 7px; border: none;">
<div class="div-block-8">
<a href="product2.html">
<img src="images/61e264d29cece48f00ea06b5_gifts+for+nurses.jpg" class="image-5-classic" width="100px" alt="...">
</a></div>
<div class="card-body text-center">
<h5 class="card-title"> <a href="#"> قوائم أفكار الهدية  </a></h5>
<p class="card-text"> نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا</p>
</div>
</div>
</div>


<div class="col-6 col-md-4 col-lg-4 m-0 p-1">
<div class="card" style="border-radius: 7px; border: none;">
<div class="div-block-8">
<a href="product2.html">
<img src="images/61e0973ddc92398dfb610010_duotone (1)-p-500.png" class="image-5-classic" width="100px" alt="...">
</a></div>
<div class="card-body text-center">
<h5 class="card-title"> <a href="#"> قوائم أفكار الهدية  </a></h5>
<p class="card-text"> نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا نص هنا</p>
</div>
</div>
</div>









</div>
</div>


