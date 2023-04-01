<?php
/**
 * The template for displaying division archive pages
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <?php
            // Start the first Loop - pages.
            while ( have_posts() ) : the_post();

                $posttype = get_post_type( get_the_ID() );
                if ( $posttype == 'page' ) {

                    get_template_part( 'template-parts/content', get_post_format() );

                }

            // End the loop.
            endwhile;

            rewind_posts();

            // Start the second Loop - posts.
            while ( have_posts() ) : the_post();

                $posttype = get_post_type( get_the_ID() );
                if ( $posttype == 'post' ) {

                    get_template_part( 'template-parts/content', get_post_format() );

                }

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                'next_text'          => __( 'Next page', 'twentysixteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
            ) );
        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>