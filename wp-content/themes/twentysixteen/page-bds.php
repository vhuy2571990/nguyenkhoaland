<?php /* Template Name: Template page bds */ ?>
<?php 
	get_header(); 
	$tags = $_GET['type-bds'];
?>
<div id="primaryvv" class="content-area">
	<main id="mainvv" class="site-main" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<img style="float:left; margin-right:20px;" 
			src="<?php echo get_stylesheet_directory_uri().'/images/icon_house.jpg'?>" width="56" height="54">
			<div class="menu_sgd">
		        <ul>
		              <li class="menu_canban">
		              	<a class="<?php echo ($_GET['type_news'] == 1 || !$_GET['type_news']) ?  'active' : ''; ?>" href="<?php echo get_home_url().'/san-giao-dich-bds/index.php?module=transaction&amp;type_news=1&amp;type_estate=0' ?>"></a>
		              </li>
		              <li class="menu_canmua">
		              	<a class="<?php echo ($_GET['type_news'] == 2) ?  'active' : ''; ?>" href="<?php echo get_home_url().'/san-giao-dich-bds/index.php?module=transaction&amp;type_news=2&amp;type_estate=0' ?>"></a>
		              </li>
		              <li class="menu_chothue">
		              	<a class="<?php echo ($_GET['type_news'] == 3) ?  'active' : ''; ?>" href="<?php echo get_home_url().'/san-giao-dich-bds/index.php?module=transaction&amp;type_news=3&amp;type_estate=0' ?>"></a>
		              </li>
		              <li class="menu_canthue">
		              	<a class="<?php echo ($_GET['type_news'] == 4) ?  'active' : ''; ?>" href="<?php echo get_home_url().'/san-giao-dich-bds/index.php?module=transaction&amp;type_news=4&amp;type_estate=0' ?>"></a>
		              </li>
		         </ul>
		    </div>
		    <div class="box-content">
		    	<div class="box-content-top">
		    	<div class="title" style="width:690px;">
              		<?php 
              			switch ($_GET['type_news']) {
              				case '1':
              					echo 'Cần bán';
              				break;
              				case '2':
              					echo 'Cần mua';
              				break;
              				case '3':
              					echo 'Cho thuê';
              				break;
              				case '4':
              					echo 'Cần thuê';
              				break;
              				default:
              					echo 'Cần bán';
              				break;
              			}
              		?>        
              	</div>
		    	</div>
		    	<div class="box-content-inside-san">
		    		<ul>
						<?php
						global $post;

						if(is_null($tags)) {
							$args = array( 'posts_per_page' => 15, 'offset'=> 0, 'category_name' => 'bds');	
						}else {
							$args = array( 'posts_per_page' => 15, 'offset'=> 0, 'tag' => $tags);
						}
						

						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<p class="boder_bottom">Mã BĐS: <span><?php the_field('ma_bds');?></span></p>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p>Địa chỉ: <span> <?php the_field('address')?></span><br>
					               Số lượt đọc: <span>5.991</span> <br>
					               Giá: : <span><?php the_field('price');?></span> 
					            </p>
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
