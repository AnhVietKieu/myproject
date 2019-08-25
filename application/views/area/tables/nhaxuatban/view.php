<?php
if(isset($_SESSION['nhaxuatban'])){
?>
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> <?php echo $_SESSION['nhaxuatban'];?>
</div>
<?php
}
?>

<div class='panel panel-default'>
   <div class='panel-heading' style='background-color:#E0F0D9;'><b style='font-size:30px;'>Bảng nhà xuất bản</b></div>
    	<table class='table' border=1px>
		  <thead>
		     <tr style='background-color:#DAEDF7;'>
                <th width:200px height:100px;>Mã nhà xuất bản</th>
                <th width:200px height:100px;>Tên nhà xuất bản</th>
                <th width:200px height:100px;>Địa chỉ</th>
                <th width:200px height:100px;>Điên thoại</th>
                <th width:200px height:100px;>Ghi chú</th>
                <th width:200px height:100px;>Tình trạng</th>
                <th width:200px height:100px;>Sửa thông tin</th>
                <th width:200px height:100px;>Xoá thông tin </th>
      	     </tr>
	     </thead>
	   <tbody>
	   	<?php
	         foreach($nhaxuatbans as $du_lieu):
			?>
				  <tr>
			         <td width:200px height:100px;>
			         	<?php
                   echo $du_lieu['MaNXB'];
                   ?>
			         </td width:200px height:100px>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['TenNXB'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['DiaChi'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['DienThoai'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['GhiChu'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['TinhTrang'];
					?>
				    </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	 <a class="btn btn-default" href="<?php echo base_url();?>update-nha-xuat-ban/<?php echo $du_lieu['MaNXB'];?>.html">Sửa
				     </td width:200px height:100px;>
				      <td width:200px height:100px;>
				      <a class="btn btn-default" href="<?php echo base_url();?>delete-nha-xuat-ban/<?php echo $du_lieu['MaNXB'];?>.html" onclick="confirm('Bạn có thực sự muốn xóa')">Xoá
				     </td width:200px height:100px;>
				    </tr>
	             <?php
	                endforeach
	             ?>
	 	   </tbody>
	    </table> 
</div>
</body>
</html>
