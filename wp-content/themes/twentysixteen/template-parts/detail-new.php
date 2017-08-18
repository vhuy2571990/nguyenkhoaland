<div class="title_sub">
	<h2><?php the_title(); ?></h2>
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
