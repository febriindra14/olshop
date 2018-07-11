<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h3>Edit Kaduk</h3>
  <?php foreach ($apa ->result() as $p ) {?>
    
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('index.php/utama/admin/edit_kaduk')?>" method="POST">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id Kategori</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_kategori"  value="<?php echo $p->id_kategori?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Kategori</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_kategori"  value="<?php echo $p->nama_kategori?>"> 
                </div>
            </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/kategori_produk')?>" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div>  
            </form>
          </div>
        </div>
      </section>
  <?php }?>    
</body>
</html>