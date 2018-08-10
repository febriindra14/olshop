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
				<a class="active" href="<?php echo base_url('customer');?>"> <span class="icon-home"></span> Home</a> 
				<a href="<?php echo base_url('customer/akunku')?>"><span class="icon-user"></span> My Account</a> 
				<a href="<?php echo base_url('customer/register')?>"><span class="icon-edit"></span> Free Register </a> 
				<a href="<?php echo base_url('customer/kontak')?>"><span class="icon-envelope"></span> Contact us</a>
				<a href="<?php echo base_url('customer/keranjang')?>"><span class="icon-shopping-cart"></span> <?php echo $jumlah->num_rows(); ?> items  <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
				<a href="<?php echo base_url('login_customer/logout')?>" >Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- -->

<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Akun anda</li>
    </ul>

	<div class="well">
		<form class="form-horizontal">
		<?php foreach ($akun as $key => $a) { ?>
	<table>
    	<tr>
    		<td>Nama</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->nama_lengkap ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>Email</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->email ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>Password</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->password ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>TTL</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->tgl_lahir ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>No.Telepon</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->no_telp ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>Alamat</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->alamat ?>" readonly></td>
    	</tr>
           
	</table>	
		
		<?php } ?>
	
		</form>
	</div>
</div>	