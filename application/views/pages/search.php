<div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">

<div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Search </strong> Book:<span style="text-decoration: underline; color: red;"> </span></h3>
                
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <?php if(isset($err)){?>

                              <p style="font-size: 20px;font-weight: inherit; color: red;"><?php echo $err;?></p>

                                    <?php } ?>

                           <?php foreach($searchs as $homes):?>
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
          </div>
    </div>