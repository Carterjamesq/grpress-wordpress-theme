<?php
/**
 * The template for displaying all pages
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
                
                // Display the content of the page
                the_content();

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
