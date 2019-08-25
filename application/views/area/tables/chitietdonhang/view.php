<?php
if(isset($_SESSION['chitietdonhang'])){
?>
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> <?php echo $_SESSION['chitietdonhang'];?>
</div>
<?php
}
?>


<div class='panel panel-default'>
   <div class='panel-heading' style='background-color:#E0F0D9;'><b style='font-size:30px;'>Bảng chi tiết đơn hàng</b></div>
    	<table class='table' border=1px>
		  <thead>
		     <tr style='background-color:#DAEDF7;'>
                <th width:200px height:100px;>Mã đơn hàng</th>
                <th width:200px height:100px;>Mã sách</th>
                <th width:200px height:100px;>Số lượng</th>
                <th width:200px height:100px;>Đơn giá</th>
                <th width:200px height:100px;>Ghi chú</th>
                <th width:200px height:100px;>Tình trạng</th>
                <th width:200px height:100px;>Sửa thông tin</th>
                <th width:200px height:100px;>Xoá thông tin </th>
      	     </tr>
	     </thead>
	   <tbody>
	   	<?php
	        foreach ($chitietdonhangs as $du_lieu):
	    ?>
				  <tr>
			         <td width:200px height:100px;>
			         	<?php
                   echo $du_lieu['MaDonHang'];
                   ?>
			         </td width:200px height:100px>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['MaSach'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['SoLuong'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['DonGia'];
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
				     <a class="btn btn-default" href="<?php echo base_url();?>update-chi-tiet-don-hang/<?php echo $du_lieu['MaDonHang'];?>.html" >Sửa
				     </td width:200px height:100px;>
				      <td width:200px height:100px;>
				      <a class="btn btn-default" href="<?php echo base_url();?>delete-chi-tiet-don-hang/<?php echo $du_lieu['MaDonHang'];?>.html" onclick="confirm('Bạn có thực sự muốn xóa')">Xoá
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