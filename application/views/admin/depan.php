<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
    <div class="col-md-3">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">User</p>
                    <p class="text-muted"> <?php echo $user ?> </p>
                    <a href="<?php echo base_url('utama/admin/tampil')?>">Masuk</a>
                </div>
             </div>
             </div>
               
                     <div class="col-md-5 ">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-list"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Kategori Produk</p>
                    <p class="text-muted"> <?php echo $kategori_produk ?></p>
                     <a href="<?php echo base_url('utama/admin/form_kaduk')?>">Tambah</a>
                </div>
             </div>
             </div>

              <div class="col-md-4">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-qrcode"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Merk Produk</p>
                    <p class="text-muted"> <?php echo $merk ?> </p>
                    <a href="<?php echo base_url('utama/admin/merk')?>">Lihat</a>
                </div>
             </div>
             </div>

              <div class="col-md-3">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-shopping-cart"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Produk</p>
                    <p class="text-muted"> <?php echo $produk ?> </p>
                    <a href="<?php echo base_url('utama/admin/produk')?>">Menuju</a>
                </div>
             </div>
             </div>

              <div class="col-md-4">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Customer</p>
                    <p class="text-muted"> <?php echo $customer ?> </p>
                    <a href="<?php echo base_url('utama/admin/customer')?>">Depan</a>
                </div>
             </div>
              </div>

             <div class="col-md-3">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-shopping-cart"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Order</p>
                    <p class="text-muted"> <?php echo $order ?> </p>
                    <a href="<?php echo base_url('utama/admin/order')?>">list</a>
                </div>
             </div>
             </div>

</div>