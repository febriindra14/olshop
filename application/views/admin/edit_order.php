<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h3>Edit order</h3>
  <?php foreach ($edit ->result() as $d ) {?>
    
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('index.php/utama/admin/edit_order')?>" method="POST">

            <div class="form-group">
              <label class="col-sm-2 control-label">Id order</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_order"  value="<?php echo $d->id_order?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Id customer</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_customer"  value="<?php echo $d->id_customer?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nama"  value="<?php echo $d->nama?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Total Bayar</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="total_bayar"  value="<?php echo $d->total_bayar?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal order</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tgl_order"  value="<?php echo $d->tgl_order?>"> 
                </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="keterangan"  value="<?php echo $d->keterangan?>"> 
                </div>
            </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input style="background: #00BFFF;" type="submit" class="btn btn-primary btn-submit" value="Simpan">
                  <a href="<?php echo base_url('index.php/utama/admin/order')?>" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div>  
            </form>
          </div>
        </div>
      </section>
  <?php }?>    
</body>
</html>