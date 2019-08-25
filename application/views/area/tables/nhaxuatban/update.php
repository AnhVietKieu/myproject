
 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG NHÀ XUẤT BẢN</b></div>
       <br>
       
    <?php echo validation_errors();?>

    <?php echo form_open('nhaxuatban/update_new');?>
    
    <input type="hidden" name="manhaxuatban" value="<?php echo $update_nhaxuatban['MaNXB'];?>">
    <label ><b>Tên nhà xuất bản</b></label>
    <input type="text" name="tennhaxuatban"  value='<?php echo $update_nhaxuatban['TenNXB'];?>'>
    <label ><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="diachi"  value='<?php echo $update_nhaxuatban['DiaChi'];?>'>
    <label ><b>Điện thoại</b></label>
    <input type="number" placeholder="Điện thoại" name="dienthoai"  value='<?php echo $update_nhaxuatban['DienThoai'];?>'>
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghi chú" name="ghichu"  value='<?php echo$update_nhaxuatban['GhiChu'];?>'>
    <label ><b>Tình trạng</b></label>
    <br>
             <select name="tinhtrang" style="margin-top:10px;"> 
			       <?php
          if($du_lieu['TinhTrang']==1){
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
