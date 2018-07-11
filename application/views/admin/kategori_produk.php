<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Kategori Produk</h2>
	<button type="pas"><a style="text-decoration: none;" href="<?php echo base_url('index.php/utama/admin/form_kaduk')?>">Tambah</a></button>
	<table width="800" border="1" cellpadding="0" cellspacing="0" style="margin-top: 10px">
	<tr>
		<td align="center">Id Kategori</td>
		<td align="center">Nama Kategori</td>
		<td align="center">Pengaturan</td>
	</tr>
	<?php foreach ($kirim as $i) {?>
		<td><?php echo $i['id_kategori'];?></td>
		<td><?php echo $i['nama_kategori'];?></td>
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/form_kategori/').$i['id_kategori']?>'>Edit</a>
			<a data-toggle="tooltip" data-placement="top" title="Hapus" style='background: red; border:red;' class="btn btn-danger btn-sm" href="<?php echo base_url('index.php/utama/admin/hapus_kaduk/').$i['id_kategori'] ?>">Hapus</a></td>
	<?php }?>		
</body>
</html>