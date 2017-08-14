<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
				if(in_category('du-an')){
						get_template_part('template-parts/detail-prj', get_post_format());
				}else if (in_category('bds')) {
						get_template_part('template-parts/detail-bds', get_post_format());
				}else if (in_category('tt')) {
						get_template_part('template-parts/detail-new', get_post_format());
				}
		?>
	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
