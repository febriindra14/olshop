<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<button type="button" class="btn btn-default">Home</button>
		<button type="button" class="btn btn-default">My Account</button>
		<button type="button" class="btn btn-default">Free register</button>
		<button type="button" class="btn btn-default">Contact us</button>
		<button type="button" class="btn btn-default">Keranjang</button>
		<button type="button" class="btn btn-default">Logout</button>
	<br><br>
		<button type="button" class="btn btn-default">Home</button>
		<button type="button" class="btn btn-default">List view</button>
		<button type="button" class="btn btn-default">Grid view</button>
		<button type="button" class="btn btn-default">Three column</button>
		<button type="button" class="btn btn-default">Four column</button>
		<button type="button" class="btn btn-default">Rekonfirmasi</button>
		<button type="button" class="btn btn-default">Login</button>
	<br><br><br>
	<table class="table table-striped">
		<tr>
			<td>Judul</td>
			<td>Deskripsi</td>
			<td>Aksi</td>
		</tr>
		<tr>
			<?php foreach ($hal as $key => $value) { ?>
				<td><?php echo $value->judul ;?></td>
				<td><?php echo $value->deskripsi ;?></td>
				<td>
				<a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/ubah_hal/'.$value->id_hal)?>'>Edit</a>
				</td>
		</tr>
		
			<?php }?>
	</table>

</body>
</html>