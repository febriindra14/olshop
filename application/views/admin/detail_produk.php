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
       <?php foreach($ayo as $q){ ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="kotak">
              <a href=""><img class="img-thumbnail" src="<?php echo base_url(). 'assets/images/'.$q->foto?>"/></a>
              </div>
            </div>
              
              <div class="col-lg-4 col-md-6 mb-4">
              <div class="card-body">
                <div class="title">
                   <?php echo $q->nama_produk?>
                </div>
              <?php echo $q->id_produk?>
              <?php echo $q->id_kategori?>
              <?php echo $q->id_merk?>
              <?php echo $q->bahan ?>
              <?php echo $q->warna ?>
              <?php echo $q->deskripsi ?>
             </div>
            </div>
 <h4>Rp. <?php echo number_format($q->harga,0,",","."); ?></h4>
     </div>
   <?php } ?>
   <br>
    <a href="<?php echo base_url('index.php/utama/admin/produk')?>" class="btn btn-default btn-reset">Kembali</a>
  </div> <!-- /container -->
</body>
</html>