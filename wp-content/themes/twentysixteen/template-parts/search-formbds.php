<div class="menu_mid">
        <div class="title_search_chitiet">Tìm kiếm bất động sản</div>
        <div id="ctl00_ContentPlaceHolder_ctl01_usSearch_panel">
              <ul>
            <li>
                  <div>Nhập từ khóa:</div>
                  <div>
                                <form action="index.php?module=transaction&amp;function=search" method="post">
               <input onblur="if (this.value=='') this.value='Từ khóa';" onfocus="if (this.value=='Từ khóa') this.value='';" style="margin-top:0px;" type="text" name="keyword" value="Từ khóa">
              </form></div>
                </li>
            <li>
                  <div>Loại giao dịch:</div>
                  <div>   
	
                <select name="type" id="type">
				<option value="0">Loại giao dịch</option>
                <option value="2">Cần bán</option>
                <option value="1">Cần mua</option>
                <option value="3">Cho thuê</option>
                <option value="4">Cần thuê</option>
			</select>         
              </div>
                </li>
            <li>
                  <div> Tỉnh/Thành phố: </div>
                  <div>
               
                <select name="city" id="City" onchange="FillQuanHuyen();">

                <option value="">Tỉnh / Thành phố</option>

			
			
              <option value="13">Bình Dương</option>

			
			
              <option value="17">Cam Ranh</option>

			
			
              <option value="14">Đà Lạt</option>

			
			
              <option value="16">Long An</option>

			
			
              <option value="15">Nha Trang</option>

			
			
              <option value="18">Quy Nhơn</option>

			
			
              <option value="1">TP. Hồ Chí Minh</option>

			
			
              <option value="10">Phan Thiết</option>

			
			
              <option value="7">Vũng Tàu</option>

			
			
              <option value="8">Kiên Giang</option>

			
			
              <option value="9">Hậu Giang</option>

			
			
              <option value="11">Bà Rịa - Vũng Tàu</option>

			
			
              <option value="12">Đồng Nai</option>

			            

			
            </select>
              </div>
                </li>
            <li>
                  <div> Quận/Huyện: </div>
                  <div>
               <select name="district" id="Districts">

                <option value="">Quận / Huyện</option>

                
			
			
              <option value="52">Bến Cát</option>

            
			
              <option value="61">Lái Thiêu</option>

            
			
              <option value="41">Thủ Dầu Một</option>

            
			
              <option value="42">Thuận An</option>

            
         	   </select>       
              </div>
                </li>
            <li>
                  <div>Loại bất động sản:</div>
                  <div>
              
               <select name="typereal" id="typereal">

               	<option value="0">Loại BĐS</option>

				
				
					
					<option value="5">Biệt thự</option>

		        
					
					<option value="1">Đất dự án</option>

		        
					
					<option value="4">Căn hộ</option>

		        
					
					<option value="3">Nhà phố</option>

		        
			</select>  
              </div>
                </li>
            
           
            <li>
                 
                  <div class="fc"><!----></div>
                </li>
            <li class="fr">
            	  <input type="reset" value="Nhập lại" style="clear:right; border:none;" class="search_button_chitiet" id="ctl00_ContentPlaceHolder_ctl01_usSearch_btnCancel">
                  <input style="border:none; margin-left:5px;" type="submit" class="search_button_chitiet" tabindex="18" id="ctl00_ContentPlaceHolder_ctl01_usSearch_btnSearch" value="Tìm kiếm">
                  
                </li>
          </ul>
            </div>
      </div>