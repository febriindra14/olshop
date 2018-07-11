<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <h3>Tambah merk</h3>
  <form action="<?php echo base_url('index.php/utama/admin/tambah_merk')?>" method="POST" enctype="multipart/form-data">
    <section class="content">
      <div class="row">
        <div class="col-md-15">

      <div class="form-group">
        <label class="col-sm-2 control-label">Id Merk</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="id_merk" required>
          </div>
        </div> 

      <div class="form-group">
          <label class="col-sm-2 control-label">Nama Merk</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="nama_merk" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">Gambar</label>
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
  </section>
              
  </form>  
</body>
</html>