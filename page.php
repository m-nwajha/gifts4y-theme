
<?php get_header(); ?>
	<?php if (have_posts()) : ?>
	<section>
		<div class="container">
			<h2 class="maintitle"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php while (have_posts()) : the_post(); ?>
			<div class="insidecontent">
				<?php if ( has_post_thumbnail() ) { echo '<div align="center" style="margin-bottom:20px;">'; the_post_thumbnail( 'postthumb' ); echo '</div>'; } ?>
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</section>
	<?php endif; ?>
<?php get_footer(); ?>