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

    <?php echo form_open('chude/update_new')?>

 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
       <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">UPDATE BẢNG CHỦ ĐỀ</b></div>
       <br>
      
    <input type="hidden" name="machude" value="<?php echo $update_chude['MaChuDe'];?>">
    <label ><b>Tên chủ đề</b></label>
    <input type="text" placeholder="Tên chủ đề" name="tenchude" value='<?php echo $update_chude['TenChuDe'];?>'>
    <label ><b>Ghi chú</b></label>
    <input type="text" placeholder="Ghi chú" name="ghichu" value='<?php echo $update_chude['GhiChu'];?>'>
        <label ><b>Thế loại</b></label>
    <br>
    <select name='theloai' style='margin-top:10px;'>
          <?php
          if($update_chude['TheLoai']=="1"){
            echo"<option selected='selected' value='1'>";
            echo"Sách";
            echo"</option>";
            echo"<option  value='2'>";
            echo "Truyện tranh";
            echo"</option>";
          }else{
            echo"<option selected='selected' value='2'>";
            echo"Truyện tranh";
            echo"</option>";
            echo"<option  value='1'>";
            echo "Sách";
            echo"</option>";
             }
          ?>
                    </select>    
                    <br>      
    <label ><b>Tình trạng</b></label>
    <br>
    <select name='tinhtrang' style='margin-top:10px;'>
          <?php
          if($update_chude['TinhTrang']=="Có"){
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
                    <br>      
         
    <button type="submit" name="Them" style="width:100px; padding: 10px; margin-top: 10px;">Cập nhập</button>
    </form>
  </div>
</div>
</div>
</form>
