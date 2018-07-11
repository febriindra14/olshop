<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h3>Edit Customer</h3>
  <?php foreach ($konten ->result() as $j ) {?>
    
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('index.php/utama/admin/edit_cus')?>" method="POST">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id Customer</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_customer" value="<?php echo $j->id_customer?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Id User</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_user" value="<?php echo $j->id_user?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $j->tgl_lahir?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Pos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="kode_pos" value="<?php echo $j->kode_pos?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">No Telepon</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="no_telp" value="<?php echo $j->no_telp?>"> 
                </div>
            </div>   

            <div class="form-group">
              <label class="col-sm-2 control-label">No Rekening</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="no_rekening"  value="<?php echo $j->no_rekening?>"> 
                </div>
            </div>

             <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-5">
                  <input type="password" class="form-control" name="alamat" value="<?php echo $j->alamat?>"> 
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
            </form>
          </div>
        </div>
      </section>
  <?php }?>    
</body>
</html>