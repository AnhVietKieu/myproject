
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
<?php if(isset($erorrs)){?>
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning! Đăng ký không thành công</strong>
</div>
<?php } ?>

<?php echo validation_errors();?>

<?php echo form_open('welcome/register');?>


<div class="clearfix"></div>
<div style="margin-top: 25px;"></div>
<div class="form-horizontal" >
 <div class="container" style="width: 50%;">
  <div class="panel-group">
    <div class="panel panel-success">
      <div class="panel-heading" style="margin-top: 40px;"><b>ĐĂNG KÝ TÀI KHOẢN</b></div>
      <div class="panel-body">

    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Họ và tên:</label>
      <div class="col-sm-7">
      <input type="text" id="hoten" name="hoten" class="form-control"  placeholder="họ và tên" required="">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Tên đăng nhập:</label>
      <div class="col-sm-7">
      <input type="text" id="username" name="username" class="form-control" placeholder="abc" required="">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Mật khẩu:</label>
      <div class="col-sm-7">
      <input type="password" id="pass" name="password" class="form-control" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Ngày sinh</label>
      <div class="col-sm-7">
      <input type="date" id="ngaysinh" name="ngaysinh" class="form-control" required="">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Giới tính:</label>
      <div class="col-sm-7">
      <select name="gioitinh" class="form-control"> 
                    <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
            </select> 
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-3" for="email">Địa chỉ:</label>
      <div class="col-sm-7">
      <input type="text" id="diachi" name="diachi" class="form-control" required="">
      </div>
    </div>

    
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-7">
      <input type="text" id="email" name="email" class="form-control" required="">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-3" for="email">Số điện thoại:</label>
      <div class="col-sm-7">
      <input type="text" name="dienthoai" class="form-control" required="">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-5"></label>
      <div class="col-sm-6">
      <button type="submit" name="dangky" class="btn btn-success btn-lg">Đăng ký</button>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
</form> 
<div style="margin-top: 25px;"></div>
