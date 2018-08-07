<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit footer</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">

            <form action="<?php echo base_url('utama/admin/edit_footer')?>" method="POST">
        <?php foreach ($foot->result() as $key => $value) {?>

            <input type="hidden" name="id_footer" value="<?php echo $value->id_footer; ?>">  

            <div class="form-group">
              <label>Isi 1</label>
                  <input type="text" class="form-control" name="isi1" value="<?php echo $value->isi1?>"> 
            </div>

            <div class="form-group">
              <label>isi 2</label>
                <textarea name="isi2" class="form-control" style="height: 100px; width: 500px;"><?php echo $value->isi2 ;?></textarea>
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