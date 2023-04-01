<!--footer-->

<footer>
<div class="container">
<div class="row justify-content-center">
<div class="col-10 m-2">
<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
</div>
</div>
<div class="col-12 m-2">
<a href="<?php echo home_url( '/' ); ?>" class="">إذهب للصفحة الرئيسية</a>
<h5>تواصل معنا</h5>
<?php
wp_nav_menu( array(
'menu'              => 'so_menu',
'theme_location'    => 'so_menu',
'depth'             => 2,
'container'         => false,
'menu_class'        => 'link-footer',)
);
?>
<h6>جميع الحقوق محفوظة لـ <a href="<?php echo home_url( '/' ); ?>"><?php echo bloginfo('name'); ?></a> </h6>
<a href="http://www.moh.a0001.net" class="badge">by: Mohamed Alnawjha</a>
</div>
</div>

</footer>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>
<?php wp_footer(); ?>
</div>
</body>
</html>