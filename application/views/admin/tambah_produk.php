<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <form action="<?php echo base_url('utama/admin/tambahproduk')?>" method="POST" enctype="multipart/form-data">
   <div class="container">
     <h3><b>PRODUK BARU</b></h3>
 <div class="col-md-1">
 </div>
 <div class="jumbotron col-md-4">

      <input type="hidden" name="id_produk" class="form-control">

    <div class="form-group">
      <label>id kategori :</label>
      <select name="id_kategori" class="form-control">
      <option value="0">Pilih kategori</option>
      <?php foreach ($kat as $i) {?>
        <option value="<?php echo $i['id_kategori'];?>"><?php echo $i['nama_kategori'];?></option>
      <?php }?>
    </select>
    </div>

    <div class="form-group">
      <label>id merk :</label>
    <select name="id_merk" class="form-control">
      <option value="0">Pilih merk</option>
      <?php foreach ($sama as $i) {?>
        <option value="<?php echo $i['id_merk'];?>"><?php echo $i['nama_merk'];?></option>
      <?php }?>
    </select>
  </div>

     <div class="form-group">
      <label>nama produk :</label>
      <input type="text" name="nama_produk" class="form-control" required>
    </div>
     <div class="form-group">
      <label>bahan :</label>
      <input type="text" name="bahan" class="form-control">
    </div>
     <div class="form-group">
      <label>warna :</label>
      <input type="text" name="warna" class="form-control" required>
    </div>
     <div class="form-group">
      <label>deskripsi:</label>
      <input type="text" name="deskripsi" class="form-control" required>
    </div>
     <div class="form-group">
      <label>harga:</label>
      <input type="text" name="harga" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="userfile">Gambar :</label>
      <input type="file" name="foto" class="file">
      <div class="input-group col-xs-12">
      </div><br>
    </div>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
         <a href="<?php echo base_url('utama/admin/produk')?>" class="btn btn-default btn-reset">Batal</a>
 </div>
</div>
</form>