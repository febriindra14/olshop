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

<div id="sidebar" class="span3">
<div class="well well-small">
		<ul class="nav nav-list">
		<?php foreach ($merk as $key => $value) { ?>

		<li><a href="<?php echo base_url('index.php/customer/merk/'.$value->id_merk);?>"><span class="icon-chevron-right"></span><?php echo $value->nama_merk ;?> </a></li>		

		<?php } ?>

		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="<?php echo base_url('index.php/customer/keranjang')?> "><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
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

	
	<div class="span9">
<!-- 
New Products
-->
	<div class="well well-small">
	<h3>Our Products </h3>
		<div class="row-fluid">
		  <ul class="thumbnails">

		  	<?php foreach ($tampil as $b){ ?>
		  		
			<li class="span4">
			  <div class="thumbnail">
				<a href="" class="overlay"></a>

				<a class="zoomTool" href="<?php echo base_url('index.php/customer/merk/'.$b->id_merk)?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>

				 <a href="<?php echo base_url('index.php/customer/detail/').$b->id_produk?>"><img class="img-thumbnail" src="<?php echo base_url(). 'assets/fronted/assets/img/'.$b->foto?>"/></a>
				 
<form action="<?php echo base_url('index.php/customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $b->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $b->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $b->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $b->harga ?>">

				<div class="caption cntr">
					<p> <?php echo $b->nama_produk?></p>
					<p><strong> Rp. <?php echo number_format($b->harga,0,",","."); ?> </strong></p>

					<button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
</form>					
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			<?php }?>
		  
			</ul>
		</div>
	</div>
</div>