<div class="span12">

    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('customer')?>">Home</a> <span class="divider">/</span></li>
    <li class="active">History Order</li>
    </ul>

    <div class="well">
   <h3>Order</h3>
  <?php 
  if (!empty($titip)) {
  $no = 1;
  foreach ($titip as $key => $row) { ?>
    <div class="row-fluid">  
        <div class="span1">
            <h2><strong> <?php echo $no; ?>. </strong></h2>
        </div>
        <div class="span7">
            <h4>Order : <?php echo $row['tgl_order']; ?></h4>
             <p>Kode Order   : <?php echo $row['id_order']; ?>
             <br>Total Bayar : Rp. <?php echo number_format($row['total_bayar'],0,'.','.'); ?> </p>
        </div>
        
          <div class="span4 alignR">
          <div class="form-horizontal qtyFrm">
            <h3>Status : <?php echo $row['keterangan']; ?></h3>
          </div>
        </div>

    </div>    
    
    <?php 
          $no++;  } 
        } else {
          echo "<h4 style='color: black;'><center>Gak ada</center></h4>";
          }  ?>            
        </div>
</div>     