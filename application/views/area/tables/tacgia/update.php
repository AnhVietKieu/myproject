 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG TÁC GIẢ</b></div>
       <br>

        <?php echo validation_errors();?>

    <?php echo form_open('tacgia/update_new')?>
      
    <input type="hidden" name="matacgia" value="<?php echo $update_tacgia['MaTacGia'];?>">
    <label ><b>Tên tác giả </b></label>
    <input type="text" placeholder="Tên tác giả" name="tentacgia" value='<?php echo $update_tacgia['TenTacGia']?>'>
    <label ><b>Ngày sinh</b></label>
    <input type="datetime" placeholder="ngày sinh" name="ngaysinh" value='<?php  echo $update_tacgia['NgaySinh']?>'>
    <label ><b>Giới tính</b></label>
     <select name="gioitinh" style="margin-top:10px;"> 
                                 <?php
          if($update_tacgia['GioiTinh']==1){
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
    <label ><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="diachi" value='<?php echo $update_tacgia['DiaChi']?>'>  
    <label ><b>Email</b></label>
    <input type="email" placeholder="Email" name="email" value='<?php echo $update_tacgia['Email']?>'>
     <label ><b>Tiểu sử</b></label>
    <input type="text" placeholder="tiểu sử" name="tieusu" value='<?php echo $update_tacgia['TieuSu']?>'> 
    <label ><b>Vị trí</b></label>
    <input type="text" placeholder="tiểu sử" name="vitri" value='<?php echo $update_tacgia['ViTri']?>'>    
    <label ><b>Tình trạng</b></label>
     <select name="tinhtrang" style="margin-top:10px;"> 
                          <?php
          if($update_tacgia['TinhTrang']==1){
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
