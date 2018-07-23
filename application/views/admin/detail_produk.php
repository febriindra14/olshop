<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <h2>Detail Produk</h2>
   <div class="container">
     <div class="row">
     
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="kotak">
              <a href=""><img class="img-thumbnail" src="<?php echo base_url(). 'assets/fronted/assets/img/'.$ayo['foto']; ?>"/></a>
              </div>
            </div>
              
              <div class="col-lg-4 col-md-6 mb-4">
              <div class="card-body">
                <div class="title">
                   <?php echo ''.$ayo['nama_produk']; ?>
                </div>
              <?php echo ''.$ayo['id_produk']; ?>
              <?php echo ''.$ayo['id_kategori']; ?>
              <?php echo ''.$ayo['id_merk']; ?>
              <?php echo ''.$ayo['bahan']; ?>
              <?php echo ''.$ayo['warna']; ?>
              <?php echo ''.$ayo['deskripsi']; ?>
             </div>
            </div>
 <h4>Rp. <?php echo (''.$ayo['harga']); ?></h4>
     </div>
  
   <br>
    <a href="<?php echo base_url('index.php/utama/admin/produk')?>" class="btn btn-default btn-reset">Kembali</a>
  </div> <!-- /container -->
</body>
</html>