<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Merk Produk</h2>
	<button type="pas"><a style="text-decoration: none;" href="<?php echo base_url('index.php/utama/admin/form_merk')?>">Tambah</a></button>
	<table width="800" border="1" cellpadding="0" cellspacing="0" style="margin-top: 10px">
	<tr>
		<td align="center">Id Merk</td>
		<td align="center">Nama Merk</td>
		<td align="center">Gambar</td>
		<td align="center">Pengaturan</td>
	</tr>
	<?php foreach ($belajar as $n) {?>
		<td><?php echo $n['id_merk'];?></td>
		<td><?php echo $n['nama_merk'];?></td>
		<td><?php echo $n['gambar'];?></td>
		
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/ganti_merk/').$n['id_merk']?>'>Edit</a>

			<a data-toggle="tooltip" data-placement="top" title="Hapus" style='background: red; border:red;' class="btn btn-danger btn-sm" href="<?php echo base_url('index.php/utama/admin/hapus_merk/').$n['id_merk'] ?>">Hapus</a>

			<a data-toggle="tooltip" data-placement="top" title="Detail" style='background: grey; border:black;' class="btn btn-primary btn-sm" href="<?php echo base_url('index.php/utama/admin/detailmerk')?>">Detail</a></td>
	<?php }?>	
</body>
</html>