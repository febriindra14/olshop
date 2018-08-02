<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Customer</h2>
	<button type="pas"><a style="text-decoration: none;" href="<?php echo base_url('index.php/utama/admin/form')?>">Tambah</a></button>
	<table table class="table table-striped">
	<tr>
		<td>Id Customer</td>
		<td>Nama depan</td>
		<td>Nama belakang</td>
		<td>Email</td>
		<td>Password</td>
		<td>Tanggal lahir</td>
		<td>Nomor telepon</td>
		<td>Nama rekening</td>
		<td>Nomor rekening</td>
		<td>Alamat</td>
		<td>Pengaturan</td>
	</tr>
	<tr>
	<?php foreach ($isi as $h) {?>
		<td><?php echo $h['id_customer'];?></td>
		<td><?php echo $h['nama_depan'];?></td>
		<td><?php echo $h['nama_belakang'];?></td>
		<td><?php echo $h['email'];?></td>
		<td><?php echo $h['password'];?></td>
		<td><?php echo $h['tgl_lahir'];?></td>
		<td><?php echo $h['no_telp'];?></td>
		<td><?php echo $h['nama_rek'];?></td>
		<td><?php echo $h['no_rek'];?></td>
		<td><?php echo $h['alamat'];?></td>
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/form_edit/').$h['id_customer']?>'>Edit</a>
			<a data-toggle="tooltip" data-placement="top" title="Hapus" style='background: red; border:red;' class="btn btn-danger btn-sm" href="<?php echo base_url('index.php/utama/admin/hapus_cus/').$h['id_customer'] ?>">Hapus</a></td>
	</tr>
<?php }?>
</table>
</body>
</html>