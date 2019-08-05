<?php
/**
 * The header for our theme.
 *
 * Displays all of the head section.
 *
 * @package Nisarg
 */
?>
<!DOCTYPE html>

<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<header id="masthead"  role="banner">
	<nav id="site-navigation" class="main-navigation navbar-fixed-top navbar-left" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="container" id="navigation_menu">
			<div class="navbar-header">
				<?php if ( has_nav_menu( 'primary' ) ) { ?>
					<button type="button" class="menu-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<?php } ?>
					<!--<a class="navbar-brand"></a>-->
			</div><!-- .navbar-header -->
			<?php if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
					'menu_class'        => 'primary-menu',
				) ); } ?>
		</div><!--#container-->
	</nav>
	<!--<div id="cc_spacer"></div> used to clear fixed navigation by the themes js -->
    <?php   if ( is_category(8) ) { ?>
            <div class="site-header-bloc">
                <img src="https://psycho.icariom.com/wp/wp-content/uploads/2019/08/library-e1564774197893.jpeg" class="attachment-nisarg-full-width size-nisarg-full-width wp-post-image" alt="marx et freud">
            </div><!--.site-header-->
    <?php   }else{  ?>
	<div class="site-header">
		<div class="site-branding">
			<a class="home-link" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				
                <?php   if ( is_page(26) ) { ?>
                    <h1 class="site-title wow fadeIn" data-wow-delay=".04s"><?php bloginfo( 'name' ); ?></h1>
				    <h2 class="site-description wow fadeIn" data-wow-delay=".04s"><?php bloginfo( 'description' ); ?></h2>
                <?php } ?>
			</a>
		</div><!--.site-branding-->
	</div><!--.site-header-->
    <?php } ?>
</header>
<div id="content" class="site-content">
