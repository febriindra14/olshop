<div class="row">

    <div class="span2"></div>

    <div class="span8">

        <div class="well well-small">

            <center><h3 class="alert alert-success">Konfrimasi pembayaran</h3></center>

            <div class="row-fluid"> 
                
    <form action="<?php echo base_url('customer/selesai')?>" method="post">
    <div class="well well-small">

    	<input type="hidden" name="id_order" value="<?php echo $beda['id_order'];?>">
        <table>  
    		<tr>
    			<td>Nama</td>
    			<td>:</td>
    			<td><input type="text" name="nama_lengkap" required></td>
    		</tr>             
           	<tr>
    			<td>Kode order</td>
    			<td>:</td>
    			<td><input type="text" value="<?php echo $beda['id_order'] ;?>" readonly></td>
    		</tr>        
    		<tr>
    			<td>Nominal</td>
    			<td>:</td>
    			<td><input type="text" value="Rp <?php echo number_format($beda['total_bayar'],0,",","."); ?>" readonly></td>
    		</tr>
    		<tr>
    			<td>Tanggal/waktu bayar</td>
    			<td>:</td>
    			<td><input type="text" value="<?php echo $beda['tgl_order'] ;?>" readonly></td>
    		</tr>                
            <tr>
                <td>Bayar via</td>
                <td>:</td>
                <td><input type="text" value="<?php echo $cek['pil_bayar'] ;?>" readonly></td>
            </tr>	
    		<tr>
    			<td>Keterangan</td>
    			<td>:</td>
    			<td><input type="text" value="<?php echo $keterangan;?>" readonly></td>
    		</tr>
        </table>
        <br>
         <center><button type="submit" class="shopBtn btn-large">Konfirmasi</button></center>
        
    </div>
    </form>
            </div>
        </div>
    </div>
</div>    