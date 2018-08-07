<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit kategori</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">

            <form action="<?php echo base_url('utama/admin/edit_kaduk')?>" method="POST">
            <?php foreach ($apa ->result() as $p ) {?>
               <input type="hidden" name="id_kategori" value="<?php echo $p->id_kategori; ?>">

            <div class="form-group">
              <label>Nama Kategori</label>
                  <input type="text" class="form-control" name="nama_kategori"  value="<?php echo $p->nama_kategori?>"> 
            </div>

              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('utama/admin/kategori_produk')?>" class="btn btn-default btn-reset">Batal</a>
              </div>
            <?php }?>       

            </form>
        </div>    
      </div>
    </div> 
</div>     