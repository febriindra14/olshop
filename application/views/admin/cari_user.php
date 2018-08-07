<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>User</h2>
	
	<center><?php echo form_open('utama/admin/tampil')?>
		<input type="text" name="keyword" placeholder="cari">
		<input type="submit" name="cari_submit" value="Reset">
	<?php echo form_close()?></center>

	<table class="table table-striped">	
	<tr>
		<td>Nama</td>
		<td>Username</td>
		<td>Email</td>
		<td>Password</td>
		<td>Pengaturan</td>
	</tr>
	<tr>
		 <?php foreach ($coba as $e) { ?>
		<td><?php echo $e['nama'];?></td>
		<td><?php echo $e['username'];?></td>
		<td><?php echo $e['email'];?></td>
		<td><?php echo $e['password'];?></td>
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('utama/admin/tampil_edit/').$e['id_user']?>'>Edit</a>

			<a data-toggle="tooltip" data-placement="top" title="Hapus" style='background: red; border:red;' class="btn btn-danger btn-sm" href="<?php echo base_url('utama/admin/hapus/').$e['id_user'] ?>">Hapus</a></td>	
	</tr>
<?php }?>
	</table>	
</body>
</html>	