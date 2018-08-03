<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit Admin</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">
        

            <form action="<?php echo base_url('index.php/utama/admin/edit')?>" method="POST">
      <?php foreach ($sukses ->result() as $d ) {?>
           <input type="hidden" name="id_user" value="<?php echo $d->id_user; ?>">

             <div class="form-group">
                <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $d->nama; ?>">
             </div>

            <div class="form-group">
              <label>Username</label>
                  <input type="text" class="form-control" name="username"  value="<?php echo $d->username?>"> 
            </div>

            <div class="form-group">
              <label>Email</label>
                  <input type="text" class="form-control" name="email"  value="<?php echo $d->email?>"> 
            </div>   

            <div class="form-group">
              <label>Password</label>
                  <input type="password" class="form-control" name="password"  value="<?php echo $d->password?>"> 
            </div>
                        
              <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary btn-submmit">
                 <a href="<?php echo base_url('index.php/utama/admin/tampil');?>" class="btn btn-default btn-reset">Batal</a>
              </div>

      <?php }?>       

            </form>
        </div>    
      </div>
    </div> 
</div>     