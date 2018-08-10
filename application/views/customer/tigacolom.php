<div class="span12">
<h3>Three Column Product view </h3>

	<ul class="thumbnails">
<?php foreach ($tricol as $f) { ?>

		<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a class="zoomTool" href="<?php echo base_url('customer/tigacol')?>" ><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url('customer/detail/').$f->id_produk?>"><img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$f->foto?>" alt=""></a>

	<form action="<?php echo base_url('customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $f->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $f->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $f->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $f->harga ?>">

				<div class="caption cntr">
					<p><?php echo $f->nama_produk?></p>
					<p><strong> Rp. <?php echo number_format($f->harga,0,",","."); ?></strong></p>
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

<?php } ?>

	</ul>
</div>	