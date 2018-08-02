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
<!-- 
Body Section 
-->
	<hr class="soften">
	<div>
		<h2><?php echo ''.$hal['judul'] ;?></h2>
	</div>
	<hr class="soften">
	<div class="row">
		<div class="span8">
		 	<?php echo ''.$hal['deskripsi'];?>
		</div>
		<div class="span4">
			Monday - Friday<br/>
			09:00am - 09:00pm<br/>
			Saturday<br/>
			09:00am - 07:00pm<br/>
			Sunday<br/>
			12:30pm - 06:00pm<br/>
		</div>
	</div>