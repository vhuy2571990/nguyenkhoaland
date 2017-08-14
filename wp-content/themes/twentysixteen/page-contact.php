<?php /* Template Name: Template page contact */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="content_lienhe">
            <div class="sangiaodich">
            	<div class="sangiaodich">
<p style="margin-top:0;"><span style="color:#ff7a00; font-weight:bold;">Sàn giao dịch Hưng Thịnh Nguyễn Chí Thanh</span> <br>
Địa chỉ 	: 	526 Nguyễn Chí Thanh, Phường 7, Quận 10, TP HCM<br>
Điện thoại 	: (08) 7300 7499 - 0909 306 810</p>
<p><span style="color:#ff7a00; font-weight:bold;">Sàn giao dịch Hưng Thịnh Phú Nhuận</span><br>
Địa chỉ 	: 163 Hoa Lan, P.2, Q.Phú Nhuận<br>
Điện thoại 	: (08) 7300 7715 - 0909 281 182</p>
<p><span style="color:#ff7a00; font-weight:bold;">Sàn giao dịch Hưng Thịnh Phạm Viết Chánh</span> <br>
Địa chỉ 	: 	1A Phạm Viết Chánh,P.Nguyễn Cư Trinh,Q.1,TP HCM<br>
Điện thoại:&nbsp; 	(08) 7300 9058 - 0906 992 996</p>
<p><span style="color:#ff7a00; font-weight:bold;">Sàn giao dịch Hưng Thịnh Hàng Xanh</span> <br>
Địa chỉ 	: 527 Điện Biên Phủ, P. 25, Q.Bình Thạnh, TP HCM<br>
Điện thoại 	: (08) 7300 7077 - 0908 026 046</p>
<p><span style="color:#ff7a00; font-weight:bold;">Sàn giao dịch Hưng Thịnh Tân Sơn Nhất</span><br>
Địa chỉ 	: 45 Hoàng Việt, P. 4, Q.Tân Bình, TP HCM<br>
Điện thoại:&nbsp; 	(08) 7300 7714 - 1900 6958</p>
<p><span style="color:#ff7a00; font-weight:bold;">Sàn giao dịch Hưng Thịnh Vũng Tàu</span><br>
Địa chỉ 	: 120 Hoàng Hoa Thám, Phường 2, TP Vũng Tàu<br>
Điện thoại 	: (064) 7305 019 - 0918 525 200</p>
<p><span style="color:#ff7a00; font-weight:bold;">Sàn giao dịch Hưng Thịnh Tân Hưng</span><br>
Địa chỉ 	: 133 Nguyễn Thị Thập, P.Tân Hưng, Q.7, TP HCM<br>
Điện thoại 	: (08) 7300 9577 - 0908 856 868</p>
</div></div>
<img style="float:right;" src="<?php echo get_stylesheet_directory_uri().'/images/img_lienhe.jpg'?>" width="323" height="391">

<div class="form_lienhe">
	<!-- <form onsubmit="return check_input();" method="post" id="frmContact" name="frmContact" action="?module=contact&amp;function=mailing" style="padding:0; margin:0;">       
                            
                            <div id="fromlienhe">                        
                                <ul>
                                    <li class="info_left">Họ tên:<span class="redstar">*</span></li>
                                    <li class="info_input"><input type="text" class="textfield" id="name" name="name"></li>
                                    <li class="info_left">Địa chỉ:<span class="redstar">*</span></li>
                                    <li class="info_input"><input type="text" class="textfield" id="address" name="address"></li>
                                    <li class="info_left">Điện thoại:<span class="redstar">*</span></li>
                                    <li class="info_input"><input type="text" class="textfield" id="phone" name="phone"></li>
                                    <li class="info_left">Email:<span class="redstar">*</span></li>
                                    <li class="info_input"><input type="text" class="textfield" id="email" name="email"></li>			
                                    <li class="info_left">Tiêu đề:<span class="redstar">*</span></li>
                                    <li class="info_input"><input type="text" class="textfield" id="title" name="title"></li>
                                    <li class="info_left">Nội dung:</li>
                                    <li class="info_input"><textarea class="textarea" id="content" name="content"></textarea></li>
                                    <li class="lastinfo_input"><input style="margin-right:10px;" type="submit" value="Gửi" class="btnsubmit"><input type="reset" value="Hủy bỏ" class="btncancel"></li>
                                </ul>
                            </div>
                            
                                             
                        </form> -->
        <?php echo do_shortcode('[ninja_form id=1]'); ?>
</div>
</div>
		</article>
	</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>