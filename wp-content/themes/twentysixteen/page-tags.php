<?php 
	/* Template Name: Template page tags */ 
	get_header();
	$paramsGet = $_GET['type'];
	$title_tags;
	switch ($paramsGet) {
		case 'biet-thu':
			$title_tags = 'BIỆT THỰ NGHỈ DƯỠNG';
		break;
		case 'can-ho':
			$title_tags = 'Căn hộ';
		break;
		case 'dan-cu':
			$title_tags = 'Khu Dân cư-Thương mại';
		break;
		case 'du-an-moi':
			$title_tags = 'Dự án mới';
		break;
		case 'gia-tot':
			$title_tags = 'Dự án giá tốt';
		break;
		case 'dau-tu':
			$title_tags = 'Dự án đầu tư';
		break;
		default:
		break;
	}
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="top-bds">
				<a href="<?php echo get_site_url(). '/category-du-an?type=dau-tu'?>"><img src="<?php echo get_stylesheet_directory_uri().'/images/bds_dacbiet.jpg' ?>" alt=""></a>
				<a href="<?php echo get_site_url(). '/category-du-an?type=gia-tot'?>"><img src="<?php echo get_stylesheet_directory_uri().'/images/bds_giatot.jpg' ?>" alt=""></a>
				<a href="<?php echo get_site_url(). '/category-du-an?type=du-an-moi'?>"><img src="<?php echo get_stylesheet_directory_uri().'/images/bds_moi.jpg' ?>" alt=""></a>
			</div>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="box-content">
					<div class="box-content-top">
						<div class="title"><?php echo $title_tags; ?></div>	
						<a href="#"><img style="float:right;" src="<?php echo get_stylesheet_directory_uri().'/images/btn-quaylai_vn.jpg'?>" 
						width="73" height="31"></a>
					</div>
					<div class="box-content-inside">
						<ul>
							<?php
							global $post;
							$args = array( 'posts_per_page' => 9, 'offset'=> 0, 'tag' => $paramsGet );

							$myposts = get_posts( $args );
							foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
							<?php endforeach; 
							wp_reset_postdata();?>
						</ul>
					</div>
				</div>
			</article>
		</main>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
