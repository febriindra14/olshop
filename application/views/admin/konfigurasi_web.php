<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Konfigurasi web</h2>
	<table width="800" border="1" cellpadding="0" cellspacing="0" style="margin-top: 10px">
	<tr>
		<td align="center">Nama website</td>
		<td align="center">Email</td>
		<td align="center">Telepon</td>
		<td align="center">Pengaturan</td>
	</tr>
	<tr>
		<?php foreach ($konfig as $key => $value) { ?>
			<td><?php echo $value->nama_web ;?></td>
			<td><?php echo $value->email_web ;?></td>
			<td><?php echo $value->telp_web ;?></td>
			<td>
				<a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/ubah_konfig/'.$value->id_web)?>'>Edit</a>

			</td>
	</tr>
		<?php } ?>
</table>
</body>
</html>