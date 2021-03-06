<div class="menu_phankhuc">
        <!-- <?php 
            if ( in_category('du-an') || is_home() || is_page('land') || is_page('category-du-an')) {
                get_template_part( 'template-parts/catalog-proj', get_post_format() );
            } elseif ( in_category('tt') ) {
                get_template_part( 'template-parts/catalog-bds', get_post_format() ); 
            } else if ( is_page( array( 'gioi-thieu' ))) {
                get_template_part('template-parts/catalog-page', get_post_format());
            } else if ( is_page('san-giao-dich-bds') || in_category('bds')) {
                get_template_part('template-parts/catalog-bds', get_post_format());
            }
        ?> -->
       <?php get_template_part( 'template-parts/catalog-proj', get_post_format() ); ?>
</div>
<div class="support">
    <div class="title_support"><i class="icon-phone icons"></i> <span>0911499759</span></div>
</div>
<div class="box_right">
    <div class="box_right_top">
        <div class="title_1">Tin tức và sự kiện</div>
            <a href="page-news.html" class="view-all">Xem hết</a></div>
        <div class="content_tintuc">
        <ul>
            <?php
            global $post_news;
            $args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category_name' => 'ttk' );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?><span><?php echo get_the_date('d/m/Y'); ?></span></a> 
                </li>            
            <?php endforeach; 
            wp_reset_postdata();?>      
        </ul>
    </div>     
</div>
<?php 
    $url = "https://www.vietcombank.com.vn/exchangerates/ExrateXML.aspx";
    $xml = file_get_contents($url);

    if(!$xml) { return false; }
    
    $data = simplexml_load_string($xml);

    $thoi_gian_cap_nhat = $data->DateTime;
    $ty_gia = $data->Exrate;
?>
<div class="box_right">
    <div class="box_right_top">
        <div class="title_1">Tỷ giá ngoại tệ</div>
    </div>
    <div class="content-tg">
        <table cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td align="center" width="100%" height="32" class="text_tgvang_mota">Cập nhật lúc: <?php echo $thoi_gian_cap_nhat?>
                      </td>
                </tr>
                <tr>
                    <td align="center" height="32" class="text_tgvang_mota" colspan="4"><strong>Đơn vị tính: VNĐ</strong></td>
                </tr>
            </tbody>
        </table>
        <table cellspacing="0" cellpadding="2" border="0">
            <tbody>
                    <?php foreach($ty_gia as $ngoai_te): ?>
                        <?php
                            $ma = $ngoai_te['CurrencyCode'];
                            $ten = $ngoai_te['CurrencyName'];
                            $gia_mua = $ngoai_te['Buy'];
                            $gia_chuyen_khoan = $ngoai_te['Transfer'];
                            $gia_ban = $ngoai_te['Sell'];
                        ?>
                        <?php if($ma == 'AUD' || $ma == 'EUR' || $ma == 'JPY' || $ma == 'THB' || $ma == 'USD'): ?>
                            <tr>
                                <td class="text_tgvang_chitiet" width="29%"><?php echo $ma; ?></td>
                                <td class="text_tgvang_chitiet" width="29%"><?php echo $gia_mua; ?></td>
                                <td class="text_tgvang_chitiet" width="28%"><?php echo $gia_ban; ?></td>
                                <td class="text_tgvang_chitiet" width="10%">&nbsp;</td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
