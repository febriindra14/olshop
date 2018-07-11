<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <form action="<?php echo base_url('index.php/utama/admin/tambahproduk')?>" method="POST" enctype="multipart/form-data">
   <div class="container">
     <h3 align="center"><b>PRODUK BARU</b></h3>
 <div class="col-md-3">
 </div>
 <div class="jumbotron col-md-6">
    <div class="form-group">
      <label for="nama">id produk :</label>
      <input type="text" name="id_produk" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="harga">id kategori :</label>
      <input type="text" name="id_kategori" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="stok">id merk :</label>
      <input type="text" name="id_merk" class="form-control" required>
    </div>
     <div class="form-group">
      <label for="stok">nama produk :</label>
      <input type="text" name="nama_produk" class="form-control" required>
    </div>
     <div class="form-group">
      <label for="stok">bahan :</label>
      <input type="text" name="bahan" class="form-control" required>
    </div>
     <div class="form-group">
      <label for="stok">warna :</label>
      <input type="text" name="warna" class="form-control" required>
    </div>
     <div class="form-group">
      <label for="stok">deskripsi:</label>
      <input type="text" name="deskripsi" class="form-control" required>
    </div>
     <div class="form-group">
      <label for="stok">harga:</label>
      <input type="text" name="harga" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="userfile">Gambar :</label>
      <input type="file" name="foto" class="file">
      <div class="input-group col-xs-12">
      </div><br>
    </div>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
 </div>
</div>
</form>