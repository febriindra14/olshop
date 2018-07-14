<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="<?php echo base_url('index.php/utama/admin/tambah_merk')?>" method="POST" enctype="multipart/form-data">
     <div class="container">
      <h3><b>Tambah merk</b></h3>
      <div class="col-md-1"></div>

 <div class="jumbotron col-md-4">

    <div class="form-group">
      <label>Id merk :</label>
      <input type="text" name="id_merk" class="form-control" required>
    </div>

    <div class="form-group">
      <label>Nama merk:</label>
      <input type="text" name="nama_merk" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="userfile">Gambar :</label>
      <input type="file" name="gambar" class="file">
      <div class="input-group col-xs-12">
      </div><br>
    </div>

      <div class="box-footer">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
              <a href="<?php echo base_url('index.php/utama/admin/merk')?>" class="btn btn-default btn-reset">Batal</a>
            </div>
          </div>
      </div>
       </div>
    </div>
              
  </form>  
</body>
</html>