<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit Customer</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">

            <form action="<?php echo base_url('utama/admin/edit_cus')?>" method="POST">
               <?php foreach ($konten ->result() as $j ) {?>

            <input type="hidden" name="id_customer" value="<?php echo $j->id_customer?>"> 

            <div class="form-group">
              <label>Nama </label>
                  <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $j->nama_lengkap?>"> 
            </div>

            <div class="form-group">
              <label>Email</label>
                  <input type="text" class="form-control" name="email" value="<?php echo $j->email?>"> 
            </div>

            <div class="form-group">
              <label>Password</label>
                  <input type="password" class="form-control" name="password" value="<?php echo $j->password?>"> 
            </div>   

            <div class="form-group">
              <label>Tanggal lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir"  value="<?php echo $j->tgl_lahir?>"> 
            </div>

            <div class="form-group">
              <label>Nomor telepon</label>
                  <input type="text" class="form-control" name="no_telp" value="<?php echo $j->no_telp?>"> 
            </div>

            <div class="form-group">
              <label>Nama rekening</label>
                  <input type="text" class="form-control" name="nama_rek" value="<?php echo $j->nama_rek?>"> 
            </div>

            <div class="form-group">
              <label>Nomor rekening</label>
                  <input type="text" class="form-control" name="no_rek" value="<?php echo $j->no_rek?>"> 
            </div>   

            <div class="form-group">
              <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat"  value="<?php echo $j->alamat?>"> 
            </div>
            
              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('utama/admin/customer')?>" class="btn btn-default btn-reset">Batal</a>
              </div>

      <?php }?>       

            </form>
        </div>    
      </div>
    </div> 
</div>     