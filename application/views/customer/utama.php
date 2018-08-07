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
				<a class="active" href="<?php echo base_url('customer');?>"> <span class="icon-home"></span> Home</a> 
				<a href="<?php echo base_url('customer/akunku')?>"><span class="icon-user"></span> My Account</a> 
				<a href="<?php echo base_url('customer/register')?>"><span class="icon-edit"></span> Free Register </a> 
				<a href="<?php echo base_url('customer/kontak')?>"><span class="icon-envelope"></span> Contact us</a>
				<a href="<?php echo base_url('customer/keranjang')?>"><span class="icon-shopping-cart"></span> <?php echo $jumlah->num_rows(); ?> items <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
				<a href="<?php echo base_url('login_customer/logout')?>" >Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- -->

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
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="<?php echo base_url()?>assets/fronted/assets/img/bootstrap_free-ecommerce.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="<?php echo base_url()?>assets/fronted/assets/img/carousel1.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Bootstrap Ecommerce template</h4>
                      <p><span>Highly Google seo friendly</span></p>
                </div>
              </div>
			  <div class="item active">
                <img style="width:100%" src="<?php echo base_url()?>assets/fronted/assets/img/carousel3.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Twitter Bootstrap cart</h4>
                      <p><span>Very easy to integrate and expand.</span></p>
                </div>
              </div>
              <div class="item">
                <img style="width:100%" src="<?php echo base_url()?>assets/fronted/assets/img/bootstrap-templates.png" alt="bootstrap templates">
                <div class="carousel-caption">
                      <h4>Bootstrap templates integration</h4>
                      <p><span>Compitable to many more opensource cart</span></p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->

	<div class="well well-small">
		
	<h3>New Products </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails">

				<li class="span3">
				<div class="thumbnail">
					<a class="zoomTool" href="<?php echo base_url()?>assets/fronted/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="#" class="tag"></a>
					<a href="<?php echo base_url()?>assets/fronted/product_details.html"><img src="<?php echo base_url()?>assets/fronted/assets/img/bootstrap-ring.png" alt="bootstrap-ring"></a>
				</div>
				</li>

				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="<?php echo base_url()?>assets/fronted/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="#" class="tag"></a>
					<a  href="product_details.html"><img src="<?php echo base_url()?>assets/fronted/assets/img/i.jpg" alt=""></a>
				  </div>
				</li>

				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="<?php echo base_url()?>assets/fronted/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a href="#" class="tag"></a>
					<a  href="<?php echo base_url()?>assets/fronted/product_details.html"><img src="<?php echo base_url()?>assets/fronted/assets/img/g.jpg" alt=""></a>
				  </div>
				</li>

				<li class="span3">
				  <div class="thumbnail">
					<a class="zoomTool" href="<?php echo base_url()?>assets/fronted/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
					<a  href="<?php echo base_url()?>assets/fronted/product_details.html"><img src="<?php echo base_url()?>assets/fronted/assets/img/s.png" alt=""></a>
				  </div>
				</li>

			  </ul>
			  </div>
		   <div class="item">
		  <ul class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url()?>assets/fronted/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="product_details.html"><img src="<?php echo base_url()?>assets/fronted/assets/img/i.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url()?>assets/fronted/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="product_details.html"><img src="<?php echo base_url()?>assets/fronted/assets/img/f.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url()?>assets/fronted/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="<?php echo base_url()?>assets/fronted/product_details.html"><img src="<?php echo base_url()?>assets/fronted/assets/img/h.jpg" alt=""></a>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url()?>assets/fronted/product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a  href="<?php echo base_url()?>assets/fronted/product_details.html"><img src="<?php echo base_url()?>assets/fronted/assets/img/j.jpg" alt=""></a>
			  </div>
			</li>
		  </ul>
		  </div>
		   </div>
		  <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
		  </div>
		  </div>

		<div class="row-fluid">		
		  <ul class="thumbnails">
<?php foreach ($semua as $c) { ?>
			<li class="span4" style="margin-left: 7px;">
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url('customer')?>" ><span class="icon-search"></span> QUICK VIEW</a>

				<a href="<?php echo base_url('customer/detail/').$c->id_produk?>"><img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$c->foto?>" alt=""></a>
	
	<form action="<?php echo base_url('customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $c->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $c->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $c->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $c->harga ?>">

				<div class="caption cntr">
					<p><?php echo $c->nama_produk?></p>
					<p><strong> Rp. <?php echo number_format($c->harga,0,",","."); ?> </strong></p>
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

	</div>

	<!--
	Featured Products
	-->
	<div class="well well-small">
		  <h3><a class="btn btn-mini pull-right" href="<?php echo base_url('customer/view_more')?>" title="View more">View More<span class="icon-plus"></span></a> Featured Products</h3>
		  <hr class="soften"/>
		  <div class="row-fluid">
		  <ul class="thumbnails">

	<?php foreach ($tengah as $c) { ?>

			<li class="span4">
			  <div class="thumbnail">
				<a class="zoomTool" href="<?php echo base_url('customer')?>"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="<?php echo base_url('customer/detail/').$c->id_produk?>"><img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$c->foto?>" alt=""></a>

	<form action="<?php echo base_url('customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $c->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $c->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $c->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $c->harga ?>">
				
				<div class="caption">
				  <h5><?php echo $c->nama_produk?></h5>
				  <h4>
					  <a class="defaultBtn" href="<?php echo base_url('customer/detail/').$c->id_produk?>" title="Click to view"><span class="icon-zoom-in"></span></a>
		<button type="submit" class="shopBtn"><span class="icon-plus"></span></button>
					  <span class="pull-right">Rp. <?php echo number_format($c->harga,0,",","."); ?></span>
				  </h4>
				</div>
	</form>			
			  </div>

			</li>

	<?php } ?>
			
		  </ul>	
		</div>
	</div>
	
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
	Popular Products 
	</div>
	<hr>
	<div class="well well-small">
	<a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
	Best selling Products 
	</div>
	
	</div>
