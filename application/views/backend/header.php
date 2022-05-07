<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> <?php echo $system_title = $this->db->get_where('settings' , array('type'=>'system_title'))->row()->description; ?></title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="<?php echo base_url(); ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="<?php echo base_url(); ?>assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="<?php echo base_url(); ?>assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="<?php echo base_url(); ?>assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="<?php echo base_url(); ?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="<?php echo base_url(); ?>assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="<?php echo base_url(); ?>assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="<?php echo base_url(); ?>assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="<?php echo base_url(); ?>assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <link href="<?php echo base_url(); ?>optimum/css/style.css" rel="stylesheet">
      <link href="<?php echo base_url();?>optimum/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
      <!-- Theme style rtl -->
      <!--<link href="<?php echo base_url(); ?>assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
         <style>
           .error {
              color: red;
            }
         </style>
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="index.html" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="<?php echo base_url(); ?>assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <!--<img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt=""> -->
               <h2 style="color: #fff;"><?php echo $system_title = $this->db->get_where('settings' , array('type'=>'system_title'))->row()->description; ?></h2>
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                 <button type="button" class="close">×</button>
                 <form>
                   <input type="search" value="" placeholder="Search.." />
                   <button type="submit" class="btn btn-add">Search...</button>
                </form>
             </div>
             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                    
               
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <?php
                            $key = $this->session->userdata('login_type') . '_id';
                            $face_file = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key) . '.jpg';
                            if (!file_exists($face_file)) {
                                $face_file = 'uploads/default.jpg';                                 
                            }
                            ?>
                         <img src="<?php echo base_url() . $face_file;?>" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="<?php echo base_url(); ?>admin/manage_profile">
                              <i class="fa fa-user"></i> My Profile</a>
                           </li>
                           
                           <li><a href="<?php echo base_url(); ?>login/logout">
                              <i class="fa fa-sign-out"></i>Logout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
              
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                   <li class="treeview">
                     <a href="#">
                         <?php
                            $key = $this->session->userdata('login_type') . '_id';
                            $face_file = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key) . '.jpg';
                            if (!file_exists($face_file)) {
                                $face_file = 'uploads/default.jpg';                                 
                            }
                            ?>
                    <img src="<?php echo base_url() . $face_file;?>"  class="img-circle" width="45" height="45" alt="user">
                     <span> <?php 
                                $account_type   =   $this->session->userdata('login_type');
                                $account_id     =   $account_type.'_id';
                                $name           =   $this->crud_model->get_type_name_by_id($account_type , $this->session->userdata($account_id), 'name');
                                echo $name;
                                ?>
</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?php echo base_url(); ?>admin/manage_profile">My Profile</a></li>
                        
                        <li><a href="<?php echo base_url(); ?>login/logout">Logout</a></li>
                     </ul>
                  </li>
                   
                  <li class="active">
                     <a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                 
               
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>
           <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                 
             
          
                <div class="row bg-title"> 
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                          <div class="header-icon">
                            <i class="fa fa-dashboard"></i>
                        </div>
                       
                         <div class="header-title">
                        <h1><?php echo $page_title;?></h1>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-info btn-sm pull-right m-l-20 btn-rounded hidden-xs hidden-sm waves-effect waves-light">School website</a>
                        <ol class="breadcrumb">
                            <li><a href=""><?php echo $system_name;?></a></li>
                            <li class="active"><?php echo date('d-m-Y H:i');?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
               

            </section>
              
            
            
           