<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="<?php echo base_url('index.php/utama/admin/tambah_order')?>" method="POST">
      
      <div class="container">
      <h3><b>Tambah Order</b></h3>
      <div class="col-md-1"></div>

 <div class="jumbotron col-md-4">

      <input type="hidden" name="id_order" class="form-control">
    <div class="form-group">
      <label>Id Customer :</label>
       <select name="id_customer" class="form-control">
      <option value="0">Pilih id cus</option>
      <?php foreach ($id as $j) {?>
        <option value="<?php echo $j['id_customer'];?>"><?php echo $j['id_customer'];?></option>
      <?php }?>
    </select>
    </div>  
    <div class="form-group">
      <label>Nama :</label>
      <input type="text" name="nama" class="form-control">
    </div>
    <div>
      <label>Total bayar :</label>
      <input type="text" name="total_bayar" class="form-control">
    </div>
    <div>
      <label>Tanggal order :</label>
      <input type="datetime" name="tgl_order" class="form-control">
    </div>
    <div>
      <label>Keterangan :</label>
      <input type="text" name="keterangan" class="form-control">
    </div>

      <div class="box-footer">
          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
             <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              <a href="<?php echo base_url('index.php/utama/admin/order')?>" class="btn btn-default btn-reset">Batal</a>
            </div>
          </div>
      </div>
       </div>
    </div>
           
  </form>  
</body>
</html>