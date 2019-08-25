
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
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG SÁCH</b></div>
       <br>
      
          <?php echo validation_errors();?>

          <?php echo form_open_multipart('sach/update_new/'.$du_lieu['MaSach'].'.html');?> 

    <input type="hidden" name="masach" value="<?php echo $du_lieu['MaSach'];?>">
    <label ><b>Tên sách</b></label>
    <input type="text" placeholder="Tên sách" name="tensach"  value='<?php echo $du_lieu['TenSach'];?>'>
    
    <label ><b>GiaBia</b></label>
    <input type="number" placeholder="GiaBia" name="giabia" value='<?php echo $du_lieu['GiaBia'];?>'>
    
    <label ><b>Mota</b></label>
    <input type="text" name="mota"  id="editor" rows="10" cols="80" value='<?php echo $du_lieu['MoTa'];?>'>
    <label><b>Ảnh bìa</b></label>
    <br>
    <img  height='80px' width='100px' src="<?php echo base_url();?>thuvien/images/sach/<?php echo$du_lieu['AnhBia']; ?>">
    <input type="file" name="anhbia" value="" >
    <label ><b>Năm xuất bản</b></label>
    <input type="date" placeholder="yy/mm/dd" name="namxuatban"  value='<?php echo $du_lieu['NamXuatBan'];?>'>

       <label ><b>Ngày vào kho</b></label>
    <input type="date" placeholder="yy/mm/dd" name="ngayvaokho" value='<?php echo $du_lieu['NgayVaoKho'];?>' > 

    <label ><b>Số lượng</b></label>
    <input type="number" placeholder="Số lượng" name="soluong"  value='<?php echo $du_lieu['SoLuong'];?>'>

    <label ><b>Mã nhà xuất bản</b></label>
    <select name='manxb'>
     <?php
       foreach($nhaxuatbans as $items):
    ?>
                    <option <?php if($items['MaNXB']==$du_lieu['MaNXB']) {echo "selected='selected'";}?> value='<?php echo $items['MaNXB']?>'>
                        <?php
                    echo $items['TenNXB'];
                    ?>
                    </option>
     <?php
         endforeach
     ?>
    </select>
     <label ><b>Mã chủ đề</b></label>
     <select name='machude'>
     <?php
       foreach($chudes as $items):
    ?>
                    <option <?php if($items['MaChuDe']==$du_lieu['MaChuDe']) {echo "selected='selected'";}?> value='<?php echo $items['MaChuDe'];?>'>
                        <?php
                    echo $items['TenChuDe'];
                    ?>
                    </option>
     <?php
            endforeach
     ?>
    </select>
     <label ><b>Mã tác giả</b></label>
     <select name='matacgia'>
     <?php
        foreach($tacgias as $items):
    ?>
                    <option <?php if($items['MaTacGia']==$du_lieu['MaTacGia']) {echo "selected='selected'";}?> value='<?php echo $items['MaTacGia']?>'>
                        <?php
                    echo $items['TenTacGia'];
                    ?>
                    </option>
     <?php
    endforeach
     ?>
    </select>
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghichu" name="ghichu" value='<?php echo $du_lieu['GhiChu'];?>'>
    <label ><b>Tình trạng</b></label>
             <select name="tinhtrang" style="margin-top:10px;"> 
                    <?php
          if($du_lieu['TinhTrang']==1){
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

<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace( 'editor' );// tham số là biến name của textarea
</script>
