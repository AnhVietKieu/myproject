<?php 

?>
	<div class="clearfix"></div>
   <div class="container_fullwidth">
   	 <div class="container">

               <div class="featured-products">
                  <h3 class="title"><strong>Category </strong><span style="text-decoration: underline;"><?php echo $chude['TenChuDe'];?></span></h3>
                
                  <ul id="featured">
                     <li>
                        <div class="row">

                           <?php foreach($feature_products as $homes):?>
                                 <div class="gallery">
                                   <a href='<?php echo base_url();?>product-detail/<?php echo $homes['MaLink'];?>.html' style="text-align: center; text-decoration: none;">
                                          <img  src='<?php echo base_url();?>thuvien/images/sach/<?php echo $homes['AnhBia']; ?>' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;"><?php echo $homes['TenSach']; ?></span><br>
                                   <span style="text-align:center; color: red"><?php echo number_format($homes['GiaBia'],0,",",".") ?> vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                  <?php endforeach?>

                           
                        </div>
                     </li>
                  </ul>
               </div>


               <div class="clearfix"></div>
            </div>
          </div>
