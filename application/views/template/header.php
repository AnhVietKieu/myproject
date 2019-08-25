
	<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="http://localhost:8090/thuvien/images/favicon.png">
      <title>Welcome to BookStore</title>
      <link href="http://localhost:8090/thuvien/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="http://localhost:8090/thuvien/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="http://localhost:8090/thuvien/css/flexslider.css" type="text/css" media="screen"/>
      <link href="http://localhost:8090/thuvien/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="http://localhost:8090/thuvien/css/style.css" rel="stylesheet">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" type="text/css" href="http://localhost:8090/thuvien/images/products">
       
   <style type="text/css">
       div.gallery {
    margin:16px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
    height: 340px;
    opacity: 1;
    border-radius: 0px 0px 15px 15px;
    box-shadow: 1px 1px 1px 1px #B3B5BC;
   }

div.gallery:hover {
     box-shadow: 10px 10px 5px grey;
     opacity: 0.5;
}

div.gallery img {
    width: 100%;
    height: 248px;
}

div.desc {
    padding: 15px;
    text-align: center;
}


   </style>
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                                       </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           
                           
                           <div class="col-md-3" style="float: right;">
                              <ul class="usermenu">

                                  <?php if($this->session->userdata('name')){?>
                                      <li><a style="color: red;"><?php echo $this->session->userdata('name'); ?></a></li>
                                      <?php 
                                            }
                                            else
                                            { 
                                      ?>

                                         <li><a href="<?php echo base_url();?>login.html" class="log">Đăng nhập</a></li>
                                         <?php 
                                              }
                                        ?>
                                          
                                          <?php if(!$this->session->userdata('name')){?>
                                      <li><a href="<?php echo base_url();?>register.html">Đăng ký</a></li>
                                    <?php }?>

                                    <?php if($this->session->userdata('name')) {?>
                                      <li><a href="<?php echo base_url();?>logout.html" class="reg">Đăng suất</a></li>
                                    <?php }?>

                              </ul>
                           </div>
                        </div>
                     </div>
                    
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="<?php echo base_url();?>index.html" class="dropdown-toggle">Trang chủ</a>
                  
                              </li>
                              <li><a href="<?php echo base_url();?>product-book/pages/1">Sách</a></li>
                              <li><a href="<?php echo base_url();?>product-story/pages/1">Truyện tranh</a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục</a>
                                 <div class="dropdown-menu mega-menu">

                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             
                                             <?php foreach($menubooks as $menubook):?>
                                                 <li><a href="<?php echo base_url();?>category/<?php echo $menubook['MaLink'];?>.html"><?php echo $menubook['TenChuDe'];?></a></li>
                                                 <?php endforeach?>

                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                            
                                             <?php foreach($menustorys as $menustory):?>
                                                 <li><a href="<?php echo base_url();?>category/<?php echo $menustory['MaLink'];?>.html"><?php echo $menustory['TenChuDe'];?></a></li>
                                                 <?php endforeach?>

                                          </ul>
                                       </div>
                                    </div>
                              
                                 </div>
                              </li>
                              <li><a href="<?php echo base_url();?>contact.html">Liên lạc</a></li>

                              <li>
                                  <div >
                                  <?php echo form_open('search');?>
                                   <div class="form-group">
                                       <input type="hidden"  value="" >
                                            <input type="text" class="form-control" size="20" placeholder="Search" name="timkiem" value="" required="">
                                  </div>
                                     </form>
                                     <?php echo form_close();?>
                                </div>   
                              </li>
                              <li >
                              <a href="<?php echo base_url();?>giohang.html" class="cart-icon">Giỏ hàng <span class="cart_no"></span></a>
                              <ul class="option-cart-item">
                                 <li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


