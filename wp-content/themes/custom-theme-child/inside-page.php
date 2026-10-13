


<?php
/**
 * Template Name: Inside Page Template
 *
 * This is a custom template that allows dynamic content and custom banner.
 *
 * @package WordPress
 * @subpackage oceanleisureinfra Child
 * @since oceanleisureinfra Child 1.0
 */
get_header();
?>

<main id="primary">
    <?php get_template_part('page-banners'); ?>
    <?php
    while ( have_posts() ) :
        the_post();

        // Output page content without automatic paragraph formatting.
        remove_filter( 'the_content', 'wpautop' );
        remove_filter( 'the_content', 'shortcode_unautop' );
        ?>

        <?php the_content(); ?>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>

