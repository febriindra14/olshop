<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit hal</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">

            <form action="<?php echo base_url('index.php/utama/admin/edit_hal')?>" method="POST">
          <?php foreach ($about ->result() as $send) { ?>
                
            <input type="hidden" name="id_hal" value="<?php echo $send->id_hal; ?>">  

            <div class="form-group">
              <label>Judul</label>
                  <input type="text" class="form-control" name="judul" value="<?php echo $send->judul?>"> 
            </div>

            <div class="form-group">
              <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" style="height: 100px; width: 500px;"><?php echo $send->deskripsi ;?></textarea>
            </div>

              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/halaman')?>" class="btn btn-default btn-reset">Batal</a>
              </div> 
          <?php }?>       

            </form>
        </div>    
      </div>
    </div> 
</div>     