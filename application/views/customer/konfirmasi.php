<div class="span12">

    <div class="span6"> 
    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/customer')?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Konfirmasi pembayaran</li>
    </ul>

  <form action="">
    <div class="well well-small">
    <hr class="soften"/>
    
    	<div class="control-group">
		<label class="span2 control-label">Nama :</label>
			<div class="controls">
			<input type="text" name="nama">
		</div>
		</div>

		<div class="control-group">
		<label class="span2 control-label">Kode order :</label>
		<div class="controls">
		<input type="text" name="id_order">
			</div>
			</div>

		 <div class="control-group">
		<label class="span2 control-label">Nominal :</label>
		<div class="controls">
		<input type="text" name="total_bayar">
		</div>
		</div>

		 <div class="control-group">
			<label class="span2 control-label">Tanggal & Waktu bayar :</label>
			<div class="controls">
		 <input type="date" name="ttl">
			</div>
		 </div>

		<div class="control-group">
		<label class="span2 control-label">Bayar via :</label>
			<div class="controls">
			<input type="text" name="pil_bayar">
		 </div>

		<div class="control-group">
		<label class="span2 control-label">Keterangan :</label>
			<div class="controls">
			 <input type="text" name="keterangan">
		</div>
		</div>


  </div>
 </div>

 </form>
</div>

</div>   