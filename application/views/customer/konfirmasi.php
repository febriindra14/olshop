<div class="span12">
    
    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/customer')?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Konfirmasi pembayaran</li>
    </ul>

 <form action="<?php echo base_url('index.php/customer/konfirmasi')?>" method="post">
    <div class="well well-small">
    <table>	

    	<input type="hidden" name="nama">
    	<input type="hidden" name="id_order" value="<?php echo $id_order?>">
    	<input type="hidden" name="total" value="<?php echo $total?>">
    	<input type="hidden" name="tgl_order" value="<?php echo $tgl_order?>">

    	<h3>Konfirmasi</h3>
    		<tr>
    			<td>Nama</td>
    			<td>:</td>
    			<td><input type="text" name="nama" required></td>
    		</tr>
    		<tr>
    			<td>Kode order</td>
    			<td>:</td>
    			<td><?php echo $id_order ;?></td>
    		</tr>
    		<tr>
    			<td>Nominal</td>
    			<td>:</td>
    			<td>Rp <?php echo number_format($total,0,",","."); ?></td>
    		</tr>

    		<tr>
    			<td>Tanggal/waktu bayar</td>
    			<td>:</td>
    			<td><?php echo $tgl_order ;?></td>
    		</tr>	
	   		<tr>
    			<td>Bayar via</td>
    			<td>:</td>
    			<td><?php echo $pil_bayar ;?></td>
    		</tr>

    		<tr>
    			<td>Keterangan</td>
    			<td>:</td>
    			<td><?php echo $keterangan ;?></td>
    		</tr>		
    </table>
         <button type="submit" class="shopBtn btn-large pull-right">Konfirmasi<span></span></button>
    </div>
 </form>
  
</div>   