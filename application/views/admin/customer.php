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
	<table width="800" border="1" cellpadding="0" cellspacing="0" style="margin-top: 10px">
	<tr>
		<td align="center">Id Customer</td>
		<td align="center">Id User</td>
		<td align="center">Tanggal Lahir</td>
		<td align="center">Kode Pos</td>
		<td align="center">No Telepon</td>
		<td align="center">No Rekening</td>
		<td align="center">Alamat</td>
		<td align="center">Pengaturan</td>
	</tr>
	<tr>
	<?php foreach ($isi as $h) {?>
		<td><?php echo $h['id_customer'];?></td>
		<td><?php echo $h['id_user'];?></td>
		<td><?php echo $h['tgl_lahir'];?></td>
		<td><?php echo $h['kode_pos'];?></td>
		<td><?php echo $h['no_telp'];?></td>
		<td><?php echo $h['no_rekening'];?></td>
		<td><?php echo $h['alamat'];?></td>
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/form_edit/').$h['id_customer']?>'>Edit</a>
			<a data-toggle="tooltip" data-placement="top" title="Hapus" style='background: red; border:red;' class="btn btn-danger btn-sm" href="<?php echo base_url('index.php/utama/admin/hapus_cus/').$h['id_customer'] ?>">Hapus</a></td>
	</tr>
<?php }?>
</table>
</body>
</html>