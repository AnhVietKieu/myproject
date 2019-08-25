<?php
if(isset($_SESSION['donhang'])){
?>
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> <?php echo $_SESSION['donhang'];?>
</div>
<?php
}
?>
<script>
$(document).ready(function(){
  $("#myusername").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myuser tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<input id="myusername" type="text" placeholder="Search my mã đơn hàng ..." style="width: 500px; float: right;">
<p style="padding: 40px;"></p>

<div class='panel panel-default'>
   <div class='panel-heading' style='background-color:#E0F0D9;'><b style='font-size:30px;'>Bảng đơn hàng</b></div>
    	<table class='table' border=1px >
		  <thead>
		     <tr style='background-color:#DAEDF7;'>
                <th width:200px height:100px;>Mã đơn hàng</th>
                <th width:200px height:100px;>Mã người dùng</th>
                <th width:200px height:100px;>Đã thanh toán</th>
                 <th width:200px height:100px;>Tình trạng giao hàng</th>
                  <th width:200px height:100px;>Ngày đặt hàng</th>
                   <th width:200px height:100px;>Ngày giao hàng</th>
                    <th width:200px height:100px;>Ghi chú</th>
                <th width:200px height:100px;>Tình trạng</th>
                <th width:200px height:100px;>Sửa thông tin</th>
                <th width:200px height:100px;>Xoá thông tin </th>
      	     </tr>
	     </thead>
	   <tbody id="myuser">
	   	<?php
	   foreach($donhangs as $du_lieu):
			?>
				  <tr>
			         <td width:200px height:100px;>
			         	<?php
                   echo $du_lieu['MaDonHang'];
                   ?>
			         </td width:200px height:100px>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['MaNguoiDung'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['DaThanhToan'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['TinhTrangGiaoHang'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['NgayDatHang'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['NgayGiaoHang'];
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
				     <a class="btn btn-default" href="<?php echo base_url();?>update-don-hang/<?php echo $du_lieu['MaDonHang'];?>.html">Sửa
				     </td width:200px height:100px;>
				      <td width:200px height:100px;>
				      <a class="btn btn-default" href="<?php echo base_url();?>delete-don-hang/<?php echo $du_lieu['MaDonHang'];?>.html" onclick="confirm('Bạn có thực sự muốn xóa')">Xoá
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
