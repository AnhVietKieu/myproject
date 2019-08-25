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

    <?php echo form_open('donhang/create')?>

 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
         <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">THÊM BẢNG ĐƠN HÀNG</b></div>
         <br>
          <form action="" method="POST" name="frm">
    <label for="manguoidung"><b>Mã người dùng</b></label>
    <?php
    echo "<select name='manguoidung'";
   foreach($taikhoans as $du_lieu):
    ?>

    <option value='<?php  echo $du_lieu['MaNguoiDung'];?>'>
      <?php
      echo $du_lieu['TaiKhoan'];
      ?>
     </option>

    <?php
      endforeach
       ?>
       <?php
         echo "</select>";
    ?>

    <label for="dathanhtoan"><b>Đã thanh toán</b></label>
   <select name="dathanhtoan" style="margin-top:10px;"> 
                    <option value="Có">Có</option>
                        <option value="Không">Không</option>
                </select>

     <label for="tinhtranggiaohang"><b>Tình trạng giao hang</b></label>
      <select name="tinhtranggiaohang" style="margin-top:10px;"> 
                    <option value="Có">Có</option>
                        <option value="Không">Không</option>
                </select>

    <label for="ngaydathang"><b>Ngày đặt hàng</b></label>
    <input type="date" placeholder="yy/mm/đ" name="ngaydathang" required>

    <label for="ngaygiaohang"><b>Ngày giao hàng</b></label>
    <input type="date" placeholder="yy/mm/đ" name="ngaygiaohang" required>

    <label for="ghichu"><b>Ghi chú</b></label>
    <input type="text" placeholder="ghi chú" name="ghichu" >

    <label for="tinhtrang"><b>Tình trạng</b></label>
             <select name="tinhtrang" style="margin-top:10px;"> 
			        <option value="Có">Có</option>
			         <option value="Không">Không</option>
		        </select>    
		        <br>  

     <button type="submit" name="donhang" class="btn  btn-lg" style="background-color: #468CC8; margin-left: 500px; color: white;"><b>Cập nhập</b></button>
</div>
</div>
</div>
</form>
