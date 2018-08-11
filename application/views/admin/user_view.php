<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>User</h2>
	<a href="<?php echo base_url('utama/admin/daftar'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Daftar</a>	
	<center>
	<?php echo form_open('utama/admin/cari')?>
		<input type="text" name="keyword" placeholder="cari">
		<input type="submit" name="cari_submit" value="Cari">
	<?php echo form_close()?> </center><br>

	<table class="table table-bordered">	
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
		<td><a href='<?php echo base_url('utama/admin/tampil_edit/').$e['id_user']?>' data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm'><i class="fa fa-edit"></i></a>

			<a  href="<?php echo base_url('utama/admin/hapus/').$e['id_user'] ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a></td>	
	</tr>
<?php }?>
	</table>	
</body>
</html>	