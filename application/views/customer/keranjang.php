
<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('index.php/customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
	<div class="well well-small">
		<h1>Check Out <small class="pull-right"></small></h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Produk</th>
                  <th>Nama produk</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Total harga</th>
				</tr>
              </thead>

<?php foreach ($cart as $row) {?>

              <tbody>
                <tr>
                  <td><img width="60" src="<?php echo base_url(). 'assets/fronted/assets/img/'.$row->foto?>" alt=""></td>
                  <td><?php echo $row->nama_produk?></td>
                
                  <td> Rp. <?php echo number_format($row->harga,0,",","."); ?> </td>
                  <td>
					<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="<?php echo $row->jumlah ?>">
				 
				  <div class="input-append">
					<button class="btn btn-mini" type="button"> - </button>
					<button class="btn btn-mini" type="button"> + </button>
					
					<button class="btn btn-mini btn-danger" type="button"><a href="<?php echo base_url('index.php/customer/hapus_cart/').$row->id_cart?>"><span class="icon-remove"></span></a></button>
				</div>
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
                <tr><td>Shipping</td></tr>
                 <tr> 
				 <td>
					<form action="<?php echo base_url('index.php/customer/pembayaran')?>" method="post">
					  
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
						<div class="controls">
						  <input type="text" name="alamat_lengkap" placeholder="alamat" required>
						</div>
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