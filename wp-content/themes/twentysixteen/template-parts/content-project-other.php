<div class="box-content">
	<div class="box-content-top">
		<div class="title">Dự án tỉnh thành khác</div>	
		<a href="#" class="view-all">Xem hết</a>
	</div>
	<div class="box-content-inside">
		<ul>
			<?php
			global $post;
			$args = array( 'posts_per_page' => 6, 'offset'=> 0, 'category_name' => 'other' );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li class="hvr-float-shadow">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<span class="item-title"><?php the_title(); ?></span>
					</a>
				</li>
			<?php endforeach; 
			wp_reset_postdata();?>
		</ul>
	</div>
</div>

