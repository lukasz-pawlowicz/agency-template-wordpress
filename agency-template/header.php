<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agency-template
 */

// Advanced Custom Fields

$banner_main_text = get_field('main_text');
$banner_paragraph_text = get_field('paragraph_text');
$banner_button_text = get_field('button_text');

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'agency-template' ); ?></a>
	<header class="site-header" role="banner" data-type="background" data-speed="5">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="AgencyInteractive"></a>
				</div>
				<?php
					wp_nav_menu( array(
						'display_location'	=> 'primary',
						'container'			=> 'nav',
						'container_class'	=> 'navbar-collapse collapse',
						'container_id'		=> 'bs-example-navbar-collapse-1',
						'menu_class'		=> 'nav navbar-nav navbar-right'
						
					) );
				?>
			</div>
		</nav>
		<div class="container">
			<div class="hero-text" id="startchange">
				<h1><?php  echo $banner_main_text;  ?></h1>
				<p class="lead"><?php  echo $banner_paragraph_text;  ?></p>
				<a href="#" class="button"><?php  echo $banner_button_text;  ?></a>
			</div>
		</div>
	</header>
