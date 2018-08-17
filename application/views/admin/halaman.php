<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Halaman</h3>
	<table class="table table-bordered">
		<tr>
			<td>Menu</td>
			<td>judul1</td>
			<td>judul2</td>
			<td>judul3</td>
			<td>judul4</td>
			<td>deskripsi</td>
			<td>aksi</td>
		</tr>
		<tr>
			<?php foreach ($halaman as $key => $value) { ?>
			<td><?php echo $value->menu;?></td>
			<td><?php echo $value->judul1;?></td>
			<td><?php echo $value->judul2;?></td>
			<td><?php echo $value->judul3;?></td>
			<td><?php echo $value->judul4;?></td>
			<td><?php echo $value->deskripsi_hal;?></td>
			<td>
				<a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('utama/admin/ubah_halaman/'.$value->id_hal)?>'><i class="fa fa-edit"></i></a>
				</td>
		</tr>
			<?php }?>
	</table>
</body>
</html>