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
				<a href="<?php echo base_url('index.php/customer/keranjang')?>"><span class="icon-shopping-cart"></span>  <?php echo $jumlah->num_rows(); ?> items  <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
				<a href="<?php echo base_url('index.php/login_customer/logout')?>" >Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- -->
<script type="text/javascript">
	function rava()
	{
		document.getElementById('number1').value=document.getElementById('number2').value;
	}
</script> 

<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('index.php/customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
    <?php echo $this->session->flashdata('error'); ?>
	<div class="well well-small">
	<h1>
	Check Out <small class="pull-right"><?php echo $jumlah->num_rows(); ?> Items are in the cart </small></h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                 <th>Product</th>
                 <th>Description</th>
                 <th>Unit price</th>
                 <th>Qty </th>
                 <th>Total</th>
				</tr>
              </thead>

<?php foreach ($cart as $row) {?>

	
              <tbody>
                <tr>
                  <td><img width="60" src="<?php echo base_url(). 'assets/fronted/assets/img/'.$row->foto?>" alt=""></td>
                  <td><?php echo $row->nama_produk?></td>
                
                  <td> Rp. <?php echo number_format($row->harga,0,",","."); ?> </td>
    <td>         
   		<div class="input-append" style="display: flex;max-width: 80px;">	
    	<form action="<?php echo base_url('index.php/customer/decrement/').$row->id_cart ?>" method="post">
     	<input type="hidden" name="id" value="<?php echo $row->id_cart ?>">  	
		<input class="span1" style="max-width:34px" placeholder="0" id="number1" onkeyup="rava();" size="16" type="text" name="qty" value="<?php echo $row->jumlah?>">
		<input type="submit" class="btn btn-mini" value="-" style="height: 100%;width: 22px;">
		</form>	
		<form action="<?php echo base_url('index.php/customer/increment/').$row->id_cart?>" method="post">	
		<input type="hidden" name="id" value="<?php echo $row->id_cart ?>">
		<input class="span1" style="max-width:34px" placeholder="0" id="number2" size="16" type="hidden" name="qty" value="<?php echo $row->jumlah?>">		
		<input type="submit" class="btn btn-mini" value="+" style="height: 100%;width: 22px;">
		</form>									
		 <a class="btn btn-danger" style="height: 100%;" href="<?php echo base_url('index.php/customer/hapus_cart/').$row->id_cart?>"><span class="icon-remove"></span></a> 
		</div>
	</td>
				</td>
                  <td> Rp <?php echo number_format($row->total_harga,0,",","."); ?> </td>
                </tr>

                 
<?php  } ?> 
                <tr>
                  <td colspan="4" class="alignR">Total Bayar :</td>
                  <td> Rp <?php echo number_format($total,0,",","."); ?> </td>
                </tr>

				</tbody>

            </table><br/>
	
		<table class="table table-bordered">
			<tbody>
                <tr><td>ESTIMATE YOUR SHIPPING & TAXES</td></tr>
                 <tr> 
				 <td>
					<form class="form-horizontal" action="<?php echo base_url('index.php/customer/pembayaran')?>" method="post">
					  
					  <div class="control-group">
						<label class="span2 control-label">Negara :</label>
						<div class="controls">
						  <input type="text" name="negara" placeholder="negara" required>
						</div>
					  </div>

					  <div class="control-group">
						<label class="span2 control-label">Provinsi :</label>
						<div class="controls">
						  <input type="text" name="provinsi" placeholder="provinsi" required>
						</div>
					  </div>

					  <div class="control-group">
						<label class="span2 control-label">Kabupaten :</label>
						<div class="controls">
						  <input type="text" name="kabupaten" placeholder="kabupaten" required>
						</div>
					  </div>

					  <div class="control-group">
						<label class="span2 control-label">Kode Pos :</label>
						<div class="controls">
						  <input type="text" name="kode_pos" placeholder="kode pos" required>
						</div>
					  </div>

					  <div class="control-group">
						<label class="span2 control-label">Alamat lengkap :</label>
						  <textarea type="text" name="alamat_lengkap" placeholder="alamat" required></textarea>
					  </div>

					  <div class="control-group">
						<div class="controls">
						  <button type="submit" class="shopBtn">Click to check the price</button>
						</div>
					  </div>

				  </td>
				</tr>
            </tbody>
        </table>  	

	<a href="<?php echo base_url('index.php/customer')?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	<button type="submit" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></button>
					</form> 
</div>
</div>