<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title><?php if (is_home() || is_front_page()){bloginfo('name'); echo " | "; bloginfo('description');}  else {wp_title(''); echo " | "; bloginfo('name'); }?> </title>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<!-- style CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/custom.css">
<!--font-->
<link href='http://fonts.googleapis.com/earlyaccess/notokufiarabic.css' rel='stylesheet' type='text/css'/>
<link href=' http://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' type='text/css'/>
<!--js-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62640576eb843b00192d1488&product=sop' async='async'></script>
<?php wp_head(); ?>
</head>
<body dir="rtl">
<?php
	wp_body_open();
?>
<header>
<nav>
<div class="container">
<div class="row">
<div class="navbar navbar-expand-lg navbar-light">
<div class="container-fluid">
<!--logo-->
<a href="<?php echo home_url( '/' ); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
<!--nav-->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-a-link" href="<?php echo home_url( '/' ); ?>">أفكار هدايا</a></li>
<li class="nav-item"><a class="nav-a-link" href="<?php echo home_url( '/gift_idea_lists.php' ); ?>">أفضل وأغرب المنتجات </a></li>
</ul>
</div>
<!--search-->
<form class="search d-flex" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
<input type="text" value="" name="s" id="s" placeholder="كلمة البحث..." aria-label="Search">
<button type="submit"id="searchsubmit" value="Search">بحث</button>
</form>
</div>
</div>
</div>
</div>
</nav>
</header>

<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav me-5">
<li class="nav-item"><a class="nav-a-link" href="<?php echo home_url( '/' ); ?>">أفكار هدايا</a></li>
<li class="nav-item"><a class="nav-a-link" href="<?php echo home_url( '/gift_idea_lists.php' ); ?>">أفضل وأغرب المنتجات </a></li>
</ul>
</div>

