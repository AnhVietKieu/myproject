<div class="clearfix"></div>
   <div class="container_fullwidth">
		<div class="col-sm-9" style="width: 100%;" >
		      <div class="panel panel-default">
		        <div class="panel-body">
				<!-- Hình ảnh -->			
					<div class="col-sm-6">
					<div class="panel panel-success">
						<div class="panel-heading"><b>ẢNH BÌA SÁCH</b></div>
						<div class="panel-body" style="margin-left: 150px;">
							<img src="<?php echo base_url(); echo "thuvien/images/sach/".$chitietsach['AnhBia'];?>"  class="img-responsive" data-toggle="modal" data-target="#AnhBiaSach" style="width:50%" alt="Image" >
							<!-- Hiệu ứng hộp hình ảnh -->
								<div class="modal fade" id="AnhBiaSach" role="dialog">
								<div class="modal-dialog ">
								<div class="modal-content">
									<div class="modal-header"> <!-- Tiêu đề -->
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Sản phẩm</h4>
									</div>
									<div class="modal-body"> <!-- Nội dung -->
										<img src="<?php echo base_url(); echo "thuvien/images/sach/".$chitietsach['AnhBia'];?>" class="img-responsive"  alt="Image">
									</div>
								</div>
								</div>
								</div>
						</div>
						<div class="panel-footer" data-toggle="modal" data-target="#AnhBiaSach" >Nhấn để xem hình lớn</a></div>
					</div>
					</div>
					
					<!-- Thông tin -->	
					<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="panel-heading"><b>Thông tin sách</b></div>
						<div class="panel-body">
							<div style="height:30px;">Tên sách: <span style="color:green"><?php echo $chitietsach['TenSach'];?></span> </div>
							<div style="height:30px;">Tác giả: <?php echo $chitietsach['TenTacGia'];?></div>
							<div style="height:30px;">Giá bìa: <span style="color:red"><?php echo $chitietsach['GiaBia']; echo " ₫";?></span></div>
							<hr>
				
							<div style="height:30px;">Chủ đề: <span style="color:orange"><?php echo $chitietsach['TenChuDe'];?></span></div>
							<div style="height:30px;">Nhà xuất bản: <span style="color:"><?php echo $chitietsach['TenNXB'];?></span></div>
					
							<div style="height:30px;">Năm xuất bản: <span style="color:"><?php echo $chitietsach['NamXuatBan'];?></span></div>
						
						</div>
						<!-- Giỏ hàng 	-->	
						<div class="panel-footer">
						<form>
							<input type="hidden" name="so_luong" value="1">
							<input type='hidden' name='thamso' value='gio_hang' >
							<input type='hidden' name='id' value='<?php echo $id?>'>
							<div class="input-group">
							<span class="input-group-addon">Số lượng còn lại:</span>
							<input type="text" name='' readonly style="background-color: white;" 
							value='<?php if($chitietsach['SoLuong']!="")
							{
								if($this->session->userdata(md5($chitietsach['MaSach'])))
								{
									echo $chitietsach['SoLuong']-$this->session->userdata(md5($chitietsach['MaSach']));
								}else
								{
									echo $chitietsach['SoLuong'];
								}
								
							}else{echo"Hết hàng";}?>' class="form-control"  >
							</div>
							<br>

							<?php if(!isset($chitietsach['SoLuong'])==0){
								if($chitietsach['SoLuong']-$this->session->userdata(md5($chitietsach['MaSach']))!=0){
								 
								 $this->session->set_userdata('product',$chitietsach['MaSach']);
								 $this->session->set_userdata('id_sanpham',md5($chitietsach['MaSach']));
						    ?>

							  <a href="<?php echo base_url();?>insert" class="btn btn-success" style="padding: 8px;">
		                       <span class="glyphicon glyphicon-shopping-cart"></span>Thêm vào giỏ hàng </a>
							<?php
						}
					}
							?>
							
						</form>
						</div>
					</div>
					</div>

					
					<!-- Mô tả -->	
					<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading"><h2>GIỚI THIỆU SÁCH</h2></div>
						<div class="panel-body">
						<h3 style="color:orange"><?php echo $chitietsach['TenSach'];?></h3>
						<div style="height:200px; overflow: scroll;"><span style="size: 15px;"><?php echo $chitietsach['MoTa'];?></span></div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

		 <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Sách : </strong><span style="text-decoration: underline;">Liên Quan </span></h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">

                              <?php foreach($products as $home):?>
                                 <div class="gallery">
                                   <a href='<?php echo base_url();?>product-detail/<?php echo $home['MaLink'];?>.html' style="text-align: center; text-decoration: none;">
                                          <img  src='<?php echo base_url();?>thuvien/images/sach/<?php echo $home['AnhBia']; ?>' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;"><?php echo $home['TenSach']; ?></span><br>
                                   <span style="text-align:center; color: red"><?php echo number_format($home['GiaBia'],0,",",".") ?> vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                  <?php endforeach?>


                     </li>
                     	</div>
                     </div>

		<div class="clearfix"></div>
      </div>
          </div>

