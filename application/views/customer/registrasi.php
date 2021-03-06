<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		
		<?php foreach ($produk as $key => $value) { ?>

		<li><a href="<?php echo base_url('customer/kategori/'.$value->id_kategori);?>"><span class="icon-chevron-right"></span><?php echo $value->nama_kategori ;?> </a></li>		

		<?php } ?>

		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="<?php echo base_url('customer/keranjang')?> "><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;"> Rp <?php echo number_format($total,0,",","."); ?> </span></strong></a></li>
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
				<a class="zoomTool" href="<?php echo base_url('customer/register')?>"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$value->foto?>" alt="">

	<form action="<?php echo base_url('customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $value->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $value->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $value->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $value->harga ?>">
			
				<div class="caption">
				   <h4><a class="defaultBtn" href="<?php echo base_url('customer/detail/').$value->id_produk?>">VIEW</a> <span class="pull-right">Rp. <?php echo number_format($value->harga,0,",","."); ?></span></h4>
				</div>
	</form>			
			  </div>
			</li>
	<?php }?>		
		  </ul>
	</div>
<!-- body section -->	

<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
    
	<h3> Registration</h3>	
	<div class="well">
	<form class="form-horizontal" action="<?php echo base_url('customer/tambah_customer')?>" method="post">

		<h3>Your Personal Details</h3>

		<input type="hidden" name="id_customer">

		<div class="control-group">
			<label class="control-label">Nama</label>
			<div class="controls">
			  <input type="text" name="nama_lengkap">
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
	
</div>