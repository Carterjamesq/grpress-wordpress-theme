<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GRPress Wordpress Teheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        // Display the post title with a link to the single post
        the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        ?>
    </header><!-- .entry-header -->

    <?php if (has_post_thumbnail()) : ?>
        <div class="entry-thumbnail">
            <?php
            // Display the post thumbnail with a link to the single post
            echo '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">';
            the_post_thumbnail('medium'); // You can change 'medium' to any size you prefer
            echo '</a>';
            ?>
        </div><!-- .entry-thumbnail -->
    <?php endif; ?>

    <div class="entry-content">
        <?php
        // Display the excerpt limited to 30 words
        $excerpt = wp_trim_words(get_the_excerpt(), 30, '...');
        echo '<p>' . $excerpt . '</p>';
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
		<?php wp_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
