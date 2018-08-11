<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Merk Produk</h2>
	<a href="<?php echo base_url('utama/admin/form_merk'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
	<table class="table table-bordered">
	<tr>
		<td>Id Merk</td>
		<td>Nama Merk</td>
		<td>Merk</td>
		<td>Pengaturan</td>
	</tr>
	<tr>
	<?php foreach ($belajar as $n) {?>
		<td><?php echo $n['id_merk'];?></td>
		<td><?php echo $n['nama_merk'];?></td>
		<td><?php echo $n['gambar'];?></td>
		
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('utama/admin/ganti_merk/').$n['id_merk']?>'><i class="fa fa-edit"></i></a>
			<a href="<?php echo base_url('utama/admin/hapus_merk/').$n['id_merk'] ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a>
	</tr>
	<?php }?>	
</body>
</html>