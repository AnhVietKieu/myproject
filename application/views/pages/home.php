<div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Featured </strong>Sách </h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">
                      
                              <?php foreach($hot_products1 as $home):?>
                                 <div class="gallery">
                                  <div style="position: absolute;margin-left: 190px; margin-top: 10px;border-radius:50%;color:white; padding: 10px; background-color:#831626">New</div>
                                   <a href='<?php echo base_url();?>product-detail/<?php echo $home['MaLink'];?>.html' style="text-align: center; text-decoration: none;">
                                          <img  src='<?php echo base_url();?>thuvien/images/sach/<?php echo $home['AnhBia']; ?>' class="img-responsive" style="padding: 5px;" alt="Image">
                                   <div class="desc"><span style="width: 200px;"><?php echo $home['TenSach']; ?></span><br>
                                   <span style="text-align:center; color: red"><?php echo number_format($home['GiaBia'],0,",",".") ?> vnđ</span> 
                                          </a>
                                 </div>
                                 </div>
                                  <?php endforeach?>


                     <li>

                        <?php foreach($hot_products2 as $homes):?>
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
               

          
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Featured </strong>Truyện Tranh</h3>
                
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
