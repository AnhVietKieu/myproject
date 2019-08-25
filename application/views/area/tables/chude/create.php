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

    <?php echo form_open('chude/create')?>

 <div class="container">
  <div class="panel-group">
    <div class="panel panel-success">
    	 <div class="panel-heading" style="margin-top: 40px; text-align: center;"><b style="font-size: 30px;">THÊM BẢNG CHỦ ĐỀ</b></div>
    	 <br>

    <label for="tenchude" ><b>Tên chủ đề</b></label>
    <input type="text" placeholder="Tên chủ đề" name="tenchude"  >
    <label for="ghichu" ><b>Ghi Chú</b></label>
    <input type="text" placeholder="Ghi chú" name="ghichu"  >
    <label for="tinhtrang"><b>Thể loại</b></label>
     <select name="theloai" style="margin-top:10px;"> 
                          <option value = "1">Sách</option>
                              <option value ="2">Truyện tranh</option>
                    </select>   
    <label for="tinhtrang"><b>Tình trạng</b></label>
     <select name="tinhtrang" style="margin-top:10px;"> 
                          <option value = "Có">Có</option>
                              <option value ="Không">Không</option>
                    </select>      
    <button type="submit" name="themchude" class="btn  btn-lg" style="background-color: #468CC8; margin-left: 500px; color: white;"><b>Cập nhập</b></button>
</div>
</div>
</div>
</form>
