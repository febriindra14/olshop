<div class="row">

    <div class="col-md-12">
        <h2><strong>Edit Produk</strong></h2>   
    </div>

</div>
<div class="row">

    <div class="col-md-6">

      <div class="panel-body">

        <div class="row">

          <form action="<?php echo base_url('index.php/utama/admin/proses_edit')?>" method="POST" enctype="multipart/form-data">
           <?php foreach ($kiriman ->result() as $j ) {?>
               
            <div class="form-group">
              <label>Id produk</label>
                  <input type="text" class="form-control" name="id_produk" value="<?php echo $j->id_produk?>"> 
            </div>

            <div class="form-group">
              <label>Id kategori</label>
                  <input type="text" class="form-control" name="id_kategori" value="<?php echo $j->id_kategori?>"> 
            </div>

            <div class="form-group">
              <label>id merk</label>
                  <input type="text" class="form-control" name="id_merk" value="<?php echo $j->id_merk?>"> 
            </div>

            <div class="form-group">
              <label>Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $j->nama_produk?>"> 
            </div>

            <div class="form-group">
              <label>bahan</label>
                <input type="text" class="form-control" name="bahan" value="<?php echo $j->bahan?>">
            </div>   

            <div class="form-group">
              <label>warna</label>
              <input type="text" class="form-control" name="warna"  value="<?php echo $j->warna?>"> 
            </div>

            <div class="form-group">
              <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" style="height: 100px; width: 500px;"><?php echo $j->deskripsi ;?></textarea>
            </div>

            <div class="form-group">
              <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo $j->harga?>"> 
            </div>

            <div class="form-group">
              <label>Gambar</label>
                  <input type="file" name="foto" class="file" value="<?php echo $j->foto?>">
            </div>
                    
              <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/produk')?>" class="btn btn-default btn-reset">Batal</a>
            </div> 
           
            <?php }?>       

        </form>
        </div>    
      </div>
    </div> 
</div>     