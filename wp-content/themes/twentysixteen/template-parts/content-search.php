<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-search">
		<?php the_title( sprintf( '<h1 class="entry-title-search"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
	<?php twentysixteen_post_thumbnail(); ?>
	<div class="entry-content">
		<?php twentysixteen_excerpt(); ?>
	</div>
	<?php if ( 'post' === get_post_type() ) : ?>
	<?php else : ?>
	<?php endif; ?>
</article><!-- #post-## -->
