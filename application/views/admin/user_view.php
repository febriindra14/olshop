<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>User</h2>
	<button type="pas"><a style="text-decoration: none;" href="<?php echo base_url('index.php/utama/admin/daftar')?>">Daftar</a></button>
	<center>
	<?php echo form_open('utama/admin/cari')?>
		<input type="text" name="keyword" placeholder="cari">
		<input type="submit" name="cari_submit" value="Cari">
	<?php echo form_close()?> </center>

	<table width="800" border="1" cellpadding="0" cellspacing="0" style="margin-top: 10px" id="tabel">	
	<tr>
		<td align="center">Id User</td>
		<td align="center">Nama</td>
		<td align="center">Username</td>
		<td align="center">Email</td>
		<td align="center">Password</td>
		<td align="center">Hak Akses</td>
		<td align="center">Pengaturan</td>
	</tr>
	<tr>
		 <?php foreach ($coba as $e) {?>
		<td><?php echo $e['id_user'];?></td>
		<td><?php echo $e['nama'];?></td>
		<td><?php echo $e['username'];?></td>
		<td><?php echo $e['email'];?></td>
		<td><?php echo $e['password'];?></td>
		<td><?php echo $e['hak_akses'];?></td>
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/tampil_edit/').$e['id_user']?>'>Edit</a>
			<a data-toggle="tooltip" data-placement="top" title="Hapus" style='background: red; border:red;' class="btn btn-danger btn-sm" href="<?php echo base_url('index.php/utama/admin/hapus/').$e['id_user'] ?>">Hapus</a></td>	
	</tr>
<?php }?>
	</table>	
</body>
</html>	