<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="title_sub">
    	<h1><a class="active" href="pages-bds-3.html">
    		<?php 
    			$tag_name = get_the_tags()[0]->name;
    			switch ($tag_name) {
    				case 'biet-thu':
    					$tag_name = 'Biệt thự';
    					break;
    				case 'landing':
    					$tag_name = 'Căn hộ';
    					break;
    				case 'du-an':
    					$tag_name = 'Đất dự án';
    					break;
    				case 'nha-pho':
    					$tag_name = 'Nhà phố';
    					break;
    				default:
    					break;
    			}

    			echo $tag_name;
    		;?>
    	</a></h1>
    	<h2>&nbsp;|&nbsp;NHÀ MẶT TIỀN QUẬN 10 GIÁ 4 TỶ</h2>
 	</div>
 	<div class="content-detail-bds">
 		<div class="date m-b-10"><span class="green">Ngày đăng:</span> <?php echo get_the_date('d/m/Y')?></div>
		<div class="view-rate m-b-10"><span class="green">Số lượt đọc:</span> 5991</div>
		<div class="price m-b-10"><span class="green">Giá:</span><strong> <?php the_field('price')?></strong></div>
		<div class="address m-b-10"><span class="green">Địa chỉ:</span> <?php the_field('address')?></div>
		<div class="mainleft1">
			Thông tin
		</div>
		<ul class="utis">
			<li>Loại BĐS: Nhà phố</li>
			<li>Tình trạng pháp lý: Đầy đủ</li>
		</ul>
		<div class="mainleft1">
			Mô tả
		</div>
		<div class="description">
			<?php the_field('mo_ta') ?>
		</div>
		<div class="mainleft1">
			Thông tin liên hệ
		</div>
		<div class="ttlh">
			<?php the_field('ttlh') ?>
		</div>
 	</div>
 	<div class="duankhac">
		<p class="title_duankhac">Sản phẩm khác</p>
		<ul>
		    <?php
				$related = get_posts( array( 
					'category__in' => wp_get_post_categories($post->ID), 
					'numberposts' => 5, 
					'post__not_in' => array($post->ID) )
				);

				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
			        <li>
				        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
				        <?php the_title(); ?>
				        </a>
			        </li>  
				<?php }

				echo paginate_links( $args );
				wp_reset_postdata(); 
			?>
		</ul> 
  	</div>
</article>