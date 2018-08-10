<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<?php foreach ($produk as $key => $value) { ?>

		<li><a href="<?php echo base_url('customer/kategori/'.$value->id_kategori);?>"><span class="icon-chevron-right"></span><?php echo $value->nama_kategori ;?> </a></li>		

		<?php } ?>
		
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="<?php echo base_url('customer/keranjang')?>"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;"> Rp <?php echo number_format($total,0,",","."); ?> </span></strong></a></li>
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
			
		<?php foreach ($sidebar as $c) { ?>	
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url('customer')?>"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$c->foto?>" alt="">

	<form action="<?php echo base_url('customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $c->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $c->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $c->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $c->harga ?>">
			
				<div class="caption">
				  <h4><a class="defaultBtn" href="<?php echo base_url('customer/detail/').$c->id_produk?>">VIEW</a> <span class="pull-right">Rp. <?php echo number_format($c->harga,0,",","."); ?></span></h4>
				</div>
	</form>			
			  </div>
			</li>
		<?php }?>
		  </ul>

	</div>

	
	<div class="span9">
<!--
New Products
-->
	<div class="well well-small">
	<h3><?php if ($this->uri->segment(3)=='') {
                    	  echo $cari; }?></h3>
		<div class="row-fluid">
		  <ul class="thumbnails">

<?php 
if (!empty($data)) {
foreach($data as $row):?>

			<li class="span4" style="margin-left: 7px;">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a class="zoomTool" href="<?php echo base_url('customer/search')?>" ><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url('customer/detail/').$row->id_produk?>"><img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$row->foto?>" alt=""></a>

	<form action="<?php echo base_url('customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $row->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $row->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $row->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $row->harga ?>">

				<div class="caption cntr">
					<p> <?php echo $row->nama_produk?></p>
					<p><strong> Rp. <?php echo number_format($row->harga,0,",","."); ?> </strong></p>
					
		<button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>		
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
	</form>			
			  </div>
			</li>
<?php endforeach; } else{
							echo "<h3 style='color: #666;'><center>Produk tidak Ditemukan</center></h3>"; 
						}
		?>

		  </ul>
		</div>
	
	</div>
	
	<script src="<?php echo base_url().'assets/search/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/search/js/bootstrap.js'?>" type="text/javascript"></script>

	</div>	