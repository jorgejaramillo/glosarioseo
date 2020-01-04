<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '</p><p id="breadcrumbs">','</p><p>' );
}
?>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		
<?php 
the_archive_description( '<div class="descripcion-category">', '</div>' ); 
?>

		</main><!-- #main -->
	</section><!-- #primary -->



<?php
get_sidebar();
get_footer();