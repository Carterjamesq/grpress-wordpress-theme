<?php
/**
 * The template for displaying all single posts
 *
 * @package GRPress
 */

get_header(); ?>

<div class="container single-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            while ( have_posts() ) :
                the_post();
                
                // Display the content of the post
                the_content();

                // Display post navigation
                the_post_navigation( array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mytheme' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mytheme' ) . '</span> <span class="nav-title">%title</span>',
                ) );

                // Load comments template if comments are open or there are comments
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();
