<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
				<h1 class="page-title">Página no encontrada 😓</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Es muy importante tener una página de Error 404 pensada no sólo en SEO sino en Experiencia de usuario.

					Recomiendo usar 2 elementos principales: Un menú con las categorías principales del sitio y un buscador.
					</p>


					<p>
					<p><h3><strong>Navega por las principales Categorías</strong></h3>
					<p><a href="https://glosarioseo.com/temas/contenido/"><span style="font-weight: 400;">Contenido<br> </span></a><a href="https://glosarioseo.com/temas/optimizacion/"><span style="font-weight: 400;">Optimización<br> </span></a><a href="https://glosarioseo.com/temas/estrategia/"><span style="font-weight: 400;">Estrategias<br> </span></a><a href="https://glosarioseo.com/temas/tecnicas-seo/"><span style="font-weight: 400;">Técnicas</span></a></p>

					<strong>Puedes buscar algo también</strong></p>
					<?php
						get_search_form();
					?>

					

					</p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
