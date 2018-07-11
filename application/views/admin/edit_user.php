<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php foreach ($sukses ->result() as $d ) {?>
    
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('index.php/utama/admin/edit')?>" method="POST">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id User</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_user"  value="<?php echo $d->id_user?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama"  value="<?php echo $d->nama?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="username"  value="<?php echo $d->username?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="email"  value="<?php echo $d->email?>"> 
                </div>
            </div>   

            <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-5">
                  <input type="password" class="form-control" name="password"  value="<?php echo $d->password?>"> 
                </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Hak Akses</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="hak_akses"  value="<?php echo $d->hak_akses?>"> 
                </div>
            </div>
            
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/tampil')?>" class="btn btn-default btn-reset">Batal</a>
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