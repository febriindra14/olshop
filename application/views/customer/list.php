<div id="sidebar" class="span3">
<div class="well well-small">
		<ul class="nav nav-list">
	<?php foreach ($produk as $key => $value) { ?>

	<li><a href="<?php echo base_url('index.php/customer/kategori/'.$value->id_kategori);?>"><span class="icon-chevron-right"></span><?php echo $value->nama_kategori ;?> </a></li>		

	<?php } ?>
	
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="<?php echo base_url('index.php/customer/keranjang')?>"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
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
		<form class="form-horizontal qtyFrm">
		<h3> Rp. <?php echo number_format($d->harga,0,",","."); ?> </h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<div class="btn-group">
		  <a href="<?php echo base_url('index.php/customer/keranjang/').$d->id_produk?>" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		  <a href="<?php echo base_url('index.php/customer/detail/').$d->id_produk?>" class="shopBtn">VIEW</a>
		 </div>
			</form>
		</div>
	</div>

<?php } ?>

</div>

</div>