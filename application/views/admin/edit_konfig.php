<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h3>Setting konfig</h3>
  <?php foreach ($web->result() as $send ) {?>
    
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('index.php/utama/admin/edit_konfig')?>" method="POST">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id web</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_web" value="<?php echo $send->id_web?>"> 
                </div>
            </div>  

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama web</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama_web" value="<?php echo $send->nama_web?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Email web</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="email_web" value="<?php echo $send->email_web?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Telepon web</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="telp_web" value="<?php echo $send->telp_web?>"> 
                </div>
            </div>

            <br><br><br><br>
          <div class="form-group">
            <label>Deskripsi</label>
               <textarea name="deskripsi" class="form-control" required="" style="height: 100px; width: 500px;"><?php echo $send->deskripsi ;?></textarea>
          </div>

          <div class="form-group">
                    <label class="col-sm-2 control-label">Twitter</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                        <input type="text" class="form-control" name="share1" placeholder="Facebook" value="<?php echo $send->share1; ?>">
                    </div>
          </div>
          <div class="form-group">          
                    <label class="col-sm-2 control-label">Facebook</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                        <input type="text" class="form-control" name="share2" placeholder="Instagram" value="<?php echo $send->share2; ?>">
                    </div>
             </div>
            <div class="form-group"> 
            <label class="col-sm-2 control-label">Instagram</label>       
                <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input type="text" class="form-control" name="share3" placeholder="Twitter" value="<?php echo $send->share3; ?>">
                 </div>
          </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/konfigurasi_web')?>" class="btn btn-default btn-reset">Batal</a>
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