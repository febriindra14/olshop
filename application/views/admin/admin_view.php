<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; <a href="<?php echo base_url('login/logout')?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url(); ?>assets/backend/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>	
                    <li>
                        <a 
                        href="<?php echo base_url('utama/admin')?>"><i class="fa fa-dashboard fa-2x"></i>Dashboard</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('utama/admin/tampil
                        ')?>"><i class="fa fa-user fa-2x"></i>User</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('utama/admin/halaman
                        ')?>"><i class="fa fa-bookmark fa-2x"></i>Halaman</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('utama/admin/kategori_produk
                        ')?>"><i class="fa fa-align-justify fa-2x"></i>Kategori produk</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('utama/admin/merk
                        ')?>"><i class="fa fa-qrcode fa-2x"></i>Merk produk</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('utama/admin/produk
                        ')?>"><i class="fa fa-shopping-cart fa-2x"></i>Produk</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('utama/admin/customer
                        ')?>"><i class="fa fa-user fa-2x"></i>Customer</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('utama/admin/order
                        ')?>"><i class="fa fa-thumbs-up fa-2x"></i>Order</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('utama/admin/konfigurasi_web
                        ')?>"><i class="fa fa-edit fa-2x"></i>Konfigurasi web</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12"> 
                    </div>
                </div>              
              <?php echo $isi; ?>
           
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
     <script src="<?php echo base_url(); ?>assets/backend/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url(); ?>assets/backend/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/custom.js"></script>
    
</body>
</html>