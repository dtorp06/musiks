<?php
/**
 * Template Name: Page with fullwidth
 *
 */

get_header(); ?>

        <section class="scrollable wrapper-lg">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>

            <?php endwhile; // End of the loop. ?>
        </section>

<?php get_footer(); ?>
