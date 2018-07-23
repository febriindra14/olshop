<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="<?php echo base_url('index.php/utama/admin/tambah_cus')?>" method="POST">
  
     <div class="container">
      <h3><b>Tambah customer</b></h3>
      <div class="col-md-1"></div>

 <div class="jumbotron col-md-4">

      <input type="hidden" name="id_customer" class="form-control">
 
    <div class="form-group">
      <label>Nama depan :</label>
      <input type="text" name="nama_depan" class="form-control" required>
    </div>

    <div class="form-group">
      <label>Name belakang :</label>
      <input type="text" name="nama_belakang" class="form-control" required>
    </div>

     <div class="form-group">
      <label>Email :</label>
      <input type="text" name="email" class="form-control" required>
    </div>

     <div class="form-group">
      <label>Password :</label>
      <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
      <label>Tanggal lahir :</label>
      <input type="date" name="tgl_lahir" class="form-control">
    </div>


    <div class="form-group">
      <label>Nomor telepon :</label>
      <input type="text" name="no_telp" class="form-control" required>
    </div>

     <div class="form-group">
      <label>Nama rekening :</label>
      <input type="text" name="nama_rek" class="form-control" required>
    </div>

     <div class="form-group">
      <label>No rekening :</label>
      <input type="text" name="no_rek" class="form-control">
    </div>

    <div class="form-group">
      <label>Alamat :</label>
      <input type="text" name="alamat" class="form-control">
    </div>

      <div class="box-footer">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              <a href="<?php echo base_url('index.php/utama/admin/customer')?>" class="btn btn-default btn-reset">Batal</a>
            </div>
          </div>
      </div>
       </div>
    </div>
              
  </form>  
</body>
</html>