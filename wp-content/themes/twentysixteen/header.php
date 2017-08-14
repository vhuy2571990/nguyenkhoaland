<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner" id="wrapper">
		<header class="header_middle">
			<div class="logo">
				<img src="<?php echo get_stylesheet_directory_uri().'/images/logo_HTL2.png' ; ?>" alt="<?php echo get_bloginfo( 'title' ) ; ?>" />
			</div>
			<div class="menu_wrapper">
				<div class="bg_menu_main">
				<?php 
					 wp_nav_menu();
				?>
				</div>
			</div>
		</header>
		<div class="slider-wrapper">
			<?php
			    echo do_shortcode("[metaslider id=668]");
			?>
		</div>
		<script type="text/javascript">
	        // $(document).ready(function(){
	        // 	$('#slider').nivoSlider(); 
	        // 	$(".bg_menu_repeart ul").lavalamp({
	        //         setOnClick:true,
	        //         easing: 'easeOutBack',
	        //         activeObj: '.current_page_item'
	        //   });
	        // });
	  </script>
		<div id="content" class="site-content">
