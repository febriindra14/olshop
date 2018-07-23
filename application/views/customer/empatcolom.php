<div class="span12">
<h3>Four Column Product view </h3>
	<ul class="thumbnails">
<?php foreach ($fourcol as $key => $g) { ?>

		<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a class="zoomTool" href="<?php echo base_url('index.php/customer/kategori/'.$g->id_kategori)?>" ><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url('index.php/customer/detail/').$g->id_produk?>"><img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$g->foto?>" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $g->nama_produk?></p>
					<p><strong> Rp. <?php echo number_format($g->harga,0,",","."); ?></strong></p>
					<h4><a class="shopBtn" href="<?php echo base_url('index.php/customer/keranjang/').$g->id_produk?>" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
		</li>

<?php } ?>

	</ul>
</div>	