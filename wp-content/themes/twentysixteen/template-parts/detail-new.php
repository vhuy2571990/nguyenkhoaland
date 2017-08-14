<div class="title_sub">
    <h1><a href="page-news.html">Tin tức và sự kiện</a></h1>
    <span class="padding">|</span>	 
	<h2><a href="pages-tintuc-12.html">
	<?php
	    $categories = get_the_category( $post->ID );
	    if(!$categories[1]){
	    	echo $categories[0]->name;
	    }else {
	    	echo $categories[1]->name;			
	    }
	?>
	</a></h2>
</div>

<div class="header-post">
	<h4><?php the_title(); ?></h4>
	<small class="text-muted">Ngày đăng: <?php the_date() ?></small> <br>
	<small class="text-muted">Số lượt đọc: 300</small>
</div>
<div class="content-post">
	<?php the_content(); ?>
</div>


<div class="duankhac">
	<p class="title_tintuckhac">Các Tin khác</p>
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