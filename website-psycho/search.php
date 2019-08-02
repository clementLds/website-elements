<?php
/**
 * The template for displaying search results pages.
 *
 * @package Nisarg
 */

get_header(); ?>
	<div class="container">
		<div class="row">
				<?php if ( have_posts() ) : ?>
					<header class="search-page-header">
						<h3 class="search-page-title"><?php printf( esc_html__( 'Search Results for: %s', 'nisarg' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
					</header><!-- .page-header -->
				<section id="primary" class="col-md-9 content-area">
					<main id="main" class="site-main" role="main">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						?>
					<?php endwhile; ?>

					<?php nisarg_posts_navigation(); ?>

					</main><!-- #main -->
				</section><!-- #primary -->

				<?php else : ?>

				<section id="primary" class="col-md-12 content-area pageSearch">
					<main id="main" class="site-main" role="main">
					<header class="page-header">
						<h3 class="page-title titleSearch">Aucun résultat</h3>
						<p class="pSearch">Désolé, mais rien ne correspond à votre recherche  <i class="far fa-frown"></i></p>
					</header><!-- .page-header -->
					<div class="row">
						<div class="col-md-6">
							<div class="blockSearch">
								<p class="pSearch">Voici quelques liens utiles à la place :</p>
								<ul>
									<li class="liSearch"><a href="https://psycho.icariom.com/wp/">Page d'accueil</a></li>
									<li class="liSearch"><a href="https://psycho.icariom.com/wp/acces-a-mon-cabinet/">Accès à mon cabinet</a></li>
									<li class="liSearch"><a href="https://psycho.icariom.com/wp/prendre-rendez-vous/">Prendre rendez-vous</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="blockSearch">
								<p class="pSearch">Ou bien effectuez une nouvelle recherche ci-dessous :</p>
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
					</main><!-- #main -->
				</section><!-- #primary -->
				<?php endif; ?>
				
		</div> <!--.row-->
	</div><!--.container-->
	<?php get_footer(); ?>
