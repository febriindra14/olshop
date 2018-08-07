<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="<?php echo base_url('login')?>" method="POST">
    <h2>Daftar</h2>
    <section class="content">
      <div class="row">
        <div class="col-md-15">

      <input type="hidden" name="id_user">

      <div class="form-group">
          <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="nama" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="username" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="email" placeholder="coba@gmail.com" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-5">
              <input type="Password" class="form-control" name="password" required>
            </div>
      </div>
      
      <div class="box-footer">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
              <a href="<?php echo base_url('login')?>" class="btn btn-default btn-reset">Batal</a>
            </div>
          </div>
      </div>
       </div>
    </div>
  </section>
              
  </form>  
</body>
</html>