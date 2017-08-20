<?php /* Template Name: Template phan loai */ ?>
<?php get_header();
      $current_page = get_queried_object();
      $category     = $current_page->post_name;
      $pageTitle;
      switch ($category) {
        case 'hcm':
          $pageTitle = 'Dự án TPHCM';
        break;
        case 'can-ho':
          $pageTitle = 'Căn Hộ';
        break;
        case 'shop-house':
          $pageTitle = 'Shop House';
        break;
        case 'biet-thu':
          $pageTitle = 'Biệt thự';
        break;
        default:
          $pageTitle = '';
        break;
      }
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="box-project-main">
      <div class="box-content">
      	<div class="box-content-top">
      		<div class="title"><?php echo $pageTitle; ?></div>
      	</div>
      	<div class="box-content-inside">
      		<ul>
      			<?php

             $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 0;
             $query = new WP_Query(
                 array(
                     'paged'         => $paged,
                     'category_name' => $category,
                     'post_type'     => 'post',
                     'post_status'   => 'publish',
                 )
            );
      			if ( $query->have_posts() ) {
              while ($query->have_posts()) {
               $query->the_post(); ?>
        				<li class="hvr-float-shadow" id="post-<?php the_ID(); ?>">
        					<a href="<?php the_permalink(); ?>">
        						<?php the_post_thumbnail(); ?>
        						<span class="item-title">
        							<?php the_title(); ?>
        						</span>
        					</a>
        				</li>
        			<?php } ?>
              </ul>
              <div class="pagination">
                    <div class="next-link"><?php next_posts_link( 'Xem tiếp', $query->max_num_pages);?> </div>
                    <div class="previous-link"><?php previous_posts_link( 'Quay lại' );?></div>
              </div>
            <?php
                wp_reset_postdata();
                }
            ?>
      	</div>
      </div>
    </div>
  </main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
