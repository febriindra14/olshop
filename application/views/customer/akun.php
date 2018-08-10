<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('customer')?> ">Home</a> <span class="divider">/</span></li>
		<li class="active">Akun anda</li>
    </ul>

	<div class="well">
		<form class="form-horizontal">
		<?php foreach ($akun as $key => $a) { ?>
	<table>
    	<tr>
    		<td>Nama</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->nama_lengkap ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>Email</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->email ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>Password</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->password ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>TTL</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->tgl_lahir ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>No.Telepon</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->no_telp ?>" readonly></td>
    	</tr>
    	<tr>
    		<td>Alamat</td>
    		<td>:</td>
    		<td><input type="text" value="<?php echo $a->alamat ?>" readonly></td>
    	</tr>
           
	</table>	
		
		<?php } ?>
	
		</form>
	</div>
</div>	