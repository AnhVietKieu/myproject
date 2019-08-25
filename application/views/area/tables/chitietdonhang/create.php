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

 <?php echo form_open('chitietdonhang/create')?>
 
 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
         <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">THÊM BẢNG CHI TIẾT ĐƠN HÀNG</b></div>
         <br>
   <label ><b>Mã đơn hàng</b></label>
    <?php
    echo"<select name='madonhang'>";
   foreach($donhangs as $du_lieu):
    ?>
         <option  value='<?php  echo $du_lieu['MaDonHang'];?>'>
                 <?php
             echo $du_lieu['MaDonHang'];
                 ?>
         </option>
     <?php
         endforeach
     ?>
     <?php
     echo "</select>";
                    ?>
    <label ><b>Mã sách</b></label>
    <?php
    echo"<select name='masach'>";
    foreach($sachs as $du_lieu1):
    ?>
         <option  value='<?php  echo $du_lieu1['MaSach'];?>'>
                 <?php
             echo $du_lieu1['TenSach'];
                 ?>
         </option>
     <?php
       endforeach
     ?>
     <?php
     echo "</select>";
                    ?>

    <label for="soluong"><b>Số lượng </b></label>
    <input type="number" placeholder="Số lượng" name="soluong" required>

    <label for="dongia"><b>Đơn giá</b></label>
    <input type="number" placeholder="Đơn giá" name="dongia" required >

    <label for="ghichu"><b>Ghi chú</b></label>
    <input type="text" placeholder="ghi chú" name="ghichu"  required>

    <label for="tinhtrang"><b>Tình trạng</b></label>
    <br>
             <select name="tinhtrang" style="margin-top:10px;"> 
			        <option value="Có">Có</option>
			            <option value="Không">Không</option>
		        </select>    
		        <br>    
    <button type="submit" name="chitietdonhang" class="btn  btn-lg" style="background-color: #468CC8; margin-left: 500px; color: white;"><b>Cập nhập</b></button>
</div>
</div>
</div>
</form>
