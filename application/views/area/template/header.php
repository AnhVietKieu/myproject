<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="http://localhost:8089/thu_vien_css/jquery/jquery.js"></script>
  <script src="http://localhost:8089/thu_vien_css/bootstrap/js/bootstrap.min.js"></script>
  <script src="http://localhost:8089/thuvien/ckeditor/ckeditor.js"></script>

     <link href="http://localhost:8090/thuvien/css/style.css" rel="stylesheet">
<link href="http://localhost:8090/thuvien/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
  <link rel="stylesheet" href="http://localhost:8090/thuvien/css/flexslider.css" type="text/css" media="screen"/>
  <link href="http://localhost:8090/thuvien/css/font-awesome.min.css" rel="stylesheet">
  
 
  <style type="text/css">
     input[type=text], input[type=password], input[type=datetime], input[type=number], select,input[type=date], input[type=datetime],select,input[type=Email],textarea,input[type=file] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
  </style>

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>thuvien/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>thuvien/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>thuvien/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo base_url();?>admin/view-sach/pages/1">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </div>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#"><a style="color: red;"><?php echo $this->session->userdata('name'); ?></a></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>logout_admin.html" >Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>admin/view-sach/pages/1">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Thông tin sách</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Edit</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">More products</h6>
          <a class="dropdown-item" href="<?php echo base_url();?>admin/them-tac-gia.html">Thêm tác giả</a>
          <a class="dropdown-item" href="<?php echo base_url();?>admin/them-nha-xuat-ban.html">Thêm nhà xuất bản</a>
          <a class="dropdown-item" href="<?php echo base_url();?>admin/them-chu-de.html">Thêm chủ đề</a>
          <a class="dropdown-item" href="<?php echo base_url();?>admin/them-sach.html">Thêm sách</a>
           <a class="dropdown-item" href="<?php echo base_url();?>admin/them-tai-khoan.html">Thêm tài khoản</a>

          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">View products</h6>
           <a class="dropdown-item" href="<?php echo base_url();?>admin/view-tac-gia.html">View tác giả</a>
            <a class="dropdown-item" href="<?php echo base_url();?>admin/view-nha-xuat-ban.html">View nhà xuất bản</a>
             <a class="dropdown-item" href="<?php echo base_url();?>admin/view-chu-de.html">View chủ đề</a>
             <a class="dropdown-item" href="<?php echo base_url();?>admin/view-tai-khoan.html">View tài khoản</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>admin/view-don-hang.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Đơn hàng</span></a>
      </li>
    
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

       
     