<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Jobify
 * @since Jobify 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<meta name="viewport" content="initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/source/vendor/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>
	        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66672220-1', 'auto');
  ga('send', 'pageview');

</script>
	
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="site-branding">
					<?php $header_image = get_header_image(); ?>
					<h1 class="site-title">
						<?php if ( ! empty( $header_image ) ) : ?>
							<img src="<?php echo $header_image ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
						<?php endif; ?>

						<span><?php bloginfo( 'name' ); ?></span>
					</h1>
					
				</a>
		<?php
		if ( has_nav_menu( 'footer-social' ) ) :
			$social = wp_nav_menu( array(
				'theme_location'  => 'secondary',
				'container_class' => 'footer-social',
				'items_wrap'      => '%3$s',
				'depth'           => 1,
				'echo'            => false,
				'link_before'     => '<span class="screen-reader-text">',
				'link_after'      => '</span>',
			) );

			echo strip_tags( $social, '<a><div><span>' );
		endif;
		?>				
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<nav id="site-navigation" class="site-primary-navigation slide-left">
					<a href="#" class="primary-menu-toggle"><i class="icon-cancel-circled"></i> <span><?php _e( 'Close', 'jobify' ); ?></span></a>
					<?php get_search_form(); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu-primary' ) ); ?>
				</nav>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<a href="#" class="primary-menu-toggle in-header"><i class="icon-menu"></i></a>
				<?php endif; ?>
			</div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
