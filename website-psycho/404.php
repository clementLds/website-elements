<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Nisarg
 */
 
get_header(); ?>
	<div class="container">
		<div class="row">
			<div id="primary" class="col-md-12 content-area">
				<main id="main" class="site-main" role="main">
					<section class="error-404 not-found page404">
						<header class="page-header">
							<h3 class="page-title title404">La page que vous cherchez semble introuvable</h3>
						</header><!-- .page-header -->
						<div class="page-content">
							<div class="row">
								<div class="col-md-6">
									<div class="block404">
										<p class="p404">Voici quelques liens utiles à la place :</p>
										<ul>
											<li class="li404"><a href="https://psychologue-psychanalyste-rennes-35.fr/">Page d'accueil</a></li>
											<li class="li404"><a href="https://psychologue-psychanalyste-rennes-35.fr/acces-a-mon-cabinet/">Accès à mon cabinet</a></li>
											<li class="li404"><a href="https://psychologue-psychanalyste-rennes-35.fr/contactez-moi/">Prendre rendez-vous</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="block404">
										<p class="p404">Ou bien effectuez une recherche ci-dessous :</p>
										<?php get_search_form(); ?>
									</div>
								</div>
							</div><!-- .row -->
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div> <!--.row-->
	</div><!--.container-->
<?php get_footer(); ?>
