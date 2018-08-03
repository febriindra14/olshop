<div class="row">

    <div class="col-md-12">
        <h2><strong>Konfigurasi</strong></h2>   
    </div>

</div>

<div class="row">

	<div class="col-md-6">
		<div class="panel-body">
	<?php foreach ($konfig as $key => $value) { ?>		
			<p><strong>Nama web</strong><br>
			<?php echo $value->nama_web ;?></p>
			<p><strong>Email</strong><br>
			<?php echo $value->email_web ;?></p>
			<p><strong>Telepon</strong><br>
			<?php echo $value->telp_web ;?></p>
		</div>

	</div>
	<div class="col-md-6">

		<div class="panel-body">
			<strong>Bagikan</strong><br><br>
			<a href="https:\\<?php echo $value->share1; ?>" class="aa"><li class="fa fa-facebook fa-4x"></li></a>
			<a href="https:\\<?php echo $value->share2; ?>" class="aa"><li class="fa fa-twitter fa-4x"></li></a>
			<a href="https:\\<?php echo $value->share3; ?>" class="aa"><li class="fa fa-instagram fa-4x"></li></a>
		</div><br><br>
		<a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px; background: #00BFFF; border:#00BFFF; width:50px;' class='btn btn-primary btn-sm' href='<?php echo base_url('index.php/utama/admin/ubah_konfig/'.$value->id_web)?>'>Edit</a>
	</div>	
</div>
<div class="row">
	
	<div class="col-md-12">
		
		<div class="panel-body">
			<center><h3><strong>Deskripsi</strong></h3>
				<div class="well well-small">
					<p><?php echo $value->deskripsi ;?></p>
				</div>
			</center>
		</div>

	</div>

</div>
<?php }?>