
 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG CHI TIÊT ĐƠN HÀNG</b></div>
       <br>
      <?php echo validation_errors();?>

      <?php echo form_open('chitietdonhang/update_new');?>

       
    <input type="hidden" name="madonhang" value="<?php echo $update_chitietdonhang['MaDonHang'];?>">
    <label ><b>Số lượng </b></label>
    <input type="number" placeholder="Số lượng" name="soluong" value='<?php echo $update_chitietdonhang['SoLuong'];?>'>

    <label ><b>Đơn giá</b></label>
    <input type="number" placeholder="Đơn giá" name="dongia" value='<?php echo $update_chitietdonhang['DonGia'];?>'>

    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="ghi chú" name="ghichu"  value='<?php echo $update_chitietdonhang['GhiChu'];?>'>

    <label ><b>Tình trạng</b></label>
             <select name="tinhtrang" style="margin-top:10px;"> 
			       <?php
          if($update_chitietdonhang['TinhTrang']=='Có'){
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
</div>
</div>
</div>
