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
	<h2>Order</h2>
	<table class="table table-bordered">
	<tr>
		<td>Id customer</td>
		<td>Nama</td>
		<td>Keterangan</td>
		<td>Pengaturan</td>
	</tr>
	<tr>
	<?php foreach ($order as $b) {?>
		 <tr <?php if ($b['nama_lengkap'] == '') {
         echo "style='color: blue;font-weight:bold;'"; } ?>>

		<td style="font-weight: bold;"><?php echo $b['id_customer'];?></td>
		<td style="font-weight: bold;"><?php echo $b['nama_lengkap'];?></td>
		<td style="font-weight: bold;"><?php echo $b['keterangan'];?></td>
		<td>
			<a href="<?php echo base_url('utama/admin/detailorder/').$b['id_customer'];?>" class="btn btn-info"><i class="fa fa-info"></i></a>

			<a href="<?php echo base_url('utama/admin/hapus_order/').$b['id_order'] ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger" onclick='return confirm("Yakin mau dihapus???");'><i class="fa fa-trash"></a></td></i>
	</tr>
	<?php }?>	
	</table>
	 <br>
        <label style="border: 1px solid blue;background-color: blue;color:blue;width: 20px;height: 20px;">a</label> <label>Belum konfirmasi</label><br>
        <label style="border: 1px solid black;background-color: black;color:black;width: 20px;height: 20px;">a</label> <label>Sudah konfirmasi</label> 
	<br>
	<?php echo $this->pagination->create_links() ?>	
</body>
</html>