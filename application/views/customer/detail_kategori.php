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
				<a class="zoomTool" href="<?php echo base_url('index.php/customer/detail')?>"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url(). 'assets/fronted/assets/img/'.$value->foto?>" alt="">

	<form class="form-horizontal qtyFrm" action="<?php echo base_url('index.php/customer/tambah_cart')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="id_produk" value="<?php echo $value->id_produk ?>">
	<input type="hidden" name="foto" value="<?php echo $value->foto ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $value->nama_produk ?>">
	<input type="hidden" name="harga" value="<?php echo $value->harga ?>">
			
				<div class="caption">
				  <h4><a class="defaultBtn" href="<?php echo base_url('index.php/customer/detail/').$value->id_produk?>">VIEW</a> <span class="pull-right">Rp. <?php echo number_format($value->harga,0,",","."); ?></span></h4>
				</div>
	</form>			
			  </div>
			</li>
	<?php }?>		
		  </ul>

	</div>

<div class="span9">
    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/customer')?>">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Items</a> <span class="divider">/</span></li>
    <li class="active">Preview</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
				
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item active">

                   <a href=""><img class="img-thumbnail" src="<?php echo base_url(). 'assets/fronted/assets/img/'.$detail['foto'];?>"/></a>
                  </div>
            
                </div>
               
            </div>
			</div>


			<div class="span7">
				<h3><?php echo ''.$detail['nama_produk'];?></h3>
				<hr class="soft"/>
				
	<form class="form-horizontal qtyFrm" action="<?php echo base_url('index.php/customer/tambah_cart_detail')?>" method="post">
	<input type="hidden" name="id_cart">
	<input type="hidden" name="jumlah">
	<input type="hidden" name="id_produk" value="<?php echo $detail['id_produk'] ?>">
	<input type="hidden" name="foto" value="<?php echo $detail['foto'] ?>">
	<input type="hidden" name="nama_produk" value="<?php echo $detail['nama_produk'] ?>">
	<input type="hidden" name="harga" value="<?php echo $detail['harga'] ?>">

				  <div class="control-group">
					<label class="control-label"><span>Rp. <?php echo number_format(''.$detail['harga'],0,",","."); ?> </span></label>
					<div class="controls">
					<input type="number" min="1" max="5" name="jumlah" class="span6" id="jumlah" placeholder="Qty" required>
					</div>
				  </div>
				
				 <div class="control-group">
					<label class="control-label"><span>Warna</span></label>
					<div class="controls">
				  		<input type="text" class="span11" value="<?php echo ''.$detail['warna']; ?>" readonly="readonly">
					</div>
			  	</div>

				  <div class="control-group">
					<label class="control-label"><span>Bahan</span></label>
					<div class="controls">
					  <select class="span11">
						  <option><?php echo ''.$detail['bahan'] ?></option>
						</select>
					</div>
				  </div>

				  <p>
				  <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
	</form>
				
			</div>
			</div>
				<hr class="softn clr"/>

            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="<?php echo base_url('index.php/customer/detail')?>" data-toggle="tab">Product Details</a></li>
              <li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceseries <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#cat1" data-toggle="tab">Category one</a></li>
                  <li><a href="#cat2" data-toggle="tab">Category two</a></li>
                </ul>
              </li>
            </ul>

            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">id produk:</td><td class="techSpecTD2"><?php echo ''.$detail['id_produk'] ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">id kategori:</td><td class="techSpecTD2"><?php echo ''.$detail['id_kategori'] ?></td></tr>
				<tr><td>id merk:</td><td><?php echo ''.$detail['id_merk'] ?></td></tr>
				</tbody>
				</table>
				<p><?php echo ''.$detail['deskripsi'] ?></p>
			</div>

			<div class="tab-pane fade" id="profile">
			
			<div class="row-fluid">	  
			<div class="span2">
				 <a href=""><img class="img-thumbnail" src="<?php echo base_url(). 'assets/fronted/assets/img/'.$detail['foto'];?>"/></a>
			</div>
			<div class="span6">
				<h5><?php echo ''.$detail['nama_produk'];?></h5>
				<p><?php echo ''.$detail['deskripsi'] ?></p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> Rp. <?php echo number_format(''.$detail['harga'],0,",","."); ?> </h3>
			<label class="checkbox">
				<input type="checkbox">  Adds product to compair
			</label><br>
			<div class="btn-group">

			  <a href="<?php echo base_url('index.php/customer/detail/').$value->id_produk?>" class="shopBtn">VIEW</a>
			 </div>
				</form>
			</div>
			</div>
	
			</div>

              <div class="tab-pane fade" id="cat1">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              <br>
              <br>
			  <div class="row-fluid">	  
					<div class="span2">
						<img src="assets/img/b.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
		
			<hr class="soften"/>
			  </div>

              
              <div class="tab-pane fade" id="cat2">
                
				<div class="row-fluid">	  
					<div class="span2">
						<img src="assets/img/d.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			
				</div>
            </div>

</div>
</div>