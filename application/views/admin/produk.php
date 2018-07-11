<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Produk</h2>
	<button type="pas"><a style="text-decoration: none;" href="<?php echo base_url('index.php/utama/admin/form_produk')?>">Tambah</a></button>
	<table width="800" border="1" cellpadding="0" cellspacing="0" style="margin-top: 10px">
	<tr>
		<td align="center">Nama Produk</td>
		<td align="center">Bahan</td>
		<td align="center">Warna</td>
		<td align="center">Harga</td>
		<td align="center">Foto</td>
		<td align="center">Pengaturan</td>
	</tr>
	<tr>
		<?php foreach ($produk as $c) {?>
		<td><?php echo $c['nama_produk'];?></td>
		<td><?php echo $c['bahan'];?></td>
		<td><?php echo $c['warna'];?></td>
		<td><?php echo $c['harga'];?></td>
		<td><?php echo $c['foto'];?></td>
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/editproduk/').$c['id_produk']?>'>Edit</a>
			<a data-toggle="tooltip" data-placement="top" title="Hapus" style='background: red; border:red;' class="btn btn-danger btn-sm" href="<?php echo base_url('index.php/utama/admin/hapusproduk/').$c['id_produk'] ?>">Hapus</a>
			<a data-toggle="tooltip" data-placement="top" title="Detail" style='background: grey; border:black;' class="btn btn-primary btn-sm" href="<?php echo base_url('index.php/utama/admin/detailproduk')?>">Detail</a></td>	
	</tr>
<?php }?>
	</table>	
</body>
</html>