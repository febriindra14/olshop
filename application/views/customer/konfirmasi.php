<div class="row">

    <div class="span2"></div>

    <div class="span8">

        <div class="well well-small">

            <center><h3 class="alert alert-success">Konfrimasi</h3></center>

            <div class="row-fluid"> 
  
    <form action="<?php echo base_url('index.php/customer/konfirmasi')?>" method="post">
        <div class="well well-small">
    <table>	

    	<input type="hidden" name="nama_lengkap" value="<?php echo $nama['nama_lengkap'];?>">
    	<input type="hidden" name="id_order" value="<?php echo $id_order?>">
    	<input type="hidden" name="total" value="<?php echo $total?>">
    	<input type="hidden" name="tgl_order" value="<?php echo $tgl_order?>">

    		<tr>
    			<td>Nama</td>
    			<td>:</td>
    			<td><input type="text" value="<?php echo $nama['nama_lengkap'];?>" readonly></td>
    		</tr>
    		<tr>
    			<td>Kode order</td>
    			<td>:</td>
    			<td><input type="text" value="<?php echo $id_order ;?>" readonly></td>
    		</tr>
    		<tr>
    			<td>Nominal</td>
    			<td>:</td>
    			<td><input type="text" value="Rp <?php echo number_format($total,0,",","."); ?>" readonly></td>
    		</tr>
    		<tr>
    			<td>Tanggal/waktu bayar</td>
    			<td>:</td>
    			<td><input type="text" value="<?php echo $tgl_order ;?>" readonly></td>
    		</tr>	
	   		<tr>
    			<td>Bayar via</td>
    			<td>:</td>
    			<td><input type="text" value="<?php echo $pil_bayar ;?>" readonly></td>
    		</tr>

    		<tr>
    			<td>Keterangan</td>
    			<td>:</td>
    			<td><input type="text" value="<?php echo $keterangan ;?>" readonly></td>
    		</tr>		
    </table>
         <center><button type="submit" class="shopBtn btn-large">Konfirmasi</button></center>
        </div>
    </form> 
            </div>
        </div>
    </div>
</div>            