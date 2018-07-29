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
<!-- -->

<div class="span12">
<h3>Four Column Product view </h3>
	<ul class="thumbnails">
<?php foreach ($fourcol as $key => $g) { ?>

		<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a class="zoomTool" href="<?php echo base_url('index.php/customer/empatcol')?>" ><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url('index.php/customer/detail/').$g->id_produk?>"><img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$g->foto?>" alt=""></a>

	<form action="<?php echo base_url('index.php/customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $g->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $g->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $g->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $g->harga ?>">			
				
				<div class="caption cntr">
					<p><?php echo $g->nama_produk?></p>
					<p><strong> Rp. <?php echo number_format($g->harga,0,",","."); ?></strong></p>
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