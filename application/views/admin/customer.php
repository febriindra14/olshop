<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Customer</h2>
	<a href="<?php echo base_url('utama/admin/form'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
	<table table class="table table-bordered">
	<tr>
		<td>Nama</td>
		<td>Email</td>
		<td>Password</td>
		<td>Alamat</td>
		<td>Pengaturan</td>
	</tr>
	<tr>
	<?php foreach ($isi as $h) {?>
		<td><?php echo $h['nama_lengkap'];?></td>
		<td><?php echo $h['email'];?></td>
		<td><?php echo $h['password'];?></td>
		<td><?php echo $h['alamat'];?></td>
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('utama/admin/form_edit/').$h['id_customer']?>'><i class="fa fa-edit"></i></a>

			<a href="<?php echo base_url('utama/admin/hapus_cus/').$h['id_customer'] ?>" data-toggle="tooltip" data-placement="top" title="Hapus"  class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a></td>
	</tr>
<?php }?>
</table>
</body>
</html>