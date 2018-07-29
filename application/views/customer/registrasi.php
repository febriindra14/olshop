<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="<?php echo base_url('index.php/customer');?>"> <span class="icon-home"></span> Home</a> 
				<a href="<?php echo base_url('index.php/customer/akunku')?>"><span class="icon-user"></span> My Account</a> 
				<a href="<?php echo base_url('index.php/customer/register')?>"><span class="icon-edit"></span> Free Register </a> 
				<a href="<?php echo base_url('index.php/customer/kontak')?>"><span class="icon-envelope"></span> Contact us</a>
				<a href="<?php echo base_url('index.php/customer/keranjang')?>"><span class="icon-shopping-cart"></span> Keranjang <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
				<a href="<?php echo base_url('index.php/login_customer/logout')?>" >Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- body section -->

<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		
		<?php foreach ($produk as $key => $value) { ?>

		<li><a href="<?php echo base_url('index.php/customer/kategori/'.$value->id_kategori);?>"><span class="icon-chevron-right"></span><?php echo $value->nama_kategori ;?> </a></li>		

		<?php } ?>

		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="<?php echo base_url('index.php/customer/keranjang')?> "><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;"> Rp <?php echo number_format($total,0,",","."); ?> </span></strong></a></li>
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
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url()?>assets/fronted/assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url()?>assets/fronted/assets/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url()?>assets/fronted/assets/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>
	</div>
<!-- body section -->	

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('index.php/customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
    <form action="<?php echo base_url('index.php/customer/tambah_customer')?>" method="post">

	<h3> Registration</h3>	
	<div class="well">
	<form class="form-horizontal">
		<h3></h3>

		<input type="hidden" name="id_customer">

		<div class="control-group">
			<label class="control-label">Name depan</label>
			<div class="controls">
			  <input type="text" name="nama_depan">
			</div>
		 </div>

		 <div class="control-group">
			<label class="control-label">Name belakang</label>
			<div class="controls">
			  <input type="text" name="nama_belakang">
			</div>
		 </div>

		<div class="control-group">
		<label class="control-label">Email</label>
		<div class="controls">
		  <input type="text" name="email" placeholder="coba@gmail.com">
		</div>
	  </div>

		<div class="control-group">
		<label class="control-label">Password</label>
		<div class="controls">
		  <input type="password" name="password">
		</div>
	  </div>

		<div class="control-group">
		<label class="control-label">Tanggal lahir</label>
		<div class="controls">
			<input type="date" name="tgl_lahir">
		</div>
	  	</div>


		<div class="control-group">
		<label class="control-label">Nomor telepon</label>
		<div class="controls">
			<input type="text" name="no_telp">
		</div>
	  	</div>


		<div class="control-group">
		<label class="control-label">Nama rekening</label>
		<div class="controls">
			<input type="text" name="nama_rek">
		</div>
	  	</div>


		<div class="control-group">
		<label class="control-label">Nomor rekening</label>
		<div class="controls">
			<input type="text" name="no_rek">
		</div>
	  	</div>


		<div class="control-group">
		<label class="control-label">Alamat</label>
		<div class="controls">
			<input type="text" name="alamat">
		</div>
	  	</div>

	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Register" class="exclusive shopBtn">
		</div>
	</div>

	</form>
</div>
</form>
</div>