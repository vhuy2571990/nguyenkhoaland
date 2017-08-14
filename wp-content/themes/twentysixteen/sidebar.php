<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php if(!is_home() && (is_page('san-giao-dich-bds') || in_category('bds'))) {
				get_template_part( 'template-parts/search-formbds', get_post_format());
			} else if(!is_home() && is_front_page()) {
				dynamic_sidebar( 'sidebar-1' );
			} else {
				dynamic_sidebar( 'sidebar-1' );
			}
		?>
		<?php get_template_part( 'template-parts/content-sidebar', get_post_format() ) ;?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
