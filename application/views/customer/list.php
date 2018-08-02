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
				<a href="<?php echo base_url('index.php/customer/keranjang')?>"><span class="icon-shopping-cart"></span> <?php echo $jumlah->num_rows(); ?> items  <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
				<a href="<?php echo base_url('index.php/login_customer/logout')?>" >Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- -->

<div id="sidebar" class="span3">
<div class="well well-small">
		<ul class="nav nav-list">

	<?php foreach ($produk as $key => $value) { ?>
	<li><a href="<?php echo base_url('index.php/customer/kategori/'.$value->id_kategori);?>"><span class="icon-chevron-right"></span><?php echo $value->nama_kategori ;?> </a></li>		
	<?php } ?>
	
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="<?php echo base_url('index.php/customer/keranjang')?>"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;"> Rp <?php echo number_format($total,0,",","."); ?> </span></strong></a></li>
	</ul>
</div>

			 <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="<?php echo base_url()?>assets/fronted/assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			
	<?php foreach ($sidebar as $key => $value) { ?>

			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url('index.php/customer/list')?>"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$value->foto?>" alt="">

	<form action="<?php echo base_url('index.php/customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $value->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $value->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $value->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $value->harga ?>">

				<div class="caption">
				  <h4><a class="defaultBtn" href="<?php echo base_url('index.php/customer/detail/').$value->id_produk?>">VIEW</a> <span class="pull-right">Rp. <?php echo number_format($value->harga,0,",","."); ?></span></h4>
				</div>
			  </div>
			</li>
	<?php }?>		
		  </ul>
</div>

<div class="span9">
<div class="well well-small">

<?php foreach ($list as $d) { ?>

	<div class="row-fluid">	  
		<div class="span2">
			<img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$d->foto?>" alt="">
		</div>
		<div class="span6">
			<h5><?php echo $d->nama_produk?></h5>
			<p> <?php echo $d->deskripsi ?> </p>
		</div>
		<div class="span4 alignR">
	
	<form action="<?php echo base_url('index.php/customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $d->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $d->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $d->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $d->harga ?>">

		<h3> Rp. <?php echo number_format($d->harga,0,",","."); ?> </h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
	<h4><button type="submit" class="defaultBtn" title="add to cart"><span class=" icon-shopping-cart"></span> Add to cart </button> 
		 <a href="<?php echo base_url('index.php/customer/detail/').$d->id_produk?>" class="shopBtn">VIEW</a></h4>
		 </div>
	</form>
		</div>
	</div>

<?php } ?>

</div>

</div>