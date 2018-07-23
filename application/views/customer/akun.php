<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('index.php/customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Akunku</li>
    </ul>

	<div class="well">
		<form class="form-horizontal">
	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Id customer</th>
                  <th>Nama depan</th>
                  <th>Nama belakang</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Tanggal lahir</th>
                  <th>Nomor telepon</th>
                  <th>Nama rekening</th>
                  <th>Nomor rekening</th>
                  <th>Alamat</th>
				</tr>
              </thead>

<?php foreach ($akun as $key => $a) { ?>
	
		<td><?php echo $a->id_customer ?></td>
	
		<td><?php echo $a->nama_depan ?></td>
	
		<td><?php echo $a->nama_belakang ?></td>

		<td><?php echo $a->email ?></td>

		<td><?php echo $a->password ?></td>

		<td><?php echo $a->tgl_lahir ?></td>

		<td><?php echo $a->no_telp ?></td>

		<td><?php echo $a->nama_rek ?></td>

		<td><?php echo $a->no_rek ?></td>

		<td><?php echo $a->alamat ?></td>

	</table>	
		
<?php } ?>
	
		</form>
	</div>
</div>	