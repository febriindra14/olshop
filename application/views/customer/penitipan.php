<!-- 
    Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                   <a href="http://<?php echo ''.$config['share1'];?>"><span class="icon-twitter"></span></a>
                    <a href="http://<?php echo ''.$config['share2'];?>"><span class="icon-facebook"></span></a>
                    <a href="http://<?php echo ''.$config['share3'];?>"><span class="icon-instagram"></span></a>
                </div>
                <a class="active" href="<?php echo base_url('index.php/customer');?>"> <span class="icon-home"></span> Home</a> 
                <a href="<?php echo base_url('index.php/customer/akunku')?>"><span class="icon-user"></span> My Account</a> 
                <a href="<?php echo base_url('index.php/customer/register')?>"><span class="icon-edit"></span> Free Register </a> 
                <a href="<?php echo base_url('index.php/customer/kontak')?>"><span class="icon-envelope"></span> Contact us</a>
                <a href="<?php echo base_url('index.php/customer/keranjang')?>"><span class="icon-shopping-cart"></span> <?php echo $jumlah->num_rows(); ?> items <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
                <a href="<?php echo base_url('index.php/login_customer/logout')?>" >Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- -->

<div class="span12">

    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/customer')?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Konfirmasi tertunda</li>
    </ul>

    <div class="well">
   <h3>Penitipan</h3>
  <?php 
  if (!empty($titip)) {
  $no = 1;
  foreach ($titip as $key => $row) { ?>
    <div class="row-fluid">  
        <div class="span1">
            <h2><strong> <?php echo $no; ?>. </strong></h2>
        </div>
        <div class="span7">
            <h4>Order : <?php echo $row['tgl_order']; ?></h4>
             <p>Kode Order   : <?php echo $row['id_order']; ?>
             <br>Total Bayar : Rp. <?php echo number_format($row['total_bayar'],0,'.','.'); ?> </p>
        </div>

    	  <div class="span4 alignR">
          <div class="form-horizontal qtyFrm">
            <h3>Status : <?php echo $row['keterangan']; ?></h3>
            <div class="btn-group">
             <a href="<?php echo base_url('index.php/customer/rekonfirm/').$row['id_order']?>" class="shopBtn btn-large pull-right">Konfirmasi</a>
            </div>
          </div>
        </div>

    </div>    
    
    <?php 
          $no++;  } 
        } else {
          echo "<h4 style='color: black;'><center> <-- Gak ada --> </center></h4>";
          }  ?>            
        </div>
</div>     