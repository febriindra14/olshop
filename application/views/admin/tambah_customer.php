<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="<?php echo base_url('index.php/utama/admin/tambah_cus')?>" method="POST">
    <h2>Tambah</h2>
    <section class="content">
      <div class="row">
        <div class="col-md-15">

      <div class="form-group">
        <label class="col-sm-2 control-label">Id Customer</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="id_customer" required>
          </div>
        </div> 

      <div class="form-group">
          <label class="col-sm-2 control-label">Id User</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="id_user" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" name="tgl_lahir" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">Kode Pos</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="kode_pos" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">No Telepon</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="no_telp" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">No Rekening</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="no_rekening" required>
            </div>
      </div>

      <div class="form-group">
          <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="alamat" required>
            </div>
      </div>        
      
      <div class="box-footer">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
              <a href="<?php echo base_url('index.php/utama/admin/customer')?>" class="btn btn-default btn-reset">Batal</a>
            </div>
          </div>
      </div>
       </div>
    </div>
  </section>
              
  </form>  
</body>
</html>