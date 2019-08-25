 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG TÀI KHOẢN</b></div>
       <br>

      <?php echo validation_errors();?>

    <?php echo form_open('taikhoan/update_new');?>
     
     <input type="hidden" name="manguoidung" value="<?php echo $update_taikhoan['MaNguoiDung'];?>">
    <label ><b>Họ tên</b></label>
    <input type="text" placeholder="Tên họ tên" name="hoten" value='<?php echo $update_taikhoan['HoTen'];?>'>
    <label ><b>Tài khoản</b></label>
    <input type="text" placeholder="Tên tài khoản" name="taikhoan" value='<?php echo$update_taikhoan['TaiKhoan'];?>'>
    <label ><b>Mật khẩu</b></label>
    <input type="password" placeholder="Mật khẩu" name="matkhau" value='<?php echo$update_taikhoan['MatKhau'];?>'>
    <label ><b>Ngày sinh</b></label>
    <input type="datetime" placeholder="yy/mm/dd" name="ngaysinh" value='<?php echo$update_taikhoan['NgaySinh'];?>'>
    <label ><b>Giới tính</b></label>
      <select name="gioitinh" style="margin-top:10px;"> 
               <?php
          if($update_taikhoan['GioiTinh']==1){
            echo"<option selected='selected' value='Nam'>";
            echo"Nam";
            echo"</option>";
            echo"<option  value='Nữ'>";
            echo "Nữ";
            echo"</option>";
          }else{
            echo"<option selected='selected' value='Nữ'>";
            echo"Nữ";
            echo"</option>";
            echo"<option  value='Nam'>";
            echo "Nam";
            echo"</option>";
          }
          ?>
                    </select>    
                    <br>      
    <label ><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="diachi" value='<?php echo$update_taikhoan['DiaChi'];?>'>
    <label ><b>Email</b></label>
    <input type="email" placeholder="Email" name="email" value='<?php echo$update_taikhoan['Email'];?>'>
    <br>
    <label ><b>Điện thoại</b></label>
    <input type="number" placeholder="Điện thoại" name="dienthoai" value='<?php echo$update_taikhoan['DienThoai']?>'>
    <label ><b>Mã quyền hạn</b></label>
    <select name="maquyenhan" style="margin-top:10px;">
              <?php
          if($update_taikhoan['MaQuyenHan']=='Admin'){
            echo"<option selected='selected' value='Admin'>";
            echo"Admin";
            echo"</option>";
            echo"<option  value='User'>";
            echo "Người dùng";
            echo"</option>";
          }else{
            echo"<option selected='selected' value='User'>";
            echo"Người dùng";
            echo"</option>";
            echo"<option  value='Admin'>";
            echo "Admin";
            echo"</option>";
          }
          ?>
                    </select>    
                    <br>            
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghi chú" name="ghichu" value='<?php echo$update_taikhoan['GhiChu']?>'>
    <label ><b>Tình trạng</b></label>
             <select name="tinhtrang" style="margin-top:10px;"> 
			        <?php
          if($update_taikhoan['TinhTrang']==1){
            echo"<option selected='selected' value='Có'>";
            echo"Có";
            echo"</option>";
            echo"<option  value='Không'>";
            echo "Không";
            echo"</option>";
          }else{
            echo"<option selected='selected' value='Không'>";
            echo"Không";
            echo"</option>";
            echo"<option  value='Có'>";
            echo "Có";
            echo"</option>";
          }
          ?>
                    </select>    
                    <br>         
    <button type="submit" name="Them" style="width:100px; padding: 10px; margin-top: 10px;">Cập nhập</button>
    </form>
</div>
</div>
</div>