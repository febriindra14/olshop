<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Daftar</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap 3.3.2 (warna bawah)--> 
<link href="<?php echo base_url(); ?>assets/login/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
<link href="<?php echo base_url(); ?>assets/login/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
<link href="<?php echo base_url(); ?>assets/login/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
<link href="<?php echo base_url(); ?>assets/login/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS ( warna atas)-->
<link href="<?php echo base_url(); ?>assets/login/css/style.css" rel="stylesheet" type="text/css" />

</head>
<body class="login-page bg-login">
<div class="login-box">

<div class="login-box-body">
  <p class="login-box-msg"><i class="fa fa-user icon-title"></i> Silahkan Daftar</p>
<br/>
  <form action="<?php echo base_url('index.php/login')?>" method="POST">
<div class="form-group has-feedback">
<input type="text" class="form-control" name="nama" placeholder="nama" required />
<span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>  	
<div class="form-group has-feedback">
<input type="text" class="form-control" name="username" placeholder="Username" required />
<span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<input type="text" class="form-control" name="email" placeholder="admin@gmail.com" required />
<span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<input type="password" class="form-control" name="password" placeholder="Password" required />
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<br/>
<div class="row">
<div class="col-xs-12">
	<center>
	<input type="submit" class="btn btn-primary btn-submit" value="Simpan">
	<a href="<?php echo base_url('index.php/login')?>" class="btn btn-default btn-reset">Batal</a>
	</center>
</div><!-- /.col -->
</div>
</form>
<br>
</div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<!-- jQuery 2.1.3 -->
<script src="<?php echo base_url(); ?>assets/login/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url(); ?>assets/login/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>