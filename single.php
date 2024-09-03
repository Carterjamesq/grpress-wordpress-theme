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
                ?>

                <!-- Display the post title -->
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->

                <!-- Display the post thumbnail -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="entry-thumbnail">
                        <?php
                        // Display the post thumbnail with a link to the single post
                        echo '<a href="' . esc_url(get_permalink()) . '">';
                        the_post_thumbnail('large'); // You can change 'large' to any size you prefer
                        echo '</a>';
                        ?>
                    </div><!-- .entry-thumbnail -->
                <?php endif; ?>

                <!-- Display the content of the post -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <?php
                // Display post navigation
                the_post_navigation( array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'grpress' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'grpress' ) . '</span> <span class="nav-title">%title</span>',
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
