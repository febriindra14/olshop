<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit konfigurasi web</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">

            <form action="<?php echo base_url('utama/admin/edit_konfig')?>" method="POST">
      <?php foreach ($web->result() as $send ) {?>

            <input type="hidden" name="id_web" value="<?php echo $send->id_web; ?>">

            <div class="form-group">
              <label>Nama web</label>
                  <input type="text" class="form-control" name="nama_web" value="<?php echo $send->nama_web?>"> 
            </div>

            <div class="form-group">
              <label>Email web</label>
                  <input type="text" class="form-control" name="email_web" value="<?php echo $send->email_web?>"> 
            </div>

            <div class="form-group">
              <label>Telepon web</label>
                  <input type="text" class="form-control" name="telp_web" value="<?php echo $send->telp_web?>"> 
            </div>

          <div class="form-group">
            <label>Deskripsi</label>
               <textarea name="deskripsi" class="form-control" required="" style="height: 100px; width: 500px;"><?php echo $send->deskripsi ;?></textarea>
          </div>

          <div class="form-group">
              <label class="col-sm-3 control-label">Twitter</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                    <input type="text" class="form-control" name="share1" value="<?php echo $send->share1; ?>">
                </div>
          </div>
          <div class="form-group">          
              <label class="col-sm-3 control-label">Facebook</label>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                    <input type="text" class="form-control" name="share2" value="<?php echo $send->share2; ?>">
                </div>
          </div>
          <div class="form-group"> 
            <label class="col-sm-3 control-label">Instagram</label>       
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                   <input type="text" class="form-control" name="share3" value="<?php echo $send->share3; ?>">
              </div>
          </div>

              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('utama/admin/konfigurasi_web')?>" class="btn btn-default btn-reset">Batal</a>
              </div>
             
      <?php }?>       

            </form>
        </div>    
      </div>
    </div> 
</div>     