<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 * Template Name: Template page tin tuc su kien
 */

 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="menu_tintuc">
		    		<ul>
						<?php
						global $post;
						$args = array( 'posts_per_page' => 20, 'offset'=> 0, 'category_name' => 'tt' );

						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<li>
								<a href="<?php the_permalink(); ?>" class="thumbnail"><?php the_post_thumbnail(); ?></a>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="date"><strong><small class="text-muted">Ngày đăng: <?php echo get_the_date('d/m/Y'); ?></small></strong></div>
								<?php the_excerpt(); ?>
							</li>
						<?php endforeach; 
						wp_reset_postdata();?>
					</ul>
		    	</div>
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
