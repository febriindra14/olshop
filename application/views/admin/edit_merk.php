<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h3>Edit Merk</h3>
  <?php foreach ($tau ->result() as $you ) {?>
    
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('index.php/utama/admin/edit_merk')?>" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id Merk</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_merk"  value="<?php echo $you->id_merk?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Merk</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_merk"  value="<?php echo $you->nama_merk?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Merk</label>
                <div class="col-sm-5">
                  <input type="file" name="gambar" class="file" value="<?php echo $you->gambar?>">
                </div>  
            </div> 


            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/merk')?>" class="btn btn-default btn-reset">Batal</a>
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