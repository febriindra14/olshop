<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit halaman</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">

            <form action="<?php echo base_url('utama/admin/edit_halaman')?>" method="POST">
        <?php foreach ($data->result() as $key => $value) {?>

            <input type="hidden" name="id_hal" value="<?php echo $value->id_hal; ?>">  

            <div class="form-group">
              <label>Menu</label>
                  <input type="text" class="form-control" name="menu" value="<?php echo $value->menu?>"> 
            </div>

            <div class="form-group">
              <label>Judul1</label>
                  <input type="text" class="form-control" name="judul1" value="<?php echo $value->judul1?>"> 
            </div>

            <div class="form-group">
              <label>Judul2</label>
                  <input type="text" class="form-control" name="judul2" value="<?php echo $value->judul2?>"> 
            </div>

            <div class="form-group">
              <label>Judul3</label>
                  <input type="text" class="form-control" name="judul3" value="<?php echo $value->judul3?>"> 
            </div>

            <div class="form-group">
              <label>Judul4</label>
                  <input type="text" class="form-control" name="judul4" value="<?php echo $value->judul4?>"> 
            </div>

            <div class="form-group">
              <label>Deskripsi</label>
                <textarea name="deskripsi_hal" class="form-control" style="height: 100px; width: 500px;"><?php echo $value->deskripsi_hal ;?></textarea>
            </div>

              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('utama/admin/halaman')?>" class="btn btn-default btn-reset">Batal</a>
              </div> 
          <?php }?>       

            </form>
        </div>    
      </div>
    </div> 
</div>     