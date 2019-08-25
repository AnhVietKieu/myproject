<?php
if($this->session->flashdata('user_fail')){
?>
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning! Đăng nhập không thành công </strong>
</div>
<?php
}
?>
 <?php echo validation_errors();?>

 <?php echo form_open('welcome/login');?>


<div class="clearfix"></div>
   <div class="container_fullwidth">
     <div class="container">

<div class="form-horizontal">
 <div class="container" style="width: 50%;">
  <div class="panel-group">
    <div class="panel panel-success">
      <div class="panel-heading" style="margin-top: 40px;"><b>ĐĂNG NHẬP TÀI KHOẢN</b></div>
      <div class="panel-body">
    
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
      <label class="control-label col-sm-4"></label>
      <div class="col-sm-6">
      <button type="submit" name="dangky" class="btn btn-success btn-lg">Đăng nhập</button>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
</form> 
<div class="clearfix"></div>
</div>
</div>
