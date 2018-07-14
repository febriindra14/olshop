<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="<?php echo base_url('index.php/utama/admin/tambah_kaduk')?>" method="POST">
      
      <div class="container">
      <h3><b>Tambah kateggori</b></h3>
      <div class="col-md-1"></div>

 <div class="jumbotron col-md-4">

    <div class="form-group">
      <label>Id Kategori :</label>
      <input type="text" name="id_kategori" class="form-control" required>
    </div>

    <div class="form-group">
      <label>Nama kategori:</label>
      <input type="text" name="nama_kategori" class="form-control" required>
    </div>

      <div class="box-footer">
          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
             <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              <a href="<?php echo base_url('index.php/utama/admin/kategori_produk')?>" class="btn btn-default btn-reset">Batal</a>
            </div>
          </div>
      </div>
       </div>
    </div>

              
  </form>  
</body>
</html>