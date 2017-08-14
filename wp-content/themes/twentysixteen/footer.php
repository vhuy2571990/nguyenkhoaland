	<div class="clear"></div>
</div><!-- .container /-->
<?php get_sidebar( 'footer' ); ?>				
<div class="clear"></div>
</div><!-- .inner-Wrapper -->
<div class="footer-bottom" id="footer">
	<div class="container">
		<div class="alignleft">
			Copyright © 2012 HUNGTHINHCORP. All rights reserved
		</div>
		<!-- <div class="alignright">
			<div class="soluot">
            	<ul>
                	<li> <img style="float:left; margin-right:5px;" src="<?php echo get_stylesheet_directory_uri().'/images/icon_mouse.png' ?>" width="11" height="20">
                	<span>216.403</span></li>
                    <li> <img style="float:left; margin-right:5px;" src="<?php echo get_stylesheet_directory_uri().'/images/icon_human.png' ?>" width="13" height="20"><span>4</span></li>
                    <li style="margin-right:0; margin-left:10px;"><a href="#">
                    <img src="<?php echo get_stylesheet_directory_uri().'/images/icon_top.png' ?>" width="39" height="21"></a></li>
                </ul>
          </div>
		</div> -->
		<div class="clear"></div>
	</div><!-- .Container -->
</div><!-- .Footer bottom -->
</div><!-- #Wrapper -->
</div><!-- .Wrapper-outer -->
<div id="fb-root"></div>
<!-- <div class="popup">
	<div class="overlay"></div>
	<div class="img-wrapper-center">
		<a class="close-popup"><img src="<?php echo get_stylesheet_directory_uri().'/images/btn_close_cam.png'?>" alt=""></a>
		<img src="<?php echo get_stylesheet_directory_uri().'/images/pop_up_15nam.jpg'?>" alt="">
	</div>
</div> -->
<script>
	$(document).ready(function(){
		// setTimeout(function(){
		// 	if(window.location.pathname == '/') {
		// 		$("body").addClass('show-popup');	
		// 	}
		// }, 1000);

		// $("body").on('click', function(e){
		// 	$(this).removeClass('show-popup');
		// });

		$(".img-wrapper-center").on('click', function(e){
			e.stopPropagation();
		});

		$(".img-wrapper-center .close-popup").on('click', function(e){
			e.stopPropagation();
			$("body").removeClass('show-popup');
		});
	});
</script>
<?php wp_footer();?>
</body>
</html>
