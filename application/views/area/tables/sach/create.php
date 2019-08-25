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
 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
    	 <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">THÊM BẢNG SÁCH</b></div>
    	 <br>

          <?php echo validation_errors();?>

          <?php echo form_open_multipart('sach/create');?>
    
    <label ><b>Tên sách</b></label>
    <input type="text" placeholder="Tên sách" name="tensach" required>
    
    <label ><b>GiaBia</b></label>
    <input type="number" placeholder="GiaBia" name="giabia" required>
    
    <label ><b>Mota</b></label>
    <textarea name="mota" required   id="editor1" rows="10" cols="80"></textarea>

    <label><b>Ảnh bìa</b></label>
    <input type="file" name="anhbia" required>

    <label ><b>Năm xuất bản</b></label>
    <input type="date" placeholder="yy/mm/dd" name="namxuatban" required>

       <label ><b>Ngày vào kho</b></label>
    <input type="date" placeholder="yy/mm/dd" name="ngayvaokho" required> 

    <label ><b>Số lượng</b></label>
    <input type="number" placeholder="Số lượng" name="soluong" required>

    <label ><b>Mã nhà xuất bản</b></label>
       <?php
    echo"<select name='manxb'>";
   foreach($nhaxuatbans as $du_lieu):
    ?>
         <option  value='<?php  echo $du_lieu['MaNXB'];?>'>
                 <?php
             echo $du_lieu['TenNXB'];
                 ?>
         </option>
     <?php
       endforeach ?>
       <?php
     echo "</select>";
                    ?>

    <label ><b>Mã chủ đề</b></label>
     <?php
    echo"<select name='machude'>";
   foreach($chudes as $du_lieu1):
    ?>
         <option  value='<?php  echo $du_lieu1['MaChuDe'];?>'>
                 <?php
             echo $du_lieu1['TenChuDe'];
                 ?>
         </option>
     <?php
        endforeach
        ?>
        <?php
     echo "</select>";
                    ?>

    <label ><b>Mã tác giả</b></label>
     <?php
    echo"<select name='matacgia'>";
   foreach($tacgias as $du_lieu2):
    ?>
         <option  value='<?php  echo $du_lieu2['MaTacGia'];?>'>
                 <?php
             echo $du_lieu2['TenTacGia'];
                 ?>
         </option>
     <?php
        endforeach
        ?>
        <?php
     echo "</select>";
                    ?>

    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghichu" name="ghichu" required>

    <label ><b>Tình trạng</b></label>
    <br>
             <select name="tinhtrang" style="margin-top:10px;"> 
                    <option value="Có">Có</option>
                        <option value="Không">Không</option>
                </select>    
                <br>    
    <button type="submit" name="sach" class="btn  btn-lg" style="background-color: #468CC8; margin-left: 500px; color: white;"><b>Cập nhập</b></button>
</div>
</div>
</div>
</form>

<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace( 'editor1' );// tham số là biến name của textarea
</script>

