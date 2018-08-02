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
                <a href="<?php echo base_url('index.php/customer/keranjang')?>"><span class="icon-shopping-cart"></span> <?php echo $jumlah->num_rows(); ?> items  <span class="badge badge-warning"> Rp 0 </span></a>
                <a href="<?php echo base_url('index.php/login_customer/logout')?>" >Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- -->

<div class="span12">
    <div class="span6"> 
    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/customer')?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Konfirmasi pembayaran</li>
    </ul>

 <form action="<?php echo base_url('index.php/customer/selesai')?>" method="post">
    <div class="well well-small">

    	<input type="hidden" name="id_order" value="<?php echo $beda['id_order'];?>">

    	<h3>Konfirmasi</h3>
        <table>  
    		<tr>
    			<td>Nama</td>
    			<td>:</td>
    			<td><input type="text" name="nama" required></td>
    		</tr>             
           	<tr>
    			<td>Kode order</td>
    			<td>:</td>
    			<td><?php echo $beda['id_order'] ;?></td>
    		</tr>        
    		<tr>
    			<td>Nominal</td>
    			<td>:</td>
    			<td>Rp <?php echo number_format($beda['total_bayar'],0,",","."); ?></td>
    		</tr>
    		<tr>
    			<td>Tanggal/waktu bayar</td>
    			<td>:</td>
    			<td><?php echo $beda['tgl_order'] ;?></td>
    		</tr>                
            <tr>
                <td>Bayar via</td>
                <td>:</td>
                <td><?php echo $cek['pil_bayar'] ;?></td>
            </tr>	
    		<tr>
    			<td>Keterangan</td>
    			<td>:</td>
    			<td><?php echo $keterangan;?></td>
    		</tr>
        </table>
          <button type="submit" class="shopBtn btn-large pull-right">Konfirmasi<span></span></button>  
        
    </div>
 </form>
    </div>
</div>   