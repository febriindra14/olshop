<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <h2>Detail merk</h2>
   <div class="container">
     <div class="row">
       <?php foreach($detail as $p){ ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="kotak">
            <a href="#"></a>
              <div class="card-body">
                <h1 class="card-title">
                  <a href="#"><?php echo $p->nama_merk ?></a>
                </h1>
                <a href="#"><img class="img-thumbnail" src="<?php echo base_url(). 'assets/images/'.$p->gambar?>"/></a>
             </div>
             
            </div>
          </div>
   
     </div>

   </div> <!-- /container -->
   <br>
    <a href="<?php echo base_url('index.php/utama/admin/merk')?>" class="btn btn-default btn-reset">Kembali</a>
   <?php } ?>
</body>
</html>