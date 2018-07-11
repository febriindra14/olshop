<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h3>Edit Produk</h3>
  <?php foreach ($kiriman ->result() as $j ) {?>
    
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('index.php/utama/admin/proses_edit')?>" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id produk</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_produk" value="<?php echo $j->id_produk?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Id kategori</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_kategori" value="<?php echo $j->id_kategori?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">id merk</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_merk" value="<?php echo $j->id_merk?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Produk</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_produk" value="<?php echo $j->nama_produk?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">bahan</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="bahan" value="<?php echo $j->bahan?>"> 
                </div>
            </div>   

            <div class="form-group">
              <label class="col-sm-2 control-label">warna</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="warna"  value="<?php echo $j->warna?>"> 
                </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">deskripsi</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="deskripsi" value="<?php echo $j->deskripsi?>"> 
                </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">Harga</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="harga" value="<?php echo $j->harga?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Gambar</label>
                <div class="col-sm-5">
                  <input type="file" name="foto" class="file" value="<?php echo $j->foto?>">
                </div>  
            </div>
                    
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/produk')?>" class="btn btn-default btn-reset">Batal</a>
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