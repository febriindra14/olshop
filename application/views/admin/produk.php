<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
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
	<h2>Produk</h2>
	<a href="<?php echo base_url('utama/admin/form_produk'); ?>" class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-plus" style="margin-right: 5px;"></i>Tambah</a>
	<table class="table table-bordered">
	<tr>
		<td>Nama Produk</td>
		<td>Bahan</td>
		<td>Warna</td>
		<td>Harga</td>
		<td>Foto</td>
		<td>Pengaturan</td>
	</tr>
	<tr>
		<?php foreach ($produk->result_array() as $c) {?>
		<td><?php echo $c['nama_produk'];?></td>
		<td><?php echo $c['bahan'];?></td>
		<td><?php echo $c['warna'];?></td>
		<td><?php echo $c['harga'];?></td>
		<td><?php echo $c['foto'];?></td>
		<td><a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('utama/admin/editproduk/').$c['id_produk']?>'><i class="fa fa-edit"></i></a>

			<a href="<?php echo base_url('utama/admin/hapusproduk/').$c['id_produk'] ?> "data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus?")'><i class="fa fa-trash"></i></a>

			<a data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-info" href="<?php echo base_url('utama/admin/detailproduk/'.$c['id_produk'])?>"><i class="fa fa-info"></i></a>	
		</td>	
	</tr>
<?php }?>
	</table>
	<br>
	<?php echo $this->pagination->create_links() ?>	
</body>
</html>