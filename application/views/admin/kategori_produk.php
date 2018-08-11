<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.page{
		display: inline-block;
		padding: 5px 9px;
		margin-right: 4px;
		border-radius: 3px;
		border: solid 1px #c0c0c0;
		background: #e9e9e9;
		font-size: 16px;
		font-weight: bold;
		text-decoration: none;
		color: #717171;
		text-transform: capitalize;
	}
	.page:hover{
		background: silver;
	}
	.active, .active:hover{
		background: #757272;
		border-color: #403c3c;
		color: #e9e9e9;
		cursor: default;
	}
</style>
</head>
<body>
	<h2>Kategori Produk</h2>
	  <a href="<?php echo base_url('utama/admin/form_kaduk'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
	<table class="table table-bordered">
	<tr>
		<td>Id Kategori</td>
		<td>Nama Kategori</td>
		<td>Pengaturan</td>
	</tr>
	<tr>
	<?php foreach ($kirim as $i) {?>
		<td><?php echo $i['id_kategori'];?></td>
		<td><?php echo $i['nama_kategori'];?></td>

		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('utama/admin/form_kategori/').$i['id_kategori']?>'><i class="fa fa-edit"></i></a>

			<a href="<?php echo base_url('utama/admin/hapus_kaduk/').$i['id_kategori'] ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></i></a></td>
	</tr>		
	<?php }?>		
</table>
<br>
<?php echo $this->pagination->create_links()?>
</body>
</html>