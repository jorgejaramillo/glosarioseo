<?php
/**
 * Template Name: Inicio
 * Template Post Type: post, page, product
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
*/

get_header();  ?>

  <section id="primary" class="content-area col-sm-12">
    <main id="main" class="site-main" role="main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </section><!-- #primary -->


 <?php
get_footer();
