 
 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG ĐƠN HÀNG</b></div>
       <br>

   <?php echo validation_errors();?>

  <?php echo form_open('donhang/update_new');?>
  <input type="hidden" name="madonhang" value="<?php echo $update_donhang['MaDonHang'];?>">
   <label ><b>Đã thanh toán</b></label>
   <select name="dathanhtoan" style="margin-top:10px;"> 
                     <?php
          if($update_donhang['DaThanhToan']=='Có'){
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
     <label ><b>Tình trạng giao hang</b></label>
      <select name="tinhtranggiaohang" style="margin-top:10px;"> 
                 <?php
          if($update_donhang['TinhTrangGiaoHang']=='Có'){
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
    <label ><b>Ngày đặt hàng</b></label>
    <input type="date" placeholder="yy/mm/đ" name="ngaydathang"  value='<?php echo $update_donhang['NgayDatHang'];?>'>
    <label ><b>Ngày giao hàng</b></label>
    <input type="date" placeholder="yy/mm/đ" name="ngaygiaohang"  value='<?php echo $update_donhang['NgayGiaoHang']?>'>
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="ghi chú" name="ghichu"  value='<?php echo $update_donhang['GhiChu']?>'>
    <label ><b>Tình trạng</b></label>
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
    <button type="submit" name="Them" style="width:100px; padding: 10px; margin-top: 10px;">Cập nhập</button>
    </form>
</body>
</html>