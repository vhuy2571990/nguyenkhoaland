<div class="title_sub">
		<h2><?php the_title(); ?></h2>	
</div>
<script type="text/javascript">
    $(function() {
        var offset = $("#share-box").offset();
        var shareboxheight = $("#share-box").height();
        var offsetb = $("#register").offset();
        var khoangcachshare =$("#curvedContainer").height()-shareboxheight;
        var topPadding = 15;

        $(window).scroll(function() {
            if ($(window).scrollTop() > offset.top){
                if ($(window).scrollTop() < (khoangcachshare+566)){
                    $("#share-box").stop().css({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });                    
                }else{
                    $("#share-box").stop().css({
                       marginTop: khoangcachshare-15
                    });                     
                }
            }else {
                $("#share-box").stop().css({
                    marginTop: 15
                });
            };
        });
        $(".tabs .tab").on('mouseenter', function(){
        	$(this).siblings().removeClass('selected');
        	$(this).addClass('selected');
        }).on('click', function(){
        	var _idString = $(this).attr('id').split('_');
        	var _idNumber = _idString[_idString.length - 1];
        	$(".tabcontent").removeClass('active');
        	$("#tab_content_" + _idNumber).addClass('active');
        });
    });
</script>
<?php $theContent = get_the_content();?>

<?php if(!empty($theContent)): ?>
	<div class="container-description">
		<?php the_content(); ?>
	</div>
<?php else:?>
	<div class="tabscontainer">
		<div class="tabs" id="share-box" style="margin-top: 15px;">
					 <div class="tab first selected" id="tab_menu_1">
							 <div class="link">Thông tin</div>
							 <div class="arrow"></div>
					 </div>
					 <?php if(get_field('landing')):?>
					 <div class="tab" id="tab_menu_2">
							 <div class="link">Vị trí</div>
							 <div class="arrow"></div>
					 </div>
						<?php endif; ?>
					 <?php if(get_field('tien_ich')):?>
						<div class="tab" id="tab_menu_3">
							 <div class="link">Tiện ích</div>
							 <div class="arrow"></div>
					 </div>
				 <?php endif; ?>
					<?php if(get_field('mat_bang')):?>
					 <div class="tab" id="tab_menu_4">
							 <div class="link">Mặt bằng</div>
							 <div class="arrow"></div>
					 </div>
					<?php endif;?>
					<?php if(get_field('tien_do')):?>
					 <div class="tab" id="tab_menu_5">
							 <div class="link">Tiến độ</div>
							 <div class="arrow"></div>
					 </div>
					<?php endif;?>
					<?php if(get_field('tin_tuc')):?>
					 <div class="tab" id="tab_menu_6">
							 <div class="link">Tin tức </div>
							 <div class="arrow"></div>
					 </div>
					<?php endif;?>
					<?php if(get_field('hinh_anh')):?>
					 <div class="tab" id="tab_menu_7">
							 <div class="link">Hình ảnh</div>
							 <div class="arrow"></div>
					 </div>
					<?php endif;?>
					<?php if(get_field('video')):?>
					 <div class="tab" id="tab_menu_8">
							 <div class="link">Video</div>
							 <div class="arrow"></div>
					 </div>
					<?php endif;?>
					<div class="tab last " id="tab_menu_9">
							 <div class="link">Giao dịch</div>
							 <div class="arrow"></div>
					</div>
			</div>
			<div class="curvedContainer" id="curvedContainer">
					<div class="tabcontent active" id="tab_content_1"><?php the_field('thong_tin') ?></div>
					<div class="tabcontent" id="tab_content_2"><?php the_field('landing') ?></div>
					<div class="tabcontent" id="tab_content_3"><?php the_field('tien_ich') ?></div>
					<div class="tabcontent" id="tab_content_4"><?php the_field('mat_bang') ?></div>
					<div class="tabcontent" id="tab_content_5"><?php the_field('tien_do') ?></div>
					<div class="tabcontent tab-new" id="tab_content_6"><?php the_field('tin_tuc') ?></div>
					<div class="tabcontent" id="tab_content_7"><?php the_field('hinh_anh') ?></div>
					<div class="tabcontent" id="tab_content_8"><?php the_field('video') ?></div>
					<div class="tabcontent tab-giao-dich" id="tab_content_9">
					<span class="main-title"><strong>SÀN GIAO DỊCH BẤT ĐỘNG SẢN HƯNG THỊNH</strong></span>
					<p>163 Hoa Lan, P.2, Q.Phú Nhuận , TP.HCM  <br>
					Điện thoại: <strong>(08) 7300 7715 - 0909 281 182</strong></p>
					<p>1A Phạm Viết Chánh, P.Nguyễn Cư Trinh, Q.1, TP.HCM <br>
					Điện Thoại: <strong>(08) 7300 9058 - 0906 992 996</strong></p>
					<p>526 Nguyễn Chí Thanh, P.7, Q.10, TP.HCM <br>
					Điện thoại: <strong>(08) 7300 7499 - 0909 306 810</strong></p>
					<p>527 Điện Biên Phủ, P.25, Q.Bình Thạnh, TP.HCM <br>
					Điện thoại: <strong>(08) 7300 7077 - 0908 026 046</strong></p>
					<p>45 Hoàng Việt, P.4, Q.Tân Bình, TP.HCM <br>
					Điện thoại: <strong>(08) 7300 7714 - 1900 6958</strong></p>
					<p>133 Nguyễn Thị Thập, P.Tân Hưng, Q.7, TP.HCM <br>
					Điện thoại: <strong>(08) 7300 9577 - 0908 856 868</strong></p>
					<p>120 Hoàng Hoa Thám, Phường 2,TP.Vũng Tàu <br>
					Điện thoại: <strong>(064) 7305 019 - 0918 525 200</strong></p>
				</div>
			</div>
	</div>
<?php endif; ?>
<div class="duankhac">
		<?php
				$related = get_posts( array(
			 'category__in' => wp_get_post_categories($post->ID),
			 'numberposts' => 5,
			 'post__not_in' => array($post->ID) )
		 );
		?>
		<?php if($related):?>
			<h1 class="title_duankhac">Các dự án khác</h1>
		<?php endif;?>
    <ul>
				<?php
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
