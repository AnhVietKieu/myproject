
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

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


<input id="myInput" type="text" placeholder="Search my book ..." style="width: 500px; float: right;">
<p style="padding: 40px;"></p>

<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#E0F0D9;"><b style="font-size:30px;">Bảng sách</b></div>
	<table class="table" border=2px >
		<thead>
		<tr style='background-color:#DAEDF7;'>
            <th width:20px height:200px;>Mã sách</th>
            <th width:20px height:200px;>Tên sách</th>
            <th width:20px height:200px;>Giá Bìa</th>
            <th width:20px height:200px;>Mô tả</th>
            <th width:20px height:200px;>Ảnh Bìa</th>
            <th width:20px height:200px;>Năm xuất bản</th>
            <th width:20px height:200px;>Ngày vào kho</th>
            <th width:20px height:200px;>Số lượng </th>
            <th width:20px height:200px;>Mã nhà sản xuất</th>
            <th width:20px height:200px;>Mã chủ đề</th>
            <th width:20px height:200px;>Mã tác giả</th>
            <th width:20px height:200px;>Tình trạng</th>
            <th width:20px height:200px;>Sửa thông tin</th>
            <th width:20px height:200px;>Xoá thông tin </th>
      	    </tr>
	</thead>
      <?php
           foreach($sachs as $sach):

                  ?>
                  <tbody  id="myTable">
                        <tr>
                        <td width:20px height:200px;>
                               <?php echo $sach['MaSach'];?>
                        </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <?php
                               echo $sach['TenSach'];
                               ?>
                         </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <?php
                               echo $sach['GiaBia'];
                               ?>
                        </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <div style="height: 200px; overflow: auto;">
                              <?php
                               echo $sach['MoTa'];
                               ?>
                               </div>
                              </td width:20px height:200px;>
                        <td style="width:500px;">
                              <img width="200px" src="<?php echo base_url();?>thuvien/images/sach/<?php echo$sach['AnhBia']; ?>">
                              
                        </td>
                        <td width:20px height:200px;>
                              <?php
                               echo $sach['NamXuatBan'];
                               ?>
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <?php
                               echo $sach['NgayVaoKho'];
                               ?>
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <?php
                               echo $sach['SoLuong'];
                               ?>
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <?php
                               echo $sach['MaNXB'];
                               ?>
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <?php
                               echo $sach['MaChuDe'];
                               ?>
                              </td width:20px height:200px;>
                        <td width:20px height:200px;>
                              <?php
                               echo $sach['MaTacGia'];
                               ?>
                              </td width:20px height:200px;>
                       
                        <td width:20px height:200px;>
                              <?php
                              echo $sach['TinhTrang'];
                              ?>
                        </td width:20px height:200px;>
                        <td width:20px height:200px;>
                             <a  class="btn btn-default" href="<?php echo base_url();?>update-sach/<?php echo $sach['MaSach'];?>.html">Sửa
                        </td width:20px height:200px;>
                        <td width:20px height:200px;>
                             <a class="btn btn-default" href="<?php echo base_url();?>delete-sach/<?php echo $sach['MaSach'];?>.html" onclick="confirm('Bạn có thực sự muốn xóa')" >Xoá</a>
                        </td width:20px height:200px;>
                        </tr>
                      
                              <?php
                                endforeach
                                 ?>
      </tbody>
</table>

 <div class="pager" >
                    <ul>
                        <li><?php echo $pagination;?></li>
                    </ul>
                  </div>
</div>
</body>
</html>