<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h3>Ubah</h3>
  <?php foreach ($about ->result() as $send) { ?>
    
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('index.php/utama/admin/edit_hal')?>" method="POST">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id hal</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_hal" value="<?php echo $send->id_hal?>"> 
                </div>
            </div>  

            <div class="form-group">
              <label class="col-sm-2 control-label">Judul</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="judul" value="<?php echo $send->judul?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Deskripsi</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" rows="3" name="deskripsi" value="<?php echo $send->deskripsi?>">
                </div>
            </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/halaman')?>" class="btn btn-default btn-reset">Batal</a>
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