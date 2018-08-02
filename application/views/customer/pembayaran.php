<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('index.php/customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Pembayaran</li>
    </ul>

	<div class="well">
		
		<form action="<?php echo base_url('index.php/customer/checkout')?>" method="post">
			
			<h3>
    			Detail Order<p class="pull-right"><?php echo $jumlah->num_rows(); ?> Barang</p>
    		</h3>
	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Produk</th>
                  <th>Nama produk</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Total Harga</th>
				</tr>
              </thead>

<?php foreach ($bayar as $key => $e) { ?>

	<tbody>
     <tr>

	<input type="hidden" name="id_checkout">
	<input type="hidden" name="id_order">
	<input type="hidden" name="id_customer" value="<?php echo $e->id_customer ?>">
	<input type="hidden" name="id_produk" value="<?php echo $e->id_produk ?>">
	<input type="hidden" name="jumlah" value="<?php echo $e->jumlah?>">
	<input type="hidden" name="total_harga" value="<?php echo $e->total_harga ?>">
	<input type="hidden" name="total" value="<?php echo $total ?>">

		<td><img width="60" src="<?php echo base_url(). 'assets/fronted/assets/img/'.$e->foto?>"></td>
	
		<td><?php echo $e->nama_produk ?></td>
	
		<td>Rp. <?php echo number_format($e->harga,0,",","."); ?></td>

		<td><?php echo $e->jumlah ?></td>

		<td>Rp <?php echo number_format($e->total_harga,0,",","."); ?> </td>

	</tr>
<?php } ?>
		<tr>
         <td colspan="4" class="alignR">Total Bayar :</td>
         <td> Rp <?php echo number_format($total,0,",","."); ?> </td>
        </tr>
	</tbody>	
	</table>

			 <h4>Detail Shipping</h4>
	<table class="table table-bordered table-condensed">
           
            <thead>
                <tr>
                  <th>Negara</th>             
                  <th>Provinsi</th>             
                  <th>Kabupaten</th>               
                  <th>Kode pos</th>               
                  <th>Alamat</th>
				</tr>			
            </thead>
          
            <tr>
      
    <input type="hidden" name="negara" value="<?php echo $negara ?>">
	<input type="hidden" name="provinsi" value="<?php echo $provinsi ?>">
	<input type="hidden" name="kabupaten" value="<?php echo $kabupaten?>">
	<input type="hidden" name="kode_pos" value="<?php echo $kode_pos ?>">
	<input type="hidden" name="alamat_lengkap" value="<?php echo $alamat_lengkap?>">
	      	
			<td><?php echo  $negara; ?></td>		
			<td><?php echo 	$provinsi; ?></td>
			<td><?php echo 	$kabupaten; ?></td>
			<td><?php echo 	$kode_pos; ?></td>
			<td><?php echo 	$alamat_lengkap; ?></td>
			</tr>

	</table>

		<center><tr>
			<td> Pilihan bayar via :</td></tr>
		<div class="controls">
		<select name="pil_bayar">

			<option>ATM</option>
				<option value="Mandiri">Mandiri</option>
        		<option value="BNI">BNI</option>
        		<option value="CIMB">CIMB</option>
        		<option value="BCA">BCA</option>
        		<option value="Danamon">Danamon</option>
        		<option value="BRI">BRI</option>
        		<option value="Permata">Permata</option>
		</select>		
		</div></center>
		
	<a href="<?php echo base_url('index.php/customer/keranjang')?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Back </a>
	<button type="submit" class="shopBtn btn-large pull-right">Check Out <span class="icon-arrow-right"></span></button>

		</form>

	</div>

</div>			