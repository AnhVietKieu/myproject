<?php
if(isset($_SESSION['chude'])){
?>
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> <?php echo $_SESSION['chude'];?>
</div>
<?php
}
?>


<div class='panel panel-default'>
   <div class='panel-heading' style='background-color:#E0F0D9;'><b style='font-size:30px;'>Bảng chủ đề</b></div>
    	<table class='table' border=1px>
		  <thead>
		     <tr style='background-color:#DAEDF7;'>
                <th width:200px height:100px;>Mã chủ đề</th>
                <th width:200px height:100px;>Tên chủ đề</th>
                <th width:200px height:100px;>Ghi chú</th>
                 <th width:200px height:100px;>Thể loại</th>
                <th width:200px height:100px;>Tình trạng</th>
                <th width:200px height:100px;>Sửa thông tin</th>
                <th width:200px height:100px;>Xoá thông tin </th>
      	     </tr>
	     </thead>
	   <tbody>
	   	<?php
	  foreach($chudes as $du_lieu):
			?>
				  <tr>
			         <td width:200px height:100px;>
			         	<?php
                   echo $du_lieu['MaChuDe'];
                   ?>
			         </td width:200px height:100px>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['TenChuDe'];
					?>
				     </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['GhiChu'];
					?>
				     </td width:200px height:100px;>

				     <td width:200px height:100px;>
				     	<?php
					 if($du_lieu['TheLoai']=='1')
					 {
					 	echo "Sách";
					 }else{
					 	if($du_lieu['TheLoai']=='2')
					 	{
					 		echo "Truyện tranh";
					 	}
					 }
					?>
				    </td width:200px height:100px;>
				     <td width:200px height:100px;>
				     	<?php
					echo $du_lieu['TinhTrang'];
					?>
				    </td width:200px height:100px;>
				     <td width:200px height:100px;>

				     <a  class="btn btn-default" href="<?php echo base_url();?>update-chu-de/<?php echo $du_lieu['MaChuDe'];?>.html">Sửa

				     </td width:200px height:100px;>
				      <td width:200px height:100px;>
				      <a class="btn btn-default" href="<?php echo base_url();?>delete-chu-de/<?php echo $du_lieu['MaChuDe'];?>.html"  onclick="confirm('Bạn có thực sự muốn xóa')">Xoá
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
