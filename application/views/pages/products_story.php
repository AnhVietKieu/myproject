
      <div class="clearfix"></div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="category leftbar">
                <h3 class="title" style="color: red;">
                  Sách
                </h3>
                <ul>
                   <?php foreach($menubooks as $menubook):?>
                         <li><a href="<?php echo base_url();?>category/<?php echo $menubook['MaLink'];?>.html"><?php echo $menubook['TenChuDe'];?></a></li>
                         <?php endforeach?>


                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="branch leftbar">
                <h3 class="title" style="color: red;">
                  Truyện tranh
                </h3>
                <ul>
                    
                   <?php foreach($menustorys as $menustory):?>
                       <li><a href="<?php echo base_url();?>category/<?php echo $menustory['MaLink'];?>.html"><?php echo $menustory['TenChuDe'];?></a></li>
                       <?php endforeach?>

                </ul>
              </div>
              <div class="clearfix">
              </div>
              <!--
              <div class="price-filter leftbar">
                <h3 class="title">
                  Price
                </h3>
                <form class="pricing">
                  <label>
                    $ 
                    <input type="number">
                  </label>
                  <input type="submit" value="Go">
                </form>
              </div>
              <div class="clearfix">
              </div>
              -->
              
             
            </div>
            <div class="col-md-9">
              
              <div class="clearfix">
              </div>
              <div class="products-grid">
               <div class="pager" id="country_table">
                    <ul>
                        <li><?php echo $pagination;?></li>
                    </ul>
                  </div>
                  
                </div>
                <div class="clearfix">
                </div>
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

                <div class="clearfix">
                </div>
                <div class="toolbar">
                 
                  </div>
                   <div class="pager" id="country_table">
                    <ul>
                        <li><?php echo $pagination;?></li>
                    </ul>
                  </div>
                </div>
                <div class="clearfix">
                </div>
              </div>
            </div>
          </div>
  <div class="clearfix"></div>
      </div>
          </div>

     