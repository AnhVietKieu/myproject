
<?php
if(isset($err)){
?>
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> <?php echo $err;?>
</div>
<?php
}
?>
    <?php echo validation_errors();?>

    <?php echo form_open('nhaxuatban/create')?>
 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
         <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">THÊM BẢNG NHÀ XUẤT BẢN</b></div>
         <br>
    <label for="tennhaxuatban"><b>Tên nhà xuất bản</b></label>
    <input type="text" name="tennhaxuatban" required>
    <label for="diachi"><b>Địa chỉ</b></label>
    <input type="text" placeholder="Địa chỉ" name="diachi" required>
    <label for="dienthoai"><b>Điện thoại</b></label>
    <input type="number" placeholder="Điện thoại" name="dienthoai" required>
    <label for="ghichu"><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghi chú" name="ghichu" required>
    <label for="tinhtrang"><b>Tình trạng</b></label>
    <br>
             <select name="tinhtrang" style="margin-top:10px;"> 
			        <option valu="Có">Có</option>
			            <option value="Không">Không</option>
		        </select>    
		        <br>    
     <button type="submit" name="nhaxuatban" class="btn  btn-lg" style="background-color: #468CC8; margin-left: 500px; color: white;"><b>Cập nhập</b></button>
</div>
</div>
</div>
</form>