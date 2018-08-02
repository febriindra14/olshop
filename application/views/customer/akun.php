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
				<a href="<?php echo base_url('index.php/customer/keranjang')?>"><span class="icon-shopping-cart"></span> <?php echo $jumlah->num_rows(); ?> items  <span class="badge badge-warning"> Rp <?php echo number_format($total,0,",","."); ?> </span></a>
				<a href="<?php echo base_url('index.php/login_customer/logout')?>" >Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- -->

<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('index.php/customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Akunku</li>
    </ul>

	<div class="well">
		<form class="form-horizontal">
	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Id customer</th>
                  <th>Nama depan</th>
                  <th>Nama belakang</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Tanggal lahir</th>
                  <th>Nomor telepon</th>
                  <th>Nama rekening</th>
                  <th>Nomor rekening</th>
                  <th>Alamat</th>
				</tr>
              </thead>

<?php foreach ($akun as $key => $a) { ?>
	
		<td><?php echo $a->id_customer ?></td>
	
		<td><?php echo $a->nama_depan ?></td>
	
		<td><?php echo $a->nama_belakang ?></td>

		<td><?php echo $a->email ?></td>

		<td><?php echo $a->password ?></td>

		<td><?php echo $a->tgl_lahir ?></td>

		<td><?php echo $a->no_telp ?></td>

		<td><?php echo $a->nama_rek ?></td>

		<td><?php echo $a->no_rek ?></td>

		<td><?php echo $a->alamat ?></td>

	</table>	
		
<?php } ?>
	
		</form>
	</div>
</div>	