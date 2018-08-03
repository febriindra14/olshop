<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit Merk</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">

            <form action="<?php echo base_url('index.php/utama/admin/edit_merk')?>" method="POST" enctype="multipart/form-data">
            <?php foreach ($tau ->result() as $you ) {?>

            <div class="form-group">
              <label>Id Merk</label>
                  <input type="text" class="form-control" name="id_merk"  value="<?php echo $you->id_merk?>"> 
            </div>

            <div class="form-group">
              <label>Nama Merk</label>
                  <input type="text" class="form-control" name="nama_merk"  value="<?php echo $you->nama_merk?>"> 
            </div>

            <div class="form-group">
              <label>Merk</label>
                  <input type="file" name="gambar" class="file" value="<?php echo $you->gambar?>">
            </div> 
            
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-submit" value="Simpan">
                <a href="<?php echo base_url('index.php/utama/admin/merk')?>" class="btn btn-default btn-reset">Batal</a>
            </div>
              
            <?php }?>       

            </form>
        </div>    
      </div>
    </div> 
</div>     