<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Konfigurasi web</h2>
	<table class="table table-striped">
	<tr>
		<td>Nama website</td>
		<td>Email</td>
		<td>Telepon</td>
		<td>Deskripsi</td>
		<td>Pengaturan</td>
	</tr>
		
	<tr>
		<?php foreach ($konfig as $key => $value) { ?>
			<td><?php echo $value->nama_web ;?></td>
			<td><?php echo $value->email_web ;?></td>
			<td><?php echo $value->telp_web ;?></td>
			<td><?php echo $value->deskripsi ;?></td>
			<td>
				<a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/ubah_konfig/'.$value->id_web)?>'>Edit</a>

			</td>
	</tr>
		<?php } ?>
</table>
</body>
</html>