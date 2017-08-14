<div class="box-content">
	<div class="box-content-top">
		<div class="title">Dự án tại tphcm</div>	
		<a href="#" class="view-all">Xem hết</a>
	</div>
	<div class="box-content-inside">
		<ul>
			<?php
			global $post;
			$args = array( 'posts_per_page' => 9, 'offset'=> 0, 'category_name' => 'hcm' );

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

