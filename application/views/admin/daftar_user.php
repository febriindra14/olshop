<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="<?php echo base_url('index.php/utama/admin/tambah')?>" method="POST">
   
     <div class="container">
      <h3><b>Tambah user</b></h3>
      <div class="col-md-1"></div>

 <div class="jumbotron col-md-4">

    <input type="hidden" name="id_user">

    <div class="form-group">
      <label>Nama :</label>
      <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
      <label>Username :</label>
      <input type="text" name="username" class="form-control" required>
    </div>

     <div class="form-group">
      <label>Email :</label>
      <input type="text" name="email" class="form-control" required>
    </div>

     <div class="form-group">
      <label>Password :</label>
      <input type="password" name="password" class="form-control">
    </div>
        
      <div class="box-footer">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              <a href="<?php echo base_url('index.php/utama/admin/tampil')?>" class="btn btn-default btn-reset">Batal</a>
            </div>
          </div>
        </div>
</div>
</div>

</form>  
</body>
</html>